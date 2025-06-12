<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class PropertiesListController extends Controller
{
    public function index()
    {
        $properties = Properties::where('status', '=', 'active')->get();
        $count = $properties->count();

        return view('client.properties-list', compact('properties', 'count'));
    }
}
