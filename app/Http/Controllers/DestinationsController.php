<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Destination;
use Illuminate\Http\RedirectResponse;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Storage;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = app()->getLocale();
        $list = Destination::all(["id", "{$locale}_name as name", "{$locale}_description as description","{$locale}_distance as distance", "{$locale}_duration as duration","image"]);
        $page= 'destination';

        foreach($list as $item){
            
        }

        return view('back.destination',[
            'id'=>$item->id,
            'list' => $list,
            'page'=>$page,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.add',[
            
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'en_name'=> 'required',
            'fr_name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
            'en_distance'=> 'required',
            'fr_distance'=> 'required',
            'en_duration'=> 'required',
            'fr_duration'=> 'required',
        ]);

        
        $destination = new Destination;
        $destination->en_name = $request->input('en_name');
        $destination->fr_name = $request->input('fr_name');
        $destination->en_description = $request->input('en_description');
        $destination->fr_description = $request->input('fr_description');
        $destination->en_distance = $request->input('en_distance');
        $destination->fr_distance = $request->input('fr_distance');
        $destination->en_duration = $request->input('en_duration');
        $destination->fr_duration = $request->input('fr_duration');
        
        if($request->file('image')){
            
            $filename = $request->file('image')->store('img','public');
            $destination->image = 'storage/'.$filename;
            
        }
       
        
        $destination->save();
        
        return redirect()->route('destination.index')->with('great');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = 'destination';
        $locale = app()->getLocale();

        $list = Destination::all(["id", "{$locale}_name as name", "{$locale}_description as description","{$locale}_distance as distance", "{$locale}_duration as duration","image"]);
        $destination = Destination::where('id',$id)->first([ "{$locale}_name as name", "{$locale}_description as description","{$locale}_distance as distance", "{$locale}_duration as duration","image"]);
        
        if(!isset($id) && isset($id, $destination)){
           abort(404);    
        }
        // creation des variables de donnée
        
        $image = $destination->image;
        $name = $destination->name;
        $description = $destination->description;
        $distance = $destination->distance;
        $duration = $destination->duration;
        
        
        return view('pages.destination', [
            'list'=>$list,
            'id'=>$id,
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'distance' => $distance,
            'duration' => $duration,    
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function view(string $id)
    {
        
        $locale = app()->getLocale();
        $page = 'destination';
       
        $destination = Destination::where('id',$id)->first([ "{$locale}_name as name", "{$locale}_description as description","{$locale}_distance as distance", "{$locale}_duration as duration","image"]);
             
        if(isset($id) && !isset($id, $destination)){
           abort(404);    
        }
        // creation des variables de donnée
        
        $name = $destination->name;
        $image = $destination->image;
        $description = $destination->description;
        $distance = $destination->distance;
        $duration = $destination->duration;
        return view('back.view', [
            'id'=>$id,
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
        $locale = app()->getLocale();
        $page= 'destination';
        $destination = Destination::where('id',$id)->first();
        
        return view('back.edit',[
            'locale'=>$locale,
            'id'=>$id,
            'en_name' => $destination->en_name,
            'fr_name' => $destination->fr_name,
            'page'=> $page,
            'image' => $destination->image,
            'en_description' => $destination->en_description,
            'fr_description' => $destination->fr_description,
            'en_distance' => $destination->en_distance,
            'fr_distance' => $destination->fr_distance,
            'en_duration' => $destination->en_duration,
            'fr_duration' => $destination->fr_duration,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destination = Destination::where('id',$id)->first();

        $request->validate([
            'en_name'=> 'required',
            'fr_name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
            'en_distance'=> 'required',
            'fr_distance'=> 'required',
            'en_duration'=> 'required',
            'fr_duration'=> 'required',
        ]);

        $destination->en_name = $request->input('en_name');
        $destination->en_description = $request->input('en_description');
        $destination->en_distance = $request->input('en_distance');
        $destination->en_duration = $request->input('en_duration');
        $destination->fr_name = $request->input('fr_name');
        $destination->fr_description = $request->input('fr_description');
        $destination->fr_distance = $request->input('fr_distance');
        $destination->fr_duration = $request->input('fr_duration');
        
        $destination->save();

        return redirect()->route('destination.index')->with('great');

    }

    public function delete(string $id){
        $page ='destination';
        $locale = app()->getLocale();
        $destination = Destination::where('id',$id)->first("{$locale}_name as name");
        // print_r($destination);
        // dd($id);
        $name = $destination->name;
        return view('back.delete',[
            'id'=>$id,
            'name' => $name,
            'page'=>$page,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $destination = Destination::where('id',$id)->first();
        $path = explode('/',$destination->image);
        array_splice($path,0,1);
        print_r($path);
        $image = implode('/',$path);
        if(Storage::disk('public')->exists($image)){
            Storage::disk('public')->delete($image);
        }
        
        
        $destination->delete();
       return redirect()->route('destination.index');
    }
}
