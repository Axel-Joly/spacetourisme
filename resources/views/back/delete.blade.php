@extends('layouts.back')
@section('title', __('home'))
@section('description', 'space tourism')
@section('content')
<body class='bg-darkB/60 text-lightB bg-cover bg-center bg-no-repeat flex flex-col min-h-screen bg-color-dark-blue'>
@include('components.backnav')

<main class='grid md:grid-cols-3 pt-32 pb-24 '>
    <h1 class=" ml-20 text-2xl font-bellefair uppercase w-max"> voulez vous supprimer : @lang("$name")</h1>
    <form action={{url('backspace/'.$page.'/'.$id.'/destroy')}} method='POST'>
        @csrf
       @method('delete')
    <input type="submit" value="oui">
    </form>
</main>
@stop