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
        $list = DB::table('destinations')->get();

        return view('back.destination',[
            'list' => $list,
            
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
        echo $name;
        $url = url()->current();
        $location = explode("/",$url) ;
        // print_r($location);
        $page = $location[3];
        
        // formatage du nom
        $newPath = explode("_",$name);
        $name= implode(" ",$newPath);
       // verifications
        if( app()->getLocale() == 'en'){
            
             $destination = DB::table('destinations')->where('name',__($name))->first();
             
        }else if(app()->getLocale() == 'fr'){
            
            $destination = DB::table('destinations_fr')->where('name',__($name))->first();
        }
        if(!isset($name) && isset($name, $destination)){
           abort(404);    
        }
        // creation des variables de donnée
        
        $name = $destination->name;
        $image = $destination->image;
        $description = $destination->description;
        $distance = $destination->distance;
        $duration = $destination->duration;
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
    public function edit(string $name)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $name)
    {
        //
    }
}
