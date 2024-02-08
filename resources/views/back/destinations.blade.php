@extends('layouts.back')
@section('content')

<body class=' bg-darkB/60 text-white bg-cover items-stretch bg-center bg-no-repeat flex flex-col min-h-screen m-0 p-0'>
@include('components.backnav')

<main class='flex flex row mt-20'>
    <section class='w-[100%]'></section>
    <section class='px-10'>
        <label class='underline ' for='name'>@lang('name') : </label><p name='name'class='font-bellefair uppercase text-2xl'><?= __($name)?></p>   
        <label class='underline ' for="img">@lang('picture') :</label><img name='img' class='h-[30%]'src=<?= asset($image)?> alt="<?= __($name)?>">  
        <label class='underline ' for='description'>@lang('description') : </label><p><?= $description?></p>
        <label class='underline ' for='distance'>@lang('distance') : </label><p><?= __($distance)?></p> 
        <label class='underline ' for='duration'>@lang('duration') : </label><p><?= __($duration)?></p> 
    </section>
</main>

@stop
