<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use Str;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = PropertyType::all();
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
        ## Validate the input
        $request->validate([
            'property_type' => 'required|string|unique:property_types,name',
        ]);

        ## Create a new PropertyType
        PropertyType::create([
            'name' => $request->property_type,
            'slug' => Str::slug($request->property_type),
        ]);

        ## Redirect back with success message
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
        ## Validate the input
        $request->validate([
            'property_type' => 'required|string|unique:property_types,name,' . $id,
        ]);

        ## Find the PropertyType by ID
        $PropertyType = PropertyType::findOrFail($id);

        ## Update the record
        $PropertyType->update([
            'name' => $request->property_type,
            'slug' => Str::slug($request->property_type),
        ]);

        ## Redirect back with a success message
        return redirect()->back()->with('success', 'Property Type updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propertyType = PropertyType::findOrFail($id);
        $propertyType->delete();

        return redirect()->back()->with('success', 'Item deletesd successfully.');
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
