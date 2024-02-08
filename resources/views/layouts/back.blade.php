<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.backhead')
    <body class=' bg-darkB/60 text-white bg-cover items-stretch bg-center bg-no-repeat flex flex-col min-h-screen m-0 p-0'>
        @yield('content')   
    </body>
</html>