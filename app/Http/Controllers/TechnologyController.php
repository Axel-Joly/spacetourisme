<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = DB::table('technologies')->get();
        
        return view('back.technology',[
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
    public function show(string $id)
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
              $technologies = DB::table('technologies')->where('name',__($name))->first();
         }else if(app()->getLocale() == 'fr'){
             $technologies = DB::table('technologies_fr')->where('name',__($name))->first();
         }
         if(!isset($location[4]) && isset($name, $technologies)){
            abort(404);    
         }

        // creation des variables de donnée
        $name = $technologies->name;
        $image = $technologies->image;
        $description = $technologies->description;

        return view('pages.technology', [
            'name' => $name,
            'image' => $image,
            'description' => $description,
                
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
