<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('admin.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validate the input
        $request->validate([
            'name' => 'required|string|unique:countries,name',
        ]);

        ## Create a new Country
        Country::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        ## Redirect back with success message
        return redirect()->back()->with('success', 'Country name added successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country = Country::findOrFail($id);
        return view('admin.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        # Validate the input
        $request->validate([
            'name' => 'required|string|unique:countries,name,' . $id,
        ]);

        # Find the Country by ID
        $Country = Country::findOrFail($id);

        # Update the record
        $Country->update([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name),
        ]);

        # Redirect back with a success message
        return redirect()->back()->with('success', 'Country name updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Country::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }


    public function changeStatus($id)
    {
        $Country = Country::findOrFail($id);
        $Country->status = $Country->status === 'active' ? 'inactive' : 'active';
        $Country->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $Country->status
        ]);
    }
}
