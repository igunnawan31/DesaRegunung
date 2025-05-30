<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <title>Sejarah</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container mx-auto px-4 lg:px-20 mt-28 md:mt-44 mb-32">
        <div class="text-3xl md:text-4xl font-bold text-black">Sejarah Wihara</div>
        <div class="text-lg md:text-xl text-slate-700 mt-2">
            Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Regunung
        </div>
        
        <div id="sejarah-cards" class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Dynamic cards will be inserted here -->
        </div>
    </div>
</body>
</html>