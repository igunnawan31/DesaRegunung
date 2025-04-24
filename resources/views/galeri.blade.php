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
    <div class="container w-full mx-5 lg:mx-52  mt-44">
        <div class="text-4xl font-bold text-black">Berita Desa</div>
        <div class="text-xl text-slate-700 mt-2">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Regunung</div>
        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="max-w-md mr-14 mb-14 relative bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-lg w-full" src="assets/contoh.jpg" alt="" />
                </a>
            </div>
        </div>
    </div>
</body>
</html>