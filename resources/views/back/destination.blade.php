@extends('layouts.back')
@section('content')


@include('components.backnav')
@section('title',__('destination'))

<main class='px-10 flex flex-col gap-10 mt-20'>
    
        <h1 class="font-barlowC text-4xl uppercase">Liste des destinations</h1>
        @include('components.add-button')
        <ul class='bg-darkB/40' name='destinations' >
        @include('components.list')
        </ul>
        
           
        
   
    
</main>

@stop
