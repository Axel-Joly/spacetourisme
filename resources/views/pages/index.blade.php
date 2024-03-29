@extends('layouts.default')
@section('title', __('home'))
@section('description', 'space tourism')
@section('content')
<body class='bg-index2 md:bg-index1 text-white bg-cover bg-center bg-no-repeat flex flex-col min-h-screen bg-color-dark-blue'>
@include('components.nav')

<main class='grid md:grid-cols-3 pt-32 pb-24 '>
    <div class=" md:col-span-2 flex flex-col items-center justify-center lg:pt-32 lg:pl-36">
        <div class="text-center lg:text-left" >
        <h2 class="font-barlow sm:text-2xl xl:text-3xl sm:tracking-widest mb-10 uppercase" >@lang("so you want travel in")</h2>
        <h1 class="font-bellefair text-7xl sm:text-[100px] xl:text-9xl mb-10 uppercase">@lang("the space")</h1>
        <p class="font-barlow md:text-[16px] lg:text-[18px] tracking-widest px-20 md:px-0 sm:mx-10  lg:mx-0 lg:mr-36">@lang("Let's be objective; if you want to go to space, you can truly go to real space and not just hover on its edge. Well, buckle up because we are about to provide you with a truly extraordinary experience!")
        </p>
        </div>
    </div>
    <div class="grid mt-20 lg:mt-40 xl:pr-20">
        <div></div>
        <div class=" flex items-start justify-center " >
            <div class="xl:mt-24 flex rounded-full bg-white text-black size-64 justify-center items-center z-20 hover:cursor-pointer hover:shadow-[0_0_0_60px_rgba(255,255,255,0.4)] ">
                <a class="font-bellefair z-0 text-2xl uppercase" href="">@lang("explore")</a>
        </div>   
    </div>
</main>
@stop