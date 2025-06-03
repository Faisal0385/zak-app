<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.about-us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aboutpage = AboutPage::latest()->first();
        return view('admin.about.create', compact('aboutpage'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'our_story' => 'nullable|string',
            'mission' => 'nullable|string',
            'vision' => 'nullable|string',
            'video_link' => 'nullable|string',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $about = AboutPage::findOrFail($id); // assumes only one record

        $about->page_title = $request->title;
        $about->our_story = $request->our_story;
        $about->mission = $request->mission;
        $about->vision = $request->vision;
        $about->video_link = $request->video_link;

        if ($request->hasFile('banner_image')) {
            // Optionally delete old image:
            if ($about->banner_image && file_exists(public_path($about->banner_image))) {
                unlink(public_path($about->banner_image));
            }

            $path = $request->file('banner_image')->store('about', 'public');
            $about->banner_image = 'storage/' . $path;
        }


        $about->save();

        return redirect()->back()->with('success', 'About Page updated successfully!');
    }
}
