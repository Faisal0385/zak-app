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
        $aboutDetails = AboutPage::firstOrFail();
        return view('client.about-us', compact('aboutDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aboutpage = AboutPage::latest()->first();
        return view('admin.about.edit', compact('aboutpage'));
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
            // Optionally delete old image
            if ($about->banner_image && file_exists(public_path($about->banner_image))) {
                unlink(public_path($about->banner_image));
            }

            $image = $request->file('banner_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/about');

            // Create directory if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move the uploaded image to public/uploads/about
            $image->move($destinationPath, $imageName);

            // Save the relative path to DB
            $about->banner_image = 'uploads/about/' . $imageName;
        }

        $about->save();
        return redirect()->back()->with('success', 'About Page updated successfully!');
    }
}
