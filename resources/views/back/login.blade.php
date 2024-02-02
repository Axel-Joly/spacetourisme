@extends('layouts.back')

@section('content')
<body class='bg-darkB/80  place-items-center bg-cover bg-center bg-no-repeat flex flex-col min-h-screen  '>

<h1 class='mt-[35vh] font-bellefair uppercase text-lightB font-thin text-2xl '>connexion</h1>
<main class='flex  text-darkB bg-lightB/100 border border-black rounded-xl font-barlow'>
   
   <div class='p-8 flex flex-col gap-5'>
        
        <form action="post" class='flex flex-col gap-5 '>
            @csrf
            <input type="text" class="border border-darkB/50 rounded-xl text-center" placeholder='id'>
            <input type="password" class="border border-darkB/50 rounded-xl text-center" placeholder='password'>
            <button type='submit' class="border-b-2 border-darkB/50 rounded-xl text-lightB bg-darkB/60">Connexion</button>
        </form>
   </div>
    
</main>
@stop