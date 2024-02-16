<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Crew;
use Illuminate\Http\RedirectResponse;
use App\Http\Middleware\Localization;

class CrewController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = app()->getLocale();
        $list = Crew::all(["id", "name", "{$locale}_description as description","{$locale}_grade as grade","image"]);
        $page= 'crew';
        foreach($list as $item){
            
        }
        return view('back.crew',[
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
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
            'en_grade'=> 'required',
            'fr_grade'=> 'required',
        ]);

        
        $crew = new Crew;
        $crew->en_name = $request->input('en_name');
        $crew->fr_name = $request->input('fr_name');
        $crew->en_description = $request->input('en_description');
        $crew->fr_description = $request->input('fr_description');
        $crew->en_distance = $request->input('en_distance');
        $crew->fr_distance = $request->input('fr_distance');
        $crew->en_duration = $request->input('en_duration');
        $crew->fr_duration = $request->input('fr_duration');
        
        if($request->file('image')){
            
            $filename = $request->file('image')->store('img','public');
            $crew->image = 'storage/'.$filename;
            
        }
       
        
        $crew->save();
        return redirect()->route('crew.index')->with('great');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
      
       // verifications
        $locale = app()->getLocale();
        $list = Crew::all(["id", "name", "{$locale}_description as description", "{$locale}_grade as grade","image"]);
        $crews = Crew::where('id',$id)->first(["name", "image", "{$locale}_description as description", "{$locale}_grade as grade"]);
       
        if(!isset($id) && isset($id, $crews)){
             abort(404);    
        }
        
        // creation des variables de donnée
        $name = $crews->name;
        $image = $crews->image;
        $description = $crews->description;
        $grade = $crews->grade;
    
        return view('pages.crew', [
            'list'=>$list,
            'id'=>$id,
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'grade' => $grade,    
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function view(string $id)
    {
       
        $locale = app()->getLocale();
        $page = 'crew';
       
        $crew = Crew::where('id',$id)->first([ "name", "{$locale}_description as description","{$locale}_grade as grade","image"]);
       // verifications
      
        if(isset($id) && !isset($id, $crew)){
            abort(404);    
        }

        // creation des variables de donnée
        $name = $crew->name;
        $image = $crew->image;
        $description = $crew->description;
        $grade = $crew->grade;
    
        return view('back.view', [
            'id'=>$id,
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'grade' => $grade,    
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
