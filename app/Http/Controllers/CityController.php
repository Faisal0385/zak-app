<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
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
        $states = State::where('status', '=', 'active')->orderBy('name', 'asc')->get();
        return view('admin.city.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validation
        $request->validate([
            'state_id' => 'nullable|exists:states,id', ## now nullable
            'name' => 'required|string|max:255',
        ]);

        ## Create a new City
        City::create([
            'name' => $request->name,
            'state_id' => $request->state_id, ## will be null if not provided
            'slug' => City::generateUniqueSlug($request->name),
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
        $states = State::where('status', '=', 'active')->orderBy('name', 'asc')->get();
        return view('admin.city.edit', compact('city', 'states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'state_id' => 'nullable|exists:states,id',
            'name' => 'required|string|max:255',
        ]);

        $city = City::findOrFail($id);

        $city->update([
            'name' => $request->name,
            'state_id' => $request->state_id,
            'slug' => City::generateUniqueSlug($request->name, $id),
        ]);

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
