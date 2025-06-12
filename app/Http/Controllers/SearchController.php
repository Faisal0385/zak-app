<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->input('query'));

        $results = Properties::whereRaw('LOWER(property_name) LIKE ?', ['%' . strtolower($query) . '%'])->get();

        $count = $results->count();

        return view('client.search-results', compact('results', 'query','count'));
    }

}
