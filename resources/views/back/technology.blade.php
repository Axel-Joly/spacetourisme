@extends('layouts.back')
@section('content')
@section('title', __('technology'))
<body class=' bg-darkB/60 text-white bg-cover items-stretch bg-center bg-no-repeat flex flex-col min-h-screen m-0 p-0'>
@include('components.backnav')

<main class='px-10 flex flex-col gap-10 mt-20'>
    
        <h1 class="font-barlowC text-4xl uppercase">Liste des technologies</h1>
        @include('components.add-button')
        <ul class='bg-darkB/40' name='technologies' >
            @include('components.list')
        </ul>
        
           
        
   
    
</main>

@stop
