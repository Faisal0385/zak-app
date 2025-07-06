<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Properties;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::get()->count();
        $properties = Properties::get()->count();
        return view('admin.index', compact('projects', 'properties'));
    }


    public function adminProfilePage()
    {
        $id = Auth::user()->id;
        $editData = User::findorfail($id);
        return view('admin.admin_profile', compact('editData'));
    } ## End adminProfilePage Mehtod

    public function AdminChangePasswordPage()
    {
        $id = Auth::user()->id;
        $editData = User::findorfail($id);
        return view('admin.admin_change_password', compact('editData'));
    } ## End adminProfilePage Mehtod


    ## Admin Profile Update
    public function adminProfileUpdate(Request $request)
    {

        ## validate the input items
        $validated = $request->validate(
            [
                'name' => 'required|max:150',
                'photo' => 'image|mimes:jpg,png,jpeg,webp',
            ],

            // modified msg
            [
                'name.required' => 'Name field can not be empty',
                'name.max' => 'Name should not be more than 150 characters',
                'photo.image' => 'Image should be .png, .jpg, .jpeg, .svg, .webp',
            ],
        );

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = [
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    } ## End adminProfileUpdate Mehtod

    public function adminPasswordUpdate(Request $request)
    {
        ## Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        ## Match The Old Password
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $notification = [
                'message' => "Old Password Doesn't Match!!",
                'alert-type' => 'warning'
            ];
            return redirect()->back()->with($notification);
        }

        ## Update The new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notification = [
            'message' => "Password Changed Successfully",
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    } ## End AdminUpdatePassword Mehtod

}
