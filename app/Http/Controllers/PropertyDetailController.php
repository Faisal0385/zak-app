<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
   public function index($id)
    {
        $properties = Properties::where('status', '=', 'active')->get();
        $count = $properties->count();

        return view('client.property-detail', compact('properties', 'count'));
    }
}
