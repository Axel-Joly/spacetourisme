@extends('layouts.back')
@section('title', __('add'))
@section('description', 'space tourism')
@section('content')
<body class='bg-darkB/60 text-lightB bg-cover bg-center bg-no-repeat flex flex-col min-h-screen bg-color-dark-blue'>
@include('components.backnav')
<?php

// recuperation de {{$page}} depuis l'url
$url = url()->current();
$part = explode("/",$url) ;
// print_r($part) ;
isset($part[4]) ? $page = $part[4] : abort(404);

?>

<main class='flex flex-col pt-32 pb-24 '>
    <h1 class="text-4xl font-bellefair uppercase w-max"><?= __('add')." ".__($page)?></h1>

    <form action="{{ route($page.'.store') }}" method="post" class='flex flex-col w-[20%] ml-10 text-darkB gap-2'enctype="multipart/form-data">
        @csrf
        
        @if($page == 'crew')
        <label for="name">nom</label><input name='name' type="text" >
        @error('name')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        <label for="en_grade">grade(anglais)</label><input name='en_grade' type="text" value="{{old('en_grade','')}}">
        @error('en_grade')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_grade">grade(français)</label><input name='fr_grade' type="text" value="{{old('fr_grade','')}}" >
        @error('fr_grade')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @endif
        @if($page != 'crew')
        <label for="en_name">nom(anglais)</label><input name='en_name' type="text" value="{{ old('en_name','') }}" >
        @error('en_name')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_name">nom(français)</label><input name='fr_name' type="text" value="{{ old('fr_name','') }}" >
        @error('fr_name')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @endif
        <label for="en_description">description(anglais)</label><input name='en_description' type="text" value="{{ old('en_description','') }}" >
        @error('en_description')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_description">description(français)</label><input name='fr_description' type="text" value="{{ old('fr_description','') }}" >
        @error('fr_description')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        <label for="image">image</label><input name='image' type="file" accept="image/png, image/jpeg" >
        @error('image')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @if($page == 'destination')
        <label for="en_distance">distance(anglais)</label><input name='en_distance' type="text" value="{{ old('en_distance','') }}" >
        @error('en_distance')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_distance">distance(français)</label><input name='fr_distance' type="text" value="{{old('fr_distance','')}}" >
        @error('fr_distance')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        <label for="en_duration">durée(anglais)</label><input name='en_duration' type="text" value="{{old('en_duration','')}}" >
        @error('en_duration')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_duration">durée(français)</label><input name='fr_duration' type="text" value="{{old('fr_duration','')}}" >
        @error('fr_duration')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @endif
        
        <input type="submit" value="ajouter">
    </form>
</main>
@stop