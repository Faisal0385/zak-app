<?php

namespace App\Http\Controllers;

use App\Models\PropertyStatus;
use Illuminate\Http\Request;
use Str;

class PropertyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = PropertyStatus::all();
        return view('admin.property-status.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.property-status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validate the input
        $request->validate([
            'property_status' => 'required|string|unique:property_statuses,name',
        ]);

        ## Create a new PropertyStatus
        PropertyStatus::create([
            'name' => $request->property_status,
            'slug' => Str::slug($request->property_status),
        ]);

        ## Redirect back with success message
        return redirect()->back()->with('success', 'Property Status added successfully!');
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
        $property = PropertyStatus::findOrFail($id);
        return view('admin.property-status.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'property_status' => 'required|string|unique:property_statuses,name,' . $id,
        ]);

        // Find the PropertyStatus by ID
        $propertyStatus = PropertyStatus::findOrFail($id);

        // Update the record
        $propertyStatus->update([
            'name' => $request->property_status,
            'slug' => \Illuminate\Support\Str::slug($request->property_status),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Property Status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PropertyStatus::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }


    public function changeStatus($id)
    {
        $propertyStatus = PropertyStatus::findOrFail($id);
        $propertyStatus->status = $propertyStatus->status === 'active' ? 'inactive' : 'active';
        $propertyStatus->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $propertyStatus->status
        ]);
    }
}
