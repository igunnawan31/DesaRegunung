<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
        <title>Beranda</title>
    </head>
    <body class="overflow-x-hidden">
        <x-navbar></x-navbar>
    </body>
</html>