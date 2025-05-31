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
        
    <div class="container mx-auto px-4 mt-28 md:mt-44 mb-32">
        <div class="mt-4 mb-6 flex justify-start md:justify-start lg:justify-start">
            <a href="/sejarah" 
            class="inline-block text-center rounded-lg text-Poppins font-bold py-3 px-6 text-white bg-blue-900
                    hover:bg-white hover:text-blue-900 hover:border hover:border-[#1D66A6] 
                    transition-all duration-300 ease-in-out
                    text-sm sm:text-base md:text-lg">
                &lt; Tentang Kami
            </a>
        </div>
        @isset($sejarah)
            <h1 class="text-3xl font-bold mb-6">{{ $sejarah->name_sejarah }}</h1>
            <div class="mb-6">
                <img src="{{ Storage::url($sejarah->image_sejarah) }}" alt="{{ $sejarah->name_sejarah }}" 
                    class="w-full h-[30rem] object-cover rounded-lg shadow-md">
            </div>
            <div class="mb-6">
                <div class="w-auto">
                    Tahun Pembuatan : {{ $sejarah->date_sejarah }}
                </div>
            </div>
            <div class="prose max-w-none">
                <p class="text-gray-700 mb-4">{{ $sejarah->description1 }}</p>
            </div>
            <div class="prose max-w-none">
                <p class="text-gray-700 mb-4">{{ $sejarah->description2 }}</p>
            </div>
            <div class="prose max-w-none">
                <p class="text-gray-700 mb-4">{{ $sejarah->description3 }}</p>
            </div>
            <div class="mt-6 text-sm text-gray-500">
            </div>
        @else
            <p>Sejarah not found</p>
        @endisset
    </div>
    <x-footer></x-footer>
</body>
</html>