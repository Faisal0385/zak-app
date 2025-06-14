<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Properties;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::get()->count();
        $properties = Properties::get()->count();
        return view('admin.index', compact('projects', 'properties'));
    }
}
