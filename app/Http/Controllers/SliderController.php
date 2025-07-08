<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->sub_title = $request->subtitle;

        if ($request->hasFile('image')) {
            $slider->image = $this->uploadImage($request->file('image'));
        }

        $slider->save();

        return response()->json([
            'success' => true,
            'message' => 'Slider added successfully!'
        ]);
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, Slider $Slider)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:sliders,id',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $slider = Slider::find($request->id);
        $slider->title = $request->title;
        $slider->sub_title = $request->subtitle;

        if ($request->hasFile('image')) {
            $this->deleteImage($slider->image);
            $slider->image = $this->uploadImage($request->file('image'));
        }

        $slider->save();

        return response()->json([
            'success' => true,
            'message' => 'Slider updated successfully!'
        ]);
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Slider $slider)
    {
        $this->deleteImage($slider->image);
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    }

    /**
     * Toggle the status of the category.
     */
    public function changeStatus($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->status = $slider->status === 'active' ? 'inactive' : 'active';
        $slider->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $slider->status
        ]);
    }

    /**
     * Upload category image to storage and return its path.
     */
    private function uploadImage($image)
    {
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads/sliders');

        // Create the folder if it doesn't exist
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // Move the image to public/uploads/sliders
        $image->move($destinationPath, $imageName);

        // Return the relative path (to be stored in DB and used in frontend)
        return 'uploads/sliders/' . $imageName;
    }

    /**
     * Delete category image from storage if exists and not placeholder.
     */
    private function deleteImage($imagePath)
    {
        if ($imagePath && $imagePath !== 'images/no_image.jpg') {
            $fullPath = public_path($imagePath);
            if (file_exists($fullPath)) {
                @unlink($fullPath);
            }
        }
    }
}
