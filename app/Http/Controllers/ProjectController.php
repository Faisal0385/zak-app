<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validate the form data
        $validated = $request->validate([
            'project_name' => 'required|string|max:255|unique:projects,project_name',
            'developer_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        ## Create the project
        Project::create([
            'project_name' => $validated['project_name'],
            'slug' => Str::slug($validated['project_name']),
            'developer_name' => $validated['developer_name'],
            'image' => $imagePath ?? null,
            'status' => 'active', // Or any default, or get from form if added
            'is_featured' => $request->has('is_featured') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Project created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ## Validate the form data
        $request->validate([
            'project_name' => 'required|string|unique:projects,project_name,' . $id,
            'developer_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg,webp|max:2048',
        ]);

        ## Find the Project by ID
        $Project = Project::findOrFail($id);

        if ($request->hasFile('image')) {
            // Optionally delete old image:
            if ($Project->image && file_exists(public_path($Project->image))) {
                unlink(public_path($Project->image));
            }

            $path = $request->file('image')->store('projects', 'public');
            $Project->image = 'storage/' . $path;
        }

        ## Update the record
        $Project->update([
            'project_name' => $request->project_name,
            'slug' => Str::slug($request->project_name),
            'developer_name' => $request->developer_name,
            'image' => $Project->image ?? null,
            'status' => 'active', // Or any default, or get from form if added
            'is_featured' => $request->has('is_featured') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Project = Project::findOrFail($id);

        if ($Project->image && file_exists(public_path($Project->image))) {
            unlink(public_path($Project->image));
        }

        $Project->delete();

        return redirect()->back()->with('success', 'Item deletesd successfully.');
    }

    /**
     * Upload category image to storage and return its path.
     */
    private function uploadImage($file)
    {
        $path = $file->store('projects', 'public');
        return 'storage/' . $path;
    }

    public function changeStatus($id)
    {
        $Project = Project::findOrFail($id);
        $Project->status = $Project->status === 'active' ? 'inactive' : 'active';
        $Project->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $Project->status
        ]);
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
