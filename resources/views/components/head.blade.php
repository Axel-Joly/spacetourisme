
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-space-T | @yield('title')</title>
    <script src="{{asset('/js/script.js')}}"defer></script>
    <!-- SEO -->
    <meta name="title" content="E-space | @yield('title')">
    <meta name="description" content="@yield('description')">
    <meta name ='keyword' content="space,moon,mars,astro ">
    <meta name="robot" content="noindex,nofollow">
    <meta name="googlebot" content="index,follow">
    <meta name="google" content="nositelinkssearchbox">
    <meta http-equiv="content-Type" content="text/html;charset-utf-8">
    <meta name="language" content="French,English">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://spacetourisme.test/" />
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="@yield('image')" />
    <meta property='og:image:alt' content="@yield('title')"/>
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://spacetourisme.test/" />
    <meta property="twitter:title" content="@yield('title')" />
    <meta property="twitter:description" content="@yield('description')" />
    <meta property="twitter:image" content="@yield('image')" />
    <meta property='twitter:image:alt' content="@yield('title')"/>
    <!-- styles -->
    @vite('resources/css/app.css')
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;900&family=Barlow:wght@100;400;900&family=Bellefair&display=swap" rel="stylesheet">
</head>

