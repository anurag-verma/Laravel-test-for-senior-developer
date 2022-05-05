<?php

namespace App\Http\Controllers;
use App\Properties;
use App\PropertiesFeatures;
use App\Locations;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){

        $properties = Properties::limit(10)->inRandomOrder()->with('properties_features')->with('locations')->get();

        return view("vendor.rw-real-estate.properties-home",compact('properties'));
    }

    public function filter_properties(Request $request){

        $request->price_from;
        $locations = Locations::orderBy('name','desc')->get();

        $properties = Properties::join('properties_features','properties_features.property_id','=','properties.id')->orderBy('price','desc')->with('locations')->paginate(20);
        return view("vendor.rw-real-estate.filter-properties",compact('properties','locations'));
    }

    public function property_details($property_id){

        $property = Properties::with('properties_features')->with('locations')->where('properties.id',$property_id)->first();
        return view("vendor.rw-real-estate.property-details",compact('property'));
    }
}
