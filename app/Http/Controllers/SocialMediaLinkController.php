<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaLink;
use Illuminate\Http\Request;
use DB;

class SocialMediaLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = SocialMediaLink::all();
        return view('admin.social-links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social-links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'icon_class' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'url' => 'required|url|max:500',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::table('social_media_links')->insert([
            'icon_class' => $request->input('icon_class'),
            'platform' => $request->input('platform'),
            'url' => $request->input('url'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Social media link added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $link = SocialMediaLink::findOrFail($id);
        return view('admin.social-links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'icon_class' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'url' => 'required|url|max:500',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::table('social_media_links')
            ->where('id', $id) // Make sure $id is passed correctly to the method
            ->update([
                'icon_class' => $request->input('icon_class'),
                'platform' => $request->input('platform'),
                'url' => $request->input('url'),
                'updated_at' => now(), // only updated_at changes
            ]);

        return redirect()->back()->with('success', 'Social media link updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SocialMediaLink::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Social media link deleted successfully.');
    }

}
