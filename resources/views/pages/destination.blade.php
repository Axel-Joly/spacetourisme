@extends('layouts.default')
@section('title', $name)
@section('description', $description)
@section('image' , $image)
@section('content')

<body class='bg-desti text-white bg-cover bg-center bg-no-repeat flex flex-col min-h-screen m-0 p-0 w-full'>
@include('components.nav')


<main class='sm:grid lg:grid-cols-2 lg:grid-row-2 my-10 sm:my-20 mx-[10%] '>

    <div class=" flex justify-center sm:justify-start lg:pb-32 sm:ml-[-8%] lg:ml-0">
        <div class="" >
            <p class='font-barlow tracking-widest text-[14px] sm:text-2xl uppercase'><span class='text-gray-600 font-black whitespace-pre '>01 </span> @lang("choose your destination")</p>
        </div>
    </div>

    <div></div>

    <div class="flex items-center justify-around lg:ml-[10%] m-[15%]">
         <img  src="{{$image}}" alt='{{$name}}'/>
    </div>

    
    <div class='flex flex-col lg:ml-20 text-center lg:text-left '>

        <div class='pt-10'>
            <ul class='flex flex-row justify-evenly lg:justify-start lg:gap-10 uppercase font-barlow tracking-widest underline-offset-[10px] '>
            
            @foreach($list as $item)   
                <li class="{{$id != $item->id ?'': 'underline decoration-4 decoration-white '}}hover:underline decoration-4 decoration-gray-600"><a href="/destination/{{$item->id}}">{{$item->name}}</a></li>
            @endforeach
            </ul>
        </div>

        <div class='pt-5'>
            <h1 class='text-6xl sm:text-8xl md:text-9xl font-bellefair uppercase'>{{$name}} </h1>
        </div>

        <div class='pb-10 text-[18px] font-barlow font-thin tracking-widest h-[50%]'>
           
            <p>{{$description}}</p>
            
            
        </div>

        <div class='border-t border-solid items-center sm:items-start border-white flex flex-col sm:flex-row py-5'>
            <div class='flex flex-col sm:justify-start my-5 sm:my-0 w-[50%]'>
                <p class='font-barlow tracking-widest uppercase'>@lang('distance')</p>
                <p class='font-bellefair text-[36px]'>{{$distance}}</p>
                
            </div>
            <div class='flex flex-col justify-start w-[50%] '>
                <p class='font-barlow tracking-widest uppercase'>@lang('duration')</p>
                <p class='font-bellefair text-4xl'>{{$duration}}</p>
            </div>
        </div>

    </div>
</main>

@stop