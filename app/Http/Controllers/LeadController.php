<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Session;

class LeadController extends Controller
{

    // Store a new lead
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'property_type_id' => 'required|exists:property_types,id',
            'budget' => 'required|string|max:255',
        ]);

        // Save lead to DB
        Lead::create([
            'name' => $validated['name'],
            'phone_number' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'property_type_id' => $validated['property_type_id'],
            'budget' => $validated['budget'],
        ]);

        // Set session to avoid showing form again for 3 days
        session(['lead_submitted' => true]);

        // Set session expiration for 3 days (in seconds)
        session()->put('lead_expires_at', now()->addDays(3)->timestamp);

        return redirect()->back()->with('success', 'Thank you! Your information has been submitted.');
    }

    // Show a single lead
    public function show(Lead $lead)
    {
        return view('leads.show', compact('lead'));
    }

    // Show form to edit a lead
    public function edit(Lead $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    // Update a lead
    public function update(Request $request, Lead $lead)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'looking_for' => 'required|string',
            'budget' => 'required|string',
        ]);

        $lead->update($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead updated successfully.');
    }

    // Delete a lead
    public function destroy(Lead $lead)
    {
        $lead->delete();

        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }
}
