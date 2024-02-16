@extends('layouts.back')
@section('title', __('home'))
@section('description', 'space tourism')
@section('content')
<body class='bg-darkB/60 text-lightB bg-cover bg-center bg-no-repeat flex flex-col min-h-screen bg-color-dark-blue'>
@include('components.backnav')

<main class='flex flex-col pt-32 pb-24 '>
    <h1 class=" ml-20 text-2xl font-bellefair uppercase w-max"> voulez vous modifier : {{isset($locale)? $fr_name :$name}}</h1>

<form action="{{ url('/backspace/'.$page.'/'.$id.'/edit') }}" method="post" class='flex flex-col w-[20%] ml-10 text-darkB gap-2'>
    @csrf
    @method('patch')
    
        
        @if($page == 'crew')
        <label for="name">nom</label><input name='name' type="text" value="{{$name}}" >
        @error('name')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        <label for="en_grade">grade(anglais)</label><input name='en_grade' type="text" value="{{$en_grade}}">
        @error('en_grade')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_grade">grade(français)</label><input name='fr_grade' type="text" value="{{$fr_grade}}">
        @error('fr_grade')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @endif
        @if($page != 'crew')
        <label for="en_name">nom(anglais)</label><input name='en_name' type="text" value="{{$en_name}}" >
        @error('en_name')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_name">nom(français)</label><input name='fr_name' type="text" value="{{$fr_name}}" >
        @error('fr_name')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @endif
        <label for="en_description">description(anglais)</label><input name='en_description' type="text" value="{{$en_description}}">
        @error('en_description')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_description">description(français)</label><input name='fr_description' type="text" value="{{$fr_description}}">
        @error('fr_description')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        <label for="image">image</label><input name='image' type="file" accept="image/png, image/jpeg" value="{{$image}}">
        @error('image')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @if($page == 'destination')
        <label for="en_distance">distance(anglais)</label><input name='en_distance' type="text" value="{{$en_distance}}" >
        @error('en_distance')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_distance">distance(français)</label><input name='fr_distance' type="text" value="{{$fr_distance}}">
        @error('en_distance')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        <label for="en_duration">durée(anglais)</label><input name='en_duration' type="text" value="{{$en_duration}}">
        @error('en_duration')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <label for="fr_duration">durée(français)</label><input name='fr_duration' type="text" value="{{$fr_duration}}">
        @error('en_duration')<p class=" bg-[#ff0000]/30 rounded pl-2">{{$message}}</p> @enderror 
        <br>
        @endif
        <input type="submit" value="modifier">

</form>
</main>
@stop