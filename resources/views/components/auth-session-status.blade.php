@props(['status'])

@if ($status)
<<<<<<< HEAD
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
=======
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 dark:text-green-400']) }}>
>>>>>>> 48f8a0dbbafd58ee5d797c373d5eb5e72257f47e
        {{ $status }}
    </div>
@endif
