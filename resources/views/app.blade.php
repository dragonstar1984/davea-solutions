<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#07111f">
        <meta name="robots" content="index, follow">

        <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('davea-icon-48.png') }}">
        <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('davea-icon-192.png') }}">

        <title inertia>DAVEA Solutions — IT Services & Custom Software</title>

        <meta
            name="description"
            content="DAVEA Solutions develops professional websites, web applications, custom desktop software, automation and digital solutions for people and businesses."
        >

        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="DAVEA Solutions">
        <meta property="og:title" content="DAVEA Solutions — IT Services & Custom Software">
        <meta
            property="og:description"
            content="Professional websites, web applications, custom software, automation and digital solutions built around your goals."
        >
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

        <!-- Twitter/X -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="DAVEA Solutions — IT Services & Custom Software">
        <meta
            name="twitter:description"
            content="Professional websites, web applications, custom software, automation and digital solutions built around your goals."
        >

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
