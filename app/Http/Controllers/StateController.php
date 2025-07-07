<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Str;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::all();
        return view('admin.state.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::where('status', '=', 'active')->orderBy('name', 'asc')->get();
        return view('admin.state.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ## Validation
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255|unique:states,name',
        ]);

        ## Create a new Country
        State::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'slug' => Str::slug($request->name),
        ]);

        ## Redirect back with success message
        return redirect()->back()->with('success', 'State name added successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $state = State::findOrFail($id);
        $countries = Country::where('status', '=', 'active')->orderBy('name', 'asc')->get();
        return view('admin.state.edit', compact('state', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        # Validate the input
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|unique:states,name,' . $id,
        ]);

        # Find the Country by ID
        $state = State::findOrFail($id);

        # Update the record
        $state->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'slug' => Str::slug($request->name),
        ]);

        # Redirect back with a success message
        return redirect()->back()->with('success', 'State name updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        State::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }


    public function changeStatus($id)
    {
        $state = State::findOrFail($id);
        $state->status = $state->status === 'active' ? 'inactive' : 'active';
        $state->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $state->status
        ]);
    }
}
