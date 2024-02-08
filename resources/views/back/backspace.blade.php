@extends('layouts.back')
@section('title', __('home'))
@section('description', 'space tourism')
@section('content')
<body class='bg-darkB/60 text-lightB bg-cover bg-center bg-no-repeat flex flex-col min-h-screen bg-color-dark-blue'>
@include('components.backnav')

<main class='grid md:grid-cols-3 pt-32 pb-24 '>
    <h1 class="text-4xl font-bellefair uppercase w-max">@lang("welcome administrator")</h1>
</main>
@stop