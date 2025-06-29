<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <title>Asset</title>
</head>
<body>
    <x-navbar></x-navbar>
        
    <div class="container mx-auto px-4 mt-28 md:mt-44 mb-32">
        <div class="mt-4 mb-6 flex justify-start md:justify-start lg:justify-start">
            <a href="/{{ app()->getLocale() }}/sejarah" 
            class="inline-block text-center rounded-lg text-Poppins font-bold py-3 px-6 text-white bg-blue-900
                    hover:bg-white hover:text-blue-900 hover:border hover:border-[#1D66A6] 
                    transition-all duration-300 ease-in-out
                    text-sm sm:text-base md:text-lg">
                Asset Lainnya
            </a>
        </div>
        @isset($asset)
            <h1 class="text-3xl font-bold mb-6">{{ $asset->nama_asset }}</h1>
            <div class="mb-6">
                <img src="{{ Storage::url($asset->gambar_asset) }}" alt="{{ $asset->nama_asset }}" 
                    class="w-full h-[30rem] object-cover rounded-lg shadow-md">
            </div>
            <div class="mb-6">
                <div class="w-auto">
                    Tahun Pembuatan : {{ $asset->updated_asset }}
                </div>
            </div>
            <div class="prose max-w-none">
                <p class="text-gray-700 mb-4">{{ $asset->description_asset }}</p>
            </div>
            <div class="mt-6 text-sm text-gray-500">
            </div>
        @else
            <p>Asset not found</p>
        @endisset
    </div>
    <x-footer></x-footer>
</body>
</html>