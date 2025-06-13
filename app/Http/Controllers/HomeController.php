<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', '=', 'active')->get();
        $sliders = Slider::where('status', '=', 'active')->get();

        return view('client.index', compact('projects', 'sliders'));
    }
}
