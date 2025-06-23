<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <title>Informasi</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container w-full lg:mx-52 mt-44">
        <div class="block lg:flex items-center">
            <x-listinformasi></x-listinformasi>
        </div>
    </div>
</body>
</html>