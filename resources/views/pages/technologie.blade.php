
@extends('layouts.default')

@section('content')

<body class='bg-tech text-white bg-cover bg-no-repeat'>
@include('components.nav')
<main class='grid md:grid-cols-3 pt-32 pb-24 '>
    <div class=" md:col-span-2 flex flex-col items-center justify-center lg:pt-32 lg:pl-36">
        <div class="text-center lg:text-left" >
        <h2 class="barlow sm:text-2xl xl:text-3xl sm:tracking-widest mb-10">DONC VOUS VOULEZ VOYAGER DANS</h2>
        <h1 class="bellefair text-7xl sm:text-[100px] xl:text-[150px] mb-10">TECH</h1>
        <p class="barlow md:text-[16px] lg:text-[18px] tracking-widest md:mx-10  lg:mx-0 lg:mr-36">Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire!
        </p>
        </div>
    </div>
    <div class="grid mt-20 lg:mt-40 xl:pr-20">
        <div></div>
        <div class=" flex items-start justify-center " >
            <div class="xl:mt-24 flex rounded-full bg-white text-black size-64 justify-center items-center ">
                <a class="titre4" href="">EXPLORER</a>
            </div>
            <div class="xl:mt-24 hover:scale-150 duration-300 size-64 rounded-full bg-white/10 absolute scale-100">
            </div>
        </div>   
    </div>
</main>

@stop