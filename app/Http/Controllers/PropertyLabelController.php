<?php

namespace App\Http\Controllers;

use App\Models\PropertyLabel;
use Illuminate\Http\Request;
use Str;

class PropertyLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyLabels = PropertyLabel::all();
        return view('admin.property-label.index', compact('propertyLabels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.property-label.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validate the input
        $request->validate([
            'property_label' => 'required|string|unique:property_labels,name',
        ]);

        ## Create a new PropertyLabel
        PropertyLabel::create([
            'name' => $request->property_label,
            'slug' => Str::slug($request->property_label),
        ]);

        ## Redirect back with success message
        return redirect()->back()->with('success', 'Property Label added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = PropertyLabel::findOrFail($id);
        return view('admin.property-label.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        ## Validate the input
        $request->validate([
            'property_label' => 'required|string|unique:property_labels,name,' . $id,
        ]);

        ## Find the PropertyLabel by ID
        $PropertyLabel = PropertyLabel::findOrFail($id);

        ## Update the record
        $PropertyLabel->update([
            'name' => $request->property_label,
            'slug' => Str::slug($request->property_label),
        ]);

        ## Redirect back with a success message
        return redirect()->back()->with('success', 'Property Label updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $PropertyLabel = PropertyLabel::findOrFail($id);
        $PropertyLabel->delete();

        return redirect()->back()->with('success', 'Item deletesd successfully.');
    }


    public function changeStatus($id)
    {
        $PropertyLabel = PropertyLabel::findOrFail($id);
        $PropertyLabel->status = $PropertyLabel->status === 'active' ? 'inactive' : 'active';
        $PropertyLabel->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $PropertyLabel->status
        ]);
    }
}
