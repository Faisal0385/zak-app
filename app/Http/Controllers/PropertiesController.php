<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Properties;
use App\Models\PropertyAmenities;
use App\Models\PropertyGalleryImage;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->orderBy('project_name', 'desc')->get();
        $properties = Properties::latest()->where('status', '=', 'active')->get();
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
        return view('admin.properties.add', compact('properties', 'propertyTypes', 'propertyAmenities'));
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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

    public function updateStatus(Request $request, $id)
    {
        dd($id);
        // $request->validate([
        //     'for_rent' => 'nullable|string',
        //     'for_sale' => 'nullable|string',
        // ]);

        // $property = Properties::findOrFail($id);

        // if ($request->has('for_rent')) {
        //     $property->for_rent = $request->for_rent == 1 ? 0 : 1;
        // }

        // if ($request->has('for_sale')) {
        //     $property->for_sale = $request->for_sale == 1 ? 0 : 1;
        // }

        // $property->save();

        // ## Redirect back with success message
        // return redirect()->back()->with('success', 'Property status updated successfully.');
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

    public function updateFile(Request $request, $id)
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

}
