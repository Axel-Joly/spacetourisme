@extends('layouts.default')

@section('content')
<?php
    $url = $_SERVER['REQUEST_URI'];
    $name = explode("/",$url) ;
    $page = $name[1];
    if(isset($name[2])){
        $destination = $name[2] ;
    }else{
        $destination = 'Lune';
    }
    
?>
<body class='bg-desti text-white bg-cover bg-center bg-no-repeat flex flex-col min-h-screen'>
@include('components.nav')
<?= $url ?><br>
<?php print_r($name)?>
<main class='grid lg:grid-cols-2 lg:grid-row-2 my-10 sm:my-20 mx-[10%] '>

    <div class=" flex justify-center sm:justify-start lg:pb-32 sm:ml-[-8%] lg:ml-0">
        <div class="" >
            <p class='font-barlow tracking-widest text-[14px] sm:text-2xl'><span class='text-gray-600 font-black whitespace-pre'>01 </span>    CHOISISSEZ VOTRE DESTINATION</p>
        </div>
    </div>

    <div></div>

    <div class="flex items-center justify-around lg:ml-[10%] m-[15%]">
         <img  src='{{asset("/img/".$destination.".png")}}'/>
    </div>
    
    <div class='flex flex-col lg:ml-20 text-center lg:text-left '>

        <div class='pt-10'>
            <ul class='flex flex-row justify-evenly lg:justify-start lg:gap-10 uppercase font-barlow tracking-widest underline-offset-[10px] '>
                @if($destination != 'Lune')
                <li class='hover:underline decoration-4 decoration-gray-600'><a href="/destination/Lune">Lune</a></li>
                @else
                <li class='underline decoration-4 '><a href="/destination/Lune">Lune</a></li>
                @endif
                @if($destination != 'Mars')
                <li class='hover:underline decoration-4 decoration-gray-600'><a href="/destination/Mars">Mars</a></li>
                @else
                <li class='underline decoration-4 '><a href="/destination/Mars">Mars</a></li>
                @endif
                @if($destination != 'Europe')
                <li class='hover:underline decoration-4 decoration-gray-600'><a href="/destination/Europe">Europe</a></li>
                @else
                <li class='underline decoration-4'><a href="/destination/Europe">Europe</a></li>
                @endif
                @if($destination != 'Titan')
                <li class='hover:underline decoration-4 decoration-gray-600'><a href="/destination/Titan">Titan</a></li>
                @else
                <li class='underline decoration-4'><a href="/destination/Titan">Titan</a></li>
                @endif
            </ul>
        </div>

        <div class='pt-5'>
            <h1 class='text-6xl sm:text-8xl md:text-9xl font-bellefair uppercase'><?= $destination ?></h1>
        </div>

        <div class='pb-10 text-[18px] font-barlow font-thin tracking-widest h-[50%]'>
            @if($destination != 'Lune')
            @else
            <p>Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.</p>
            @endif
            
        </div>

        <div class='border-t border-solid items-center sm:items-start border-white flex flex-col sm:flex-row py-5'>
            <div class='flex flex-col sm:justify-start my-5 sm:my-0 w-[50%]'>
                <p class='font-barlow tracking-widest uppercase'>Distance</p>
                <p class='font-bellefair text-[36px]'>384 000 KM</p>
            </div>
            <div class='flex flex-col justify-start w-[50%] '>
                <p class='font-barlow tracking-widest uppercase'>Durée</p>
                <p class='font-bellefair text-4xl'>3 JOURS</p>
            </div>
        </div>

    </div>
</main>

@stop