<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{

    public function view()
    {
        $leads = Lead::orderBy('status')->get();
        return view('admin.lead.index', compact('leads'));
    }

    ## Store a new lead
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'property_type_id' => 'required|exists:property_types,id',
            'budget' => 'required|string|max:255',
        ]);

        ## Save lead to DB
        Lead::create([
            'name' => $validated['name'],
            'phone_number' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'property_type_id' => $validated['property_type_id'],
            'budget' => $validated['budget'],
        ]);

        ## Set session to avoid showing form again for 3 days
        session(['lead_submitted' => true]);

        ## Set session expiration for 3 days (in seconds)
        session()->put('lead_expires_at', now()->addDays(3)->timestamp);

        return redirect()->back()->with('success', 'Thank you! Your information has been submitted.');
    }

    public function changeStatus($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->status = $lead->status === 'active' ? 'inactive' : 'active';
        $lead->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'status' => $lead->status
        ]);
    }
}
