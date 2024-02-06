@extends('layouts.back')

@section('content')
    <div>
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('destinations.store') }}" method="post">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input  id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Image -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('Image')" />
                <x-textarea class="block mt-1 w-full" id="image" name="image">{{ old('image') }}</x-textarea>
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <x-textarea class="block mt-1 w-full" id="description" name="description">{{ old('description') }}</x-textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <!-- Distance -->
            <div class="mt-4">
                <x-input-label for="distance" :value="__('Distance')" />
                <x-textarea class="block mt-1 w-full" id="distance" name="distance">{{ old('distance') }}</x-textarea>
                <x-input-error :messages="$errors->get('distance')" class="mt-2" />
            </div>
            <!-- Duration -->
            <div class="mt-4">
                <x-input-label for="duration" :value="__('Duration')" />
                <x-textarea class="block mt-1 w-full" id="duration" name="duration">{{ old('duration') }}</x-textarea>
                <x-input-error :messages="$errors->get('duration')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('Send') }}
                </x-primary-button>
            </div>
        </form>
    </div>
@stop