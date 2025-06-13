<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Project;
use App\Models\Properties;
use App\Models\PropertyAmenities;
use App\Models\PropertyAmenitiesList;
use App\Models\PropertyFloorLayout;
use App\Models\PropertyGalleryImage;
use App\Models\PropertyType;
use App\Models\PropertyTypeList;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::where('status', '=', 'active')->latest()->orderBy('project_name', 'desc')->get();
        $properties = Properties::latest()->get();

        return view('admin.properties.index', compact('projects', 'properties'));
    }

    /**
     * Display the specified resource.
     */
    public function add(string $id)
    {
        $properties = Properties::findOrFail($id);
        $propertyTypes = PropertyType::where('status', 'active')->get();
        $propertyAmenities = PropertyAmenities::where('status', 'active')->get();
        $countries = Country::where('status', '=', 'active')->get();
        $states = State::where('status', '=', 'active')->get();
        $cities = City::where('status', '=', 'active')->get();
        $results = PropertyTypeList::where('property_id', '=', $id)->get();
        $propertyAmenitiesLists = PropertyAmenitiesList::where('property_id', '=', $id)->get();
        $propertyFloorLayouts = PropertyFloorLayout::where('property_id', '=', $id)->get();

        return view('admin.properties.add', compact('propertyAmenitiesLists', 'propertyFloorLayouts', 'properties', 'propertyTypes', 'propertyAmenities', 'countries', 'states', 'cities', 'results'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        ## Validation
        $validated = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'property_name' => 'required|string|max:255|unique:properties,property_name',
        ]);

        ## Create property
        Properties::create([
            'project_id' => $validated['project_id'],
            'property_name' => $validated['property_name'],
        ]);

        ## Redirect back with success message
        return redirect()->back()->with('success', 'Property added successfully.');
    }

    public function updateLocation(Request $request, $id)
    {
        ## Validation
        $validated = $request->validate([
            'address' => 'nullable|string|max:500',
            'google_map' => 'nullable|string',
        ]);

        ## Find the property
        $property = Properties::findOrFail($id);

        ## Update fields
        $property->address = $validated['address'];
        $property->google_map = $validated['google_map'];
        $property->save();

        ## Redirect back with success message
        return redirect()->back()->with('success', 'Property location updated successfully.');
    }

    public function updateVideoURL(Request $request, $id)
    {
        ## Validation
        $validated = $request->validate([
            'video_url' => 'nullable|string|max:500',
        ]);

        ## Find the property
        $property = Properties::findOrFail($id);

        ## Update fields
        $property->video_url = $validated['video_url'];
        $property->save();

        ## Redirect back with success message
        return redirect()->back()->with('success', 'Video URL updated successfully.');
    }

    public function changeStatus(Request $request, $id)
    {

        $property = Properties::findOrFail($id);
        $property->status = $property->status === 'active' ? 'inactive' : 'active';
        $property->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $property->status
        ]);
    }

    public function updateFeaturedImage(Request $request, $id)
    {
        $request->validate([
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $property = Properties::findOrFail($id);

        if ($request->hasFile('featured_image')) {
            // Optionally delete old image:
            if ($property->featured_image && file_exists(public_path($property->featured_image))) {
                unlink(public_path($property->featured_image));
            }

            $path = $request->file('featured_image')->store('properties', 'public');
            // Save relative path in DB
            $property->featured_image = 'storage/' . $path;
        }
        $property->save();

        return redirect()->back()->with('success', 'Featured image updated successfully!');
    }

    public function uploadPdfFile(Request $request, $id)
    {
        $request->validate([
            'pdf_attachment' => 'required|mimes:pdf|max:5120', // 5MB max
        ]);

        $property = Properties::findOrFail($id);

        if ($property->pdf_attachment && Storage::disk('public')->exists($property->pdf_attachment)) {
            Storage::disk('public')->delete($property->pdf_attachment);
        }

        $path = $request->file('pdf_attachment')->store('property_pdf', 'public');

        $property->file_attachment = 'storage/' . $path;
        $property->save();

        return redirect()->back()->with('success', 'PDF uploaded successfully!');
    }

    public function storeGalleryImage(Request $request, $id)
    {
        $request->validate([
            'gallery_image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $property = Properties::findOrFail($id);

        // Store image in public disk
        $path = $request->file('gallery_image')->store('property_gallery', 'public');

        // Save to PropertyGalleryImage model
        $galleryImage = new PropertyGalleryImage();
        $galleryImage->property_id = $property->id;
        $galleryImage->gallery_image = 'storage/' . $path;
        $galleryImage->save();

        return redirect()->back()->with('success', 'Gallery image uploaded successfully!');
    }

    public function updateLabel(Request $request, $id)
    {

        $property = Properties::findOrFail($id);

        $property->update([
            'for_rent' => $request->has('for_rent') ? 1 : 0,
            'for_sale' => $request->has('for_sale') ? 1 : 0,
            'hot_offer' => $request->has('hot_offer') ? 1 : 0,
            'sale' => $request->has('sale') ? 1 : 0,
            'sold' => $request->has('sold') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Property labels updated successfully!');

    }

    public function updateBasicInfo(Request $request, $id)
    {
        $property = Properties::findOrFail($id);

        ## Validate input
        $validated = $request->validate([
            'property_id' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'before_price_label' => 'nullable|string|max:255',
            'after_price_label' => 'nullable|string|max:255',
            'price_unit' => 'nullable|string|max:50',
            'price_on_call' => 'nullable|string',
            'size' => 'nullable|numeric',
            'land' => 'nullable|numeric',
            'room' => 'nullable|integer',
            'bedroom' => 'nullable|integer',
            'bathroom' => 'nullable|integer',
            'garages' => 'nullable|integer',
            'garages_size' => 'nullable|numeric',
            'year_built' => 'nullable|string',
            'city_id' => 'nullable|integer',
            'state_id' => 'nullable|integer',
            'country_id' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        ## Update model fields
        $property->fill($validated);

        ## Handle checkbox separately (it may not be sent if unchecked)
        $property->price_on_call = $request->has('price_on_call') ? 'yes' : 'no';

        ## Save changes
        $property->save();

        ## Redirect with success message
        return redirect()->back()->with('success', 'Property updated successfully!');
    }

    public function createTypeList(Request $request, $id)
    {
        Properties::findOrFail($id);

        PropertyTypeList::create([
            'property_id' => $id,
            'property_type_id' => $request->property_type_id,
        ]);

        return redirect()->back()->with('success', 'Property Type Updated Successfully!');
    }

    public function deleteTypeList(Request $request, $id)
    {
        $PropertyTypeList = PropertyTypeList::findOrFail($id);

        $PropertyTypeList->delete();
        return redirect()->back()->with('success', 'Property Type Deleted Successfully!');
    }

    public function createAmenitiesList(Request $request, $id)
    {
        Properties::findOrFail($id);

        PropertyAmenitiesList::create([
            'property_id' => $id,
            'property_amenity_id' => $request->property_amenity_id,
        ]);

        return redirect()->back()->with('success', 'Property Amenity Updated Successfully!');
    }

    public function deleteAmenitiesList(Request $request, $id)
    {
        $PropertyAmenitiesList = PropertyAmenitiesList::findOrFail($id);

        $PropertyAmenitiesList->delete();
        return redirect()->back()->with('success', 'Property Amenity Deleted Successfully!');
    }
}
