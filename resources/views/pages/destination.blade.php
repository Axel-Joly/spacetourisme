@extends('layouts.default')

@section('content')
<?php
    $destination ="Lune";
?>

@include('components.nav')
<main class='grid lg:grid-cols-2 lg:grid-row-2 my-20 mx-[10%] '>

    <div class=" flex lg:pb-32 ml-[-8%] lg:ml-0">
        <div class="" >
            <p class='font-barlow tracking-widest text-2xl'><span class='text-gray-600 font-black whitespace-pre'>01 </span>    CHOISISSEZ VOTRE DESTINATION</p>
        </div>
    </div>

    <div></div>

    <div class="flex items-center justify-around lg:ml-[10%] ">
         <img  src='{{asset("/img/".$destination.".png")}}'/>
    </div>
    
    <div class='flex flex-col lg:ml-20 text-center lg:text-left '>

        <div class='pt-10'>
            <ul class='flex flex-row justify-evenly lg:justify-start lg:gap-10 uppercase font-barlow tracking-widest underline-offset-8 '>
                <li class='hover:underline decoration-4'>Lune</li>
                <li class='hover:underline decoration-4'>Mars</li>
                <li class='hover:underline decoration-4'>Europe</li>
                <li class='hover:underline decoration-4'>Titan</li>
            </ul>
        </div>

        <div class='pt-5'>
            <h1 class='text-8xl font-bellefair uppercase'><?= $destination ?></h1>
        </div>

        <div class='pb-10 text-[18px] font-barlow font-thin tracking-widest h-[50%]'>
            <p>Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.</p>
        </div>
        <div class='border-t border-solid  border-white flex flex-row py-5'>
            <div class='flex flex-col justify-start w-[50%]'>
                <p class='font-barlow tracking-widest uppercase'>Distance</p>
                <p class='font-bellefair text-3xl'>384 000 KM</p>
            </div>
            <div class='flex flex-col justify-start w-[50%] '>
                <p class='font-barlow tracking-widest uppercase'>Durée</p>
                <p class='font-bellefair text-3xl'>3 jours</p>
            </div>
        </div>

    </div>
</main>

@stop