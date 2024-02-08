<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = DB::table('destinations')->where('id',1)->first();
        $name = $destinations->name;
        $image = $destinations->image;
        $description = $destinations->description;
        $distance = $destinations->distance;
        $duration = $destinations->duration;
        return view('back.destinations',[
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'distance' => $distance,
            'duration' => $duration,
    
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        // recuperation d'url
        $url = url()->current();
        $location = explode("/",$url) ;
        // print_r($location);
        $page = $location[3];
        $path=$location[4];
        // formatage du nom
        $newPath = explode("_",$path);
        $name= implode(" ",$newPath);
       // verifications
        if( app()->getLocale() == 'en'){
             $destinations = DB::table('destinations')->where('name',$name)->first();
        }else if(app()->getLocale() == 'fr'){
            $destinations = DB::table('destinations_fr')->where('name',$name)->first();
        }
        if(!isset($location[4]) && isset($name, $destinations)){
           abort(404);    
        }
        // creation des variables de donnée
        
        $name = $destinations->name;
        $image = $destinations->image;
        $description = $destinations->description;
        $distance = $destinations->distance;
        $duration = $destinations->duration;
        return view('pages.destination', [
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'distance' => $distance,
            'duration' => $duration,    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
