<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Properties;
use App\Models\PropertyAmenities;
use App\Models\PropertyType;
use Illuminate\Http\Request;

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
        // Validation
        $validated = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'property_name' => 'required|string|max:255|unique:properties,property_name',
        ]);

        // Create property
        Properties::create([
            'project_id' => $validated['project_id'],
            'property_name' => $validated['property_name'],
        ]);

        // Redirect back with success message
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
}
