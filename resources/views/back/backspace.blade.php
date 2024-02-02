@extends('layouts.back')

@section('content')
<body class='bg-index2 md:bg-index1 text-[#c3b2a1] bg-cover bg-center bg-no-repeat flex flex-col min-h-screen bg-color-dark-blue'>
@include('components.backnav')

<main class='pt-32 font-barlowC flex flex-col justify-evenly items-start '>
    <div class="flex flex-col place-item-center ">
        <h2 class="uppercase m-5 underline bg-black ">@lang('destination'):</h2>
        <div class="flex flex-col items-start" id="divDest">
            <!-- faire une boucle pour afficher la liste complete -->
            <h4 class="m-2">@lang('moon')</h4>
            <h4 class="m-2">@lang('mars')</h4>
            <h4 class="m-2">@lang('europa')</h4>
            <h4 class="m-2">@lang('titan')</h4>
        </div>
    </div>
    <div class="flex flex-col place-item-center">
        <h2 class="uppercase m-5 underline bg-black ">@lang('crew')</h2>
        <div class="flex flex-col items-start" id='divCrew'>
            <!-- faire une boucle pour afficher la liste complete -->
            <h4 class="m-2">Douglas Hurley</h4>
            <h4 class="m-2">geffgsr</h4>
            <h4 class="m-2">sdgsdegs</h4>
            <h4 class="m-2">sdgsdgs</h4>
        </div>
    </div>
    <div class="flex flex-col place-item-center">
        <h2 class="uppercase m-5 underline bg-black ">@lang('technology')</h2>
        <div class="flex flex-col items-start" id="divTech">
        <!-- faire une boucle pour afficher la liste complete -->
        <h4 class="m-2">geffgsr</h4>
        <h4 class="m-2">geffgsr</h4>
        <h4 class="m-2">geffgsr</h4>
        <h4 class="m-2">geffgsr</h4>
        </div>
    </div>
    
    
</main>
@stop