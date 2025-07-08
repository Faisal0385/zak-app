<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyAmenitiesList;
use App\Models\PropertyFloorLayout;
use Illuminate\Http\Request;

class PropertyFloorLayoutController extends Controller
{
    public function index(Request $request, $id)
    {
        Properties::findOrFail($id);

        PropertyAmenitiesList::create([
            'property_id' => $id,
            'property_amenity_id' => $request->property_amenity_id,
        ]);

        return redirect()->back()->with('success', 'Property Amenity Updated Successfully!');
    }

    // Store a new floor layout
    public function store(Request $request, $property_id)
    {
        $request->validate([
            'floor_name' => 'nullable|string',
            'floor_price' => 'nullable|string',
            'price_postfix' => 'nullable|string',
            'floor_size' => 'nullable|string',
            'bedroom' => 'nullable|string',
            'bathroom' => 'nullable|string',
            'description' => 'nullable|string',
            'floor_layout_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $data = $request->all();
        $data['property_id'] = $property_id;

        if ($request->hasFile('floor_layout_image')) {
            $file = $request->file('floor_layout_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/floor_layouts');

            // Create the folder if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move the file to public/uploads/floor_layouts
            $file->move($destinationPath, $filename);

            // Save the relative path to DB
            $data['floor_layout_image'] = 'uploads/floor_layouts/' . $filename;
        }

        PropertyFloorLayout::create($data);

        return back()->with('success', 'Floor Layout Added Successfully');
    }

    // Edit view
    public function edit($id)
    {
        $editLayout = PropertyFloorLayout::findOrFail($id);
        return view('your.view', compact('editLayout'));
    }

    // Update an existing layout
    public function update(Request $request, $id)
    {
        $layout = PropertyFloorLayout::findOrFail($id);

        $request->validate([
            'floor_name' => 'nullable|string',
            'floor_price' => 'nullable|string',
            'price_postfix' => 'nullable|string',
            'floor_size' => 'nullable|string',
            'bedroom' => 'nullable|string',
            'bathroom' => 'nullable|string',
            'description' => 'nullable|string',
            'floor_layout_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('floor_layout_image')) {
            // Delete old file if it exists
            if ($layout->floor_layout_image && file_exists(public_path($layout->floor_layout_image))) {
                unlink(public_path($layout->floor_layout_image));
            }

            $file = $request->file('floor_layout_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/floor_layouts');

            // Create the directory if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move the file to public/uploads/floor_layouts
            $file->move($destinationPath, $filename);

            // Save the relative path to DB
            $data['floor_layout_image'] = 'uploads/floor_layouts/' . $filename;
        }

        $layout->update($data);

        return redirect()->back()->with('success', 'Floor Layout Updated Successfully');
    }

    // Delete a layout
    public function destroy($id)
    {
        $layout = PropertyFloorLayout::findOrFail($id);

        if ($layout->floor_layout_image && file_exists(public_path($layout->floor_layout_image))) {
            unlink(public_path($layout->floor_layout_image));
        }

        $layout->delete();

        return back()->with('success', 'Floor Layout Deleted Successfully');
    }
}
