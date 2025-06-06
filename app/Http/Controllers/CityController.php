<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Str;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::where('status', '=', 'active')->orderBy('name', 'asc')->get();
        return view('admin.city.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validation
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255|unique:cities,name',
        ]);

        ## Create a new Country
        City::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'slug' => Str::slug($request->name),
        ]);

        ## Redirect back with success message
        return redirect()->back()->with('success', 'City name added successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::findOrFail($id);
        $countries = Country::where('status', '=', 'active')->orderBy('name', 'asc')->get();
        return view('admin.city.edit', compact('city', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        # Validate the input
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|unique:cities,name,' . $id,
        ]);

        # Find the Country by ID
        $city = City::findOrFail($id);

        # Update the record
        $city->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'slug' => Str::slug($request->name),
        ]);

        # Redirect back with a success message
        return redirect()->back()->with('success', 'City name updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        City::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }


    public function changeStatus($id)
    {
        $city = City::findOrFail($id);
        $city->status = $city->status === 'active' ? 'inactive' : 'active';
        $city->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $city->status
        ]);
    }
}
