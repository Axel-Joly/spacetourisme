<?php
use App\Http\Controllers\PageController;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-space tourisme</title>
    <script src="{{asset('/js/script.js')}}"defer></script>
    <!-- SEO -->
    <meta name="title" content="E-space tourisme">
    <meta name="description" content="space website">
    <meta name ='keyword' content="space,moon,mars,astro ">
    <meta name="robot" content="noindex,nofollow">
    <meta name="googlebot" content="index,follow">
    <meta name="google" content="nositelinkssearchbox">
    <meta http-equiv="content-Type" content="text/html;charset-utf-8">
    <meta name="language" content="French,English">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://spacetourisme.test/" />
    <meta property="og:title" content="E-space tourisme"/>
    <meta property="og:description" content="space website" />
    <meta property="og:image" content="{{asset('/img/moon.png')}}" />
    <meta property='og:image:alt' content="lune"/>
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://spacetourisme.test/" />
    <meta property="twitter:title" content="E-space tourisme" />
    <meta property="twitter:description" content="space website" />
    <meta property="twitter:image" content="{{asset('/img/moon.png')}}"/>
    <meta property='twitter:image:alt' content="lune"/>
    <!-- styles -->
    @vite('resources/css/app.css')
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;900&family=Barlow:wght@100;400;900&family=Bellefair&display=swap" rel="stylesheet">
</head>

