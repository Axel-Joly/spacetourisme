@extends('layouts.back')
@section('title', __('home'))
@section('description', 'space tourism')
@section('content')
<body class='bg-darkB/60 text-lightB bg-cover bg-center bg-no-repeat flex flex-col min-h-screen bg-color-dark-blue'>
@include('components.backnav')

<main class='flex flex-col pt-32 pb-24 '>
    <h1 class=" ml-32 text-2xl font-bellefair uppercase w-max"> {{isset($locale)? $fr_name :$name}}</h1>
    <div class='w-[20%] ml-20 mt-10'>
       
    <p><span class=' font-barlow text-xl uppercase'>@lang('description') : </span>{{$description}}</p>
                
    <div><span class=' font-barlow text-xl uppercase'>@lang('image') : </span><img  src={{asset($image)}} alt={{$name}} /></div>            
    
    @if(isset($distance))
    <p><span class=' font-barlow text-xl uppercase'>@lang('distance') : </span>{{$distance}}</p>
    @endif
    @if(isset($duration))
    <p><span class=' font-barlow text-xl uppercase'>@lang('duration') : </span>{{$duration}}</p>
    @endif
    @if(isset($grade))
    <p><span class=' font-barlow text-xl uppercase'>@lang('grade') : </span>{{$grade}}</p>
    @endif
    </div>
</main>
@stop