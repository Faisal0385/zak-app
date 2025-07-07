<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyAmenitiesList;
use App\Models\PropertyFloorLayout;
use App\Models\PropertyGalleryImage;
use App\Models\PropertyTypeList;
use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    public function index($id)
    {
        $properties = Properties::where('id', '=', $id)->where('status', '=', 'active')->firstOrFail();
        $propertyAmenitiesLists = PropertyAmenitiesList::where('property_id', '=', $id)->get();
        $propertyTypeLists = PropertyTypeList::with('propertyType')->where('property_id', '=', $id)->get();
        $propertyFloorLayouts = PropertyFloorLayout::where('property_id', '=', $id)->get();
        $propertyGalleryImages = PropertyGalleryImage::where('property_id', '=', $id)->get();

        return view('client.property-detail', compact('properties', 'propertyAmenitiesLists', 'propertyTypeLists', 'propertyFloorLayouts', 'propertyGalleryImages'));
    }
}
