<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.contact');
    }

    public function view()
    {
        $contactSubmissions = ContactSubmission::get();
        return view('admin.contact.index', compact('contactSubmissions'));
    }


    public function store(Request $request)
    {
        ## Validate form data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string',
            'captcha_input' => 'required|in:4316',
        ]);

        ## Save data to database
        ContactSubmission::create([
            'full_name' => $validated['full_name'],
            'mobile_number' => $validated['mobile_number'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        ## Redirect or return response
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }

}
