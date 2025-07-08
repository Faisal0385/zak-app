<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = PropertyType::latest()->get();
        return view('admin.property-type.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.property-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate input including image
        $request->validate([
            'property_type' => 'required|string|unique:property_types,name|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($request->property_type) . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/property_types'), $imageName);
            $imagePath = 'uploads/property_types/' . $imageName;
        }

        // Store in DB
        PropertyType::create([
            'name' => $request->property_type,
            'slug' => Str::slug($request->property_type),
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Property Type added successfully!');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = PropertyType::findOrFail($id);
        return view('admin.property-type.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate input with image
        $request->validate([
            'property_type' => 'required|string|unique:property_types,name,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);

        // Find property type
        $propertyType = PropertyType::findOrFail($id);

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($propertyType->image && File::exists(public_path($propertyType->image))) {
                File::delete(public_path($propertyType->image));
            }

            $image = $request->file('image');
            $imageName = Str::slug($request->property_type) . '_' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/property_types/' . $imageName;
            $image->move(public_path('uploads/property_types'), $imageName);

            // Set new image path
            $propertyType->image = $imagePath;
        }

        // Update name & slug
        $propertyType->name = $request->property_type;
        $propertyType->slug = Str::slug($request->property_type);
        $propertyType->save();

        return redirect()->back()->with('success', 'Property Type updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propertyType = PropertyType::findOrFail($id);

        // Delete the image from the public folder if it exists
        if ($propertyType->image && File::exists(public_path($propertyType->image))) {
            File::delete(public_path($propertyType->image));
        }

        // Delete the database record
        $propertyType->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }


    public function changeStatus($id)
    {
        $PropertyType = PropertyType::findOrFail($id);
        $PropertyType->status = $PropertyType->status === 'active' ? 'inactive' : 'active';
        $PropertyType->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $PropertyType->status
        ]);
    }
}
