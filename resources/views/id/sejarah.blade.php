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
    <div class="container mx-auto px-4 mt-28 lg:mt-44 mb-32">
        <div class="text-3xl md:text-4xl font-bold text-blue-900">Sejarah Wihara</div>
        <div class="text-lg md:text-xl text-slate-700 mt-2 text-justify">
            Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Wihara Sima
        </div>
        
        <div id="sejarah-cards" class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($sejarah as $item)
                <div class="bg-white border border-gray-200 rounded-lg shadow-md">
                    <a href="/{{ app()->getLocale() }}/sejarah/{{ $item->id }}">
                        <img loading="lazy" class="rounded-t-lg w-full h-64 object-cover" src="{{ asset('storage/' . $item->image_sejarah) }}" alt="Gambar Sejarah" />
                    </a>
                    <div class="p-5">
                        <a href="/{{ app()->getLocale() }}/sejarah/{{ $item->id }}">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                {{ $item->name_sejarah }}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 line-clamp-2">
                            {{ $item->description1 }}
                        </p>
                        <a href="/{{ app()->getLocale() }}/sejarah/{{ $item->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-900 rounded-lg hover:bg-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                    <div class="bg-black text-white text-sm font-bold px-6 py-2 rounded-b-lg">
                        {{ \Carbon\Carbon::parse($item->date_sejarah)->translatedFormat('d M Y') }}
                    </div>
                </div>
            @endforeach
            <div class="mt-8">
                {{ $sejarah->links() }}
            </div>
        </div>

        <div class="w-full mt-20">
            <h1 class="mb-3 text-2xl font-bold text-blue-900 text-center">Pengelolaan Asset</h1>
            <div class="flex justify-center items-center mb-5">
                <div class="w-[12rem] rounded-lg bg-blue-900 h-1"></div>
            </div>

            <div id="asset-cards" class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($Assetposts as $asset)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md">
                        <a href="/{{ app()->getLocale() }}/sejarah/asset/{{ $asset->id }}">
                            <img loading="lazy" class="rounded-t-lg w-full h-64 object-cover" src="{{ asset('storage/' . $asset->gambar_asset) }}" alt="Gambar Asset" />
                        </a>
                        <div class="p-5">
                            <a href="/{{ app()->getLocale() }}/sejarah/asset/{{ $asset->id }}">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                    {{ $asset->nama_asset }}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 line-clamp-2">
                                {{ $asset->description_singkat }}
                            </p>
                            <a href="/{{ app()->getLocale() }}/sejarah/asset/{{ $asset->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-900 rounded-lg hover:bg-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        <div class="bg-black text-white text-sm font-bold px-6 py-2 rounded-b-lg">
                            {{ \Carbon\Carbon::parse($asset->updated_at)->translatedFormat('d M Y') }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8">
                {{ $Assetposts->links() }}
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>