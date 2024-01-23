@extends('layouts.default')

@section('content')

<body class=' bg-crew text-white bg-cover bg-center bg-no-repeat flex flex-col min-h-screen '>
@include('components.nav')
<main class='grid lg:grid-cols-2 lg:grid-row-3 mt-10 mb-0 sm:mt-20 mx-[10%] '>

    <div class=" flex flex-col justify-center sm:justify-start lg:pb-32 sm:ml-[-8%]lg:ml-0">

        <div class="" >
            <p class='font-barlow tracking-widest text-[14px] sm:text-2xl'><span class='text-gray-600 font-black whitespace-pre'>01 </span> RENCONTREZ L'EQUIPAGE</p>
        </div>

        <div class='pt-5 text-center lg:text-left'>
            <h2 class='font-bellefair uppercase text-3xl mt-32 text-gray-500'>{{$grade}}</h2>
            <h1 class=' text-5xl lg:text-[56px]  whitespace-nowrap font-bellefair uppercase'>{{$nom}}</h1>
        </div>

        <div class='pb-10 text-[20px] font-barlow font-thin tracking-widest h-[50%] text-center lg:text-left text-lightB'>
            <p>{{$description}}</p>
        </div>

        <div class='mt-24'>
            <ul class='flex flex-row justify-evenly lg:justify-start lg:gap-10 uppercase mb-20 font-barlow underline-offset-[10px] '>
                @if($nom != 'Douglas Hurley')
                <li class='hover:bg-gray-500  rounded-full h-3 list-inside  decoration-4 bg-gray-800'><a href="/equipage/douglas_hurley" class='opacity-0 ' >o</a></li>
                @else
                <li class=' rounded-full h-3 list-inside decoration-4 bg-white'><a href="/equipage/douglas_hurley" class='opacity-0 ' >o</a></li>
                @endif
                @if($nom != 'Mark Shuttleworth')
                <li class='hover:bg-gray-500  rounded-full h-3 decoration-4 bg-gray-800'><a href="/equipage/mark_shuttleworth" class='opacity-0 '>o</a></li>
                @else
                <li class=' rounded-full h-3 decoration-4 bg-white'><a href="/equipage/mark_shuttleworth" class='opacity-0 '>o</a></li>
                @endif
                @if($nom != 'Victor Glover')
                <li class='hover:bg-gray-500  rounded-full h-3 decoration-4 bg-gray-800'><a href="/equipage/victor_glover" class='opacity-0 '>o</a></li>
                @else
                <li class=' rounded-full h-3 decoration-4 bg-white'><a href="/equipage/victor_glover" class='opacity-0 '>o</a></li>
                @endif
                @if($nom != 'Anousheh Ansari')
                <li class='hover:bg-gray-500 rounded-full h-3 decoration-4 bg-gray-800'><a href="/equipage/anousheh_ansari" class='opacity-0 '>o</a></li>
                @else
                <li class=' rounded-full h-3 decoration-4 bg-white'><a href="/equipage/anousheh_ansari" class='opacity-0 '>o</a></li>
                @endif
            </ul>
        </div>
        
    </div>

    <div class='flex flex-col  mt-4  '>
        <div class="flex  lg:justify-end align-end   ">
            <img  src="{{ $image }}"/>
        </div>
    </div>

</main>

@stop