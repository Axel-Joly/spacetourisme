
@extends('layouts.default')
@section('title', $name)
@section('description', $description)
@section('content')

<body class='bg-tech text-white bg-cover bg-no-repeat bg-center flex flex-col min-h-screen m-0 p-0'>
@include('components.nav')
<main class='flex flex-col sm:justify-start' >
    
    <div class="mt-14 lg:mt-32 sm:ml-8 lg:ml-20 flex flex-row justify-center sm:justify-start items-end " >
        <p class='font-barlow tracking-widest text-[14px] sm:text-2xl'><span class='text-gray-600 font-black whitespace-pre'>03 </span> LANCEMENT SPACIALE 101</p>
    </div>

    <div class="grid lg:grid-cols-2 flex flex-col justify-center sm:justify-start lg:pb-32 lg:pl-20 lg:p-0 lg:ml-10 mt-10 sm:mt-20 lg:mt-0">

        <div class='lg:order-2 lg:flex flex-col'>
            <div class="flex lg:justify-end items-end lg:items-center justify-center w-full lg:w-auto max-h-[170px] sm:max-h-[310px] lg:max-h-none overflow-hidden">
                <img class=" w-full lg:w-auto object-fill lg:object-none overscroll-none mb-[-15%] lg:mb-0 " src="{{ $image }}" alt="{{$name}}"/>
            </div>
        </div>
        

        <div class=' lg:order-1 pt-5 text-center lg:text-left flex flex-col lg:flex-row mt-10 lg:mr-10'>
            <nav class=' flex flex-col lg:flex-row  lg:mr-10 '>
                <ul class='flex lg:flex-col flex-row justify-evenly'>
                    <li><a class="{{ $techno != __('launcher') ? '' : 'border-white bg-white text-darkB ' }}  text-center flex justify-center items-center border border-solid border-white/40 hover:border-white rounded-full size-20" href="/technology/launcher">1</a></li>
                    <li><a class="{{ $techno != __('spaceport') ? '' : 'border-white bg-white text-darkB ' }} border border-solid border-white/40 hover:border-white rounded-full size-20 text-center flex justify-center items-center" href="/technology/spaceport">2</a></li>  
                    <li><a class="{{ $techno != __('capsule') ? '' : 'border-white bg-white text-darkB ' }} border border-solid border-white/40 hover:border-white  rounded-full size-20 text-center flex justify-center items-center" href="/technology/capsule">3</a></li>
                </ul>
            </nav>
            <div>
                <div>
                    <h2 class='font-barlowC uppercase text-xl text-gray-500 mt-10'>@lang('the terminology')...</h2>
                    <h1 class='text-3xl sm:text-5xl lg:text-[56px]  whitespace-nowrap font-bellefair uppercase'>{{$name}}</h1>
                </div>
                <div class='pb-10 text-[20px] font-barlowC font-thin tracking-widest mx-10 md:mx-20 lg:mx-0 text-center lg:text-left text-lightB '>
                    <p>{{$description}}</p>
                </div>
            </div>   
        </div>

    </div>

    
</main>

@stop