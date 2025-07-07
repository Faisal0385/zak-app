<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\PropertyType;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', '=', 'active')->get();
        $sliders = Slider::where('status', '=', 'active')->get();
        $propertyTypes = PropertyType::where('status', '=', 'active')->latest()->take(4)->get();

        return view('client.index', compact('projects', 'sliders', 'propertyTypes'));
    }
}
