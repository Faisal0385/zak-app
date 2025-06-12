<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Properties;
use Illuminate\Http\Request;

class SinglePropertyListController extends Controller
{
    public function index($slug)
    {
        $project = Project::where('slug', '=', $slug)->firstOrFail('id');
        $project_id = $project->id;
        $properties = Properties::where('project_id', '=', $project_id)->get();
        $count = $properties->count();

        return view('client.single-project', compact('properties', 'count'));
    }
}
