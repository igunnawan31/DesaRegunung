<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <title>Galeri</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container w-full mx-5 lg:mx-52 mt-44">
        <div class="text-4xl font-bold text-black">Galeri</div>
        <div class="text-xl text-slate-700 mt-2 mb-6">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Regunung</div>
        
    <div id="galeri-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Items will be inserted here by JavaScript -->
    </div>

    <div id="pagination-controls" class="flex justify-center items-center mt-10 space-x-3 text-black mb-32"></div>
    </div>
    <x-footer></x-footer>
</body>
</html>