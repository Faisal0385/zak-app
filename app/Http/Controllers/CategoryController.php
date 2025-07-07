<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'cat_img' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
        ]);

        $category = new Category();
        $category->name = $validated['name'];
        $category->slug = Str::slug($validated['name']);
        $category->status = 'active';

        if ($request->hasFile('cat_img')) {
            $category->image = $this->uploadImage($request->file('cat_img'));
        }

        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Category added successfully.',
            'data' => $category,
        ]);
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'image' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
        ]);

        $category->name = $validated['name'];
        $category->slug = Str::slug($validated['name']);

        if ($request->hasFile('image')) {
            $this->deleteImage($category->image);
            $category->image = $this->uploadImage($request->file('image'));
        }

        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully.',
            'data' => $category
        ]);
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category)
    {
        $this->deleteImage($category->image);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    /**
     * Toggle the status of the category.
     */
    public function changeStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->status = $category->status === 'active' ? 'inactive' : 'active';
        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $category->status
        ]);
    }

    /**
     * Upload category image to storage and return its path.
     */
    private function uploadImage($file)
    {
        $path = $file->store('categories', 'public');
        return 'storage/' . $path;
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
