@extends('layouts.back')
@section('content')


@include('components.backnav')
@section('title',__('destination'))

<main class='px-10 flex flex-col gap-10 mt-20'>
    
        <h1 class="font-barlowC text-4xl uppercase">Liste des destinations</h1>
        @include('components.add-button')
        <ul class='bg-darkB/40' name='destinations' >
        @foreach($list as $item)
                
                <li class='bg-lightB/40 p-5 flex flex-row gap-10 border-b justify-between '>
                <p class='font-bellefair text-2xl uppercase'>{{$item->name}}</p>
                <div class='flex gap-3 justify-end font-barlowC '>
                    <a href={{route($page.'.view', $item->id )}} class=' text-center pt-1 bg-darkB/40 rounded border w-20 uppercase'>@lang('view')</a>
                    <a href={{route($page.'.edit', $item->id )}} class=' text-center pt-1 bg-darkB/40 rounded border w-20 uppercase'>@lang('edit')</a>
                    <a href={{route($page.'.delete', $item->id )}} class=' text-center pt-1 bg-darkB/40 rounded border w-20 uppercase'>@lang('delete')</a>
                </div></li>     
        @endforeach
        </ul>
        
           
        
   
    
</main>

@stop
