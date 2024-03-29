<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Technology;
use Illuminate\Http\RedirectResponse;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = app()->getLocale();
        $page='technology';
        $list = Technology::all(["id", "{$locale}_name as name", "{$locale}_description as description","image"]);

        return view('back.technology',[
            'page'=>$page,
            'list' => $list,
            
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
            'en_name'=> 'required',
            'fr_name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
           
        ]);

        
        $technology = new Technology;
        $technology->en_name = $request->input('en_name');
        $technology->fr_name = $request->input('fr_name');
        $technology->en_description = $request->input('en_description');
        $technology->fr_description = $request->input('fr_description');
        
        
        if($request->file('image')){
            
            $filename = $request->file('image')->store('img','public');
            $technology->image = 'storage/'.$filename;
            
        }
       
        
        $technology->save();
        
        return redirect()->route('technology.index')->with('great');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $locale = app()->getLocale();
        $page = __('technology');
        $list = Technology::all(["id", "{$locale}_name as name"]); 
        $technologies = Technology::where('id',$id)->first(["id", "{$locale}_name as name", "{$locale}_description as description","image"]);
        
         if(!isset($id) && isset($id, $technologies)){
            abort(404);    
         }

        // creation des variables de donnée
        $name = $technologies->name;
        $image = $technologies->image;
        $description = $technologies->description;

        return view('pages.technology', [
            'id' =>$id,
            'list'=> $list,
            'name' => $name,
            'image' => $image,
            'description' => $description,
                
        ]);
    }

    public function view(string $id)
    {
        $locale = app()->getLocale();
        $page = 'technology';
        $list = Technology::all(["id", "{$locale}_name as name"]); 
        $technologies = Technology::where('id',$id)->first(["id", "{$locale}_name as name", "{$locale}_description as description","image"]);
        
         if(!isset($id) && isset($id, $technologies)){
            abort(404);    
         }

        // creation des variables de donnée
        $name = $technologies->name;
        $image = $technologies->image;
        $description = $technologies->description;

        return view('back.view', [
            'page'=>$page,
            'id' =>$id,
            'list'=> $list,
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
        $locale = app()->getLocale();
        $page= 'technology';
        $technology = Technology::where('id',$id)->first();
        
        return view('back.edit',[
            'locale'=>$locale,
            'id'=>$id,
            'en_name' => $technology->en_name,
            'fr_name' => $technology->fr_name,
            'page'=> $page,
            'image' => $technology->image,
            'en_description' => $technology->en_description,
            'fr_description' => $technology->fr_description,
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $technology = Technology::where('id',$id)->first();

        $request->validate([
            'en_name'=> 'required',
            'fr_name'=> 'required',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
            'en_description'=> 'required',
            'fr_description'=> 'required',
          
        ]);

        $technology->fr_name = $request->input('fr_name');
        $technology->en_name = $request->input('en_name');
        $technology->en_description = $request->input('en_description');
        $technology->fr_description = $request->input('fr_description');
        
        
        $technology->save();

        return redirect()->route('technology.index')->with('great');
    }


    public function delete(string $id){
        $page ='technology';
        $locale = app()->getLocale();
        $technology = Technology::where('id',$id)->first("{$locale}_name as name");
        // print_r($technology);
        // dd($id);
        $name = $technology->name;
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
        $technology = Technology::where('id',$id)->first();
        $path = explode('/',$technology->image);
        array_splice($path,0,1);
        print_r($path);
        $image = implode('/',$path);
        
        if(Storage::disk('public')->exists($image)){
            Storage::disk('public')->delete($image);
        }
        
        
        $technology->delete();
       return redirect()->route('technology.index');
    }
}
