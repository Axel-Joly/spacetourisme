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
        @if ($errors->any())
            <div>
                <ul class='flex flex-col gap-2'>
                    @foreach ($errors->all() as $error)
                        <li class=" bg-[#ff0000]/30 rounded pl-2">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if($page == 'crew')
        <label for="name">nom</label><input name='name' type="text" ><br>
        <label for="en_grade">grade(anglais)</label><input name='en_grade' type="text" >
        <label for="fr_grade">grade(français)</label><input name='fr_grade' type="text" ><br>
        @endif
        @if($page != 'crew')
        <label for="en_name">nom(anglais)</label><input name='en_name' type="text" >
        <label for="fr_name">nom(français)</label><input name='fr_name' type="text" ><br>
        @endif
        <label for="en_description">description(anglais)</label><input name='en_description' type="text" >
        <label for="fr_description">description(français)</label><input name='fr_description' type="text" ><br>
        <label for="image">image</label><input name='image' type="file" accept="image/png, image/jpeg" ><br>
        @if($page == 'destination')
        <label for="en_distance">distance(anglais)</label><input name='en_distance' type="text" >
        <label for="fr_distance">distance(français)</label><input name='fr_distance' type="text" ><br>
        <label for="en_duration">durée(anglais)</label><input name='en_duration' type="text" >
        <label for="fr_duration">durée(français)</label><input name='fr_duration' type="text" ><br>
        @endif
        
        <input type="submit" value="ajouter">
    </form>
</main>
@stop