<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function create()
    {
        $siteSetting = SiteSetting::latest()->first();
        return view('admin.site-setting.site-setting-edit', compact('siteSetting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'nullable|email',
            'footer_logo' => 'nullable|image|mimes:jpg,jpeg,png,svg,webp|max:2048',
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,svg,webp|max:2048',
        ]);

        $setting = SiteSetting::first(); // assuming single row setup

        if (!$setting) {
            $setting = new SiteSetting();
        }

        $setting->page_title = $request->page_title;
        $setting->company_name = $request->company_name;
        $setting->company_subtitle = $request->company_subtitle;
        $setting->office_address = $request->office_address;
        $setting->email = $request->email;
        $setting->mobile = $request->mobile;
        $setting->hot_number = $request->hot_number;
        $setting->working_days = $request->working_days;
        $setting->working_hours = $request->working_hours;
        $setting->powered_by = $request->powered_by;
        $setting->google_map_iframe = $request->google_map_iframe;

        // Handle logo upload
        if ($request->hasFile('footer_logo')) {
            // Optionally delete old image:
            if ($setting->footer_logo && file_exists(public_path($setting->footer_logo))) {
                unlink(public_path($setting->footer_logo));
            }

            $path = $request->file('footer_logo')->store('setting', 'public');
            $setting->footer_logo = 'storage/' . $path;
        }


        if ($request->hasFile('banner_image')) {
            // Optionally delete old image:
            if ($setting->banner_image && file_exists(public_path($setting->banner_image))) {
                unlink(public_path($setting->banner_image));
            }

            $path = $request->file('banner_image')->store('setting', 'public');
            $setting->banner_image = 'storage/' . $path;
        }


        $setting->save();

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

}
