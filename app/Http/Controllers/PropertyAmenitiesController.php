<?php

namespace App\Http\Controllers;

use App\Models\PropertyAmenities;
use Illuminate\Http\Request;
use Str;

class PropertyAmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyAmenities = PropertyAmenities::all();
        return view('admin.property-amenities.index', compact('propertyAmenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.property-amenities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validate the input
        $request->validate([
            'name' => 'required|string|unique:property_amenities,name',
            'icon_class' => 'nullable|string',
        ]);

        ## Create a new PropertyAmenities
        PropertyAmenities::create([
            'name' => $request->name,
            'icon_class' => $request->icon_class ?? "fa fa-check-circle",
            'slug' => Str::slug($request->name),
        ]);

        ## Redirect back with success message
        return redirect()->back()->with('success', 'Property Amenities added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = PropertyAmenities::findOrFail($id);
        return view('admin.property-amenities.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        ## Validate the input
        $request->validate([
            'name' => 'required|string|unique:property_amenities,name,' . $id,
            'icon_class' => 'nullable|string',
        ]);

        ## Find the PropertyAmenities by ID
        $PropertyAmenities = PropertyAmenities::findOrFail($id);

        ## Update the record
        $PropertyAmenities->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'icon_class' => $request->icon_class ?? "fa fa-check-circle",
        ]);

        ## Redirect back with a success message
        return redirect()->back()->with('success', 'Property Amenties updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $PropertyAmenities = PropertyAmenities::findOrFail($id);
        $PropertyAmenities->delete();

        return redirect()->back()->with('success', 'Item deletesd successfully.');
    }


    public function changeStatus($id)
    {
        $PropertyAmenities = PropertyAmenities::findOrFail($id);
        $PropertyAmenities->status = $PropertyAmenities->status === 'active' ? 'inactive' : 'active';
        $PropertyAmenities->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $PropertyAmenities->status
        ]);
    }
}
