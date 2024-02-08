@extends('layouts.default')
@section('title', $name)
@section('description', $description)
@section('content')

<body class=' bg-crew text-white bg-cover items-stretch bg-center bg-no-repeat flex flex-col min-h-screen m-0 p-0'>
@include('components.nav')

<main class='grid lg:grid-cols-2 mt-10 sm:mt-5 mb-0  sm:mx-[10%] xs:mx-10 '>
    <div class="order-1" >
        <p class='font-barlow text-center sm:text-left tracking-widest text-[14px] sm:text-2xl uppercase'><span class='text-gray-600 font-black whitespace-pre'>02 </span> @lang('meet the crew')</p>
    </div>
    <div class='order-2 '></div>
    <div class='flex flex-col mt-10 sm:mt-5 order-3 sm:order-4'>
        <div class="flex lg:justify-end justify-center align-end  border-solid sm:border-b-0 border-b border-lightB/50 ">
            <img class='max-h-[225px] sm:max-h-none' src="{{ $image }}" alt='{{ $name }}'/>
        </div>
    </div>
    <div class=" flex flex-col  lg:pb-32 sm:ml-[-8%] lg:ml-0 order-4   sm:order-3 ">
        <div class='pt-5 text-center lg:text-left flex flex-col content-start'>
            <h2 class='font-bellefair uppercase text:2xl md:text-3xl md:mt-32 text-gray-500'>{{$grade}}</h2>
            <h1 class='text-3xl md:text-5xl lg:text-[56px] whitespace-nowrap font-bellefair uppercase'>{{$name}}</h1>
        </div>

        <div class='pb-10 text-[14px] md:text-[20px] font-barlow font-thin tracking-widest h-[50%] text-center  lg:text-left text-lightB'>
            <p>{{$description}}</p>
        </div>

        <div class='mt-24'>
            <ul class='flex flex-row justify-center gap-10 lg:justify-start lg:gap-10 uppercase mb-20 font-barlow'>
                <li class="{{ $name != __('douglas hurley') ? '' : 'bg-white' }} hover:bg-gray-500  rounded-full h-3 list-inside  decoration-4 bg-gray-800"><a href="/crew/douglas_hurley" class='opacity-0 ' >o</a></li>
                <li class="{{ $name != __('mark shuttleworth') ? '' : 'bg-white' }} hover:bg-gray-500  rounded-full h-3 decoration-4 bg-gray-800"><a href="/crew/mark_shuttleworth" class='opacity-0 '>o</a></li>
                <li class="{{ $name != __('victor glover') ? '' : 'bg-white' }} hover:bg-gray-500  rounded-full h-3 decoration-4 bg-gray-800"><a href="/crew/victor_glover" class='opacity-0 '>o</a></li>
                <li class="{{ $name != __('anousheh ansari') ? '' : 'bg-white' }} hover:bg-gray-500 rounded-full h-3 decoration-4 bg-gray-800"><a href="/crew/anousheh_ansari" class='opacity-0 '>o</a></li>
            </ul>
        </div>
        
    </div>

    

</main>

@stop