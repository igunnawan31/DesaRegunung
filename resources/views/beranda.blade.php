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
        <x-navbar/>
        <section id="Home" class="relative min-h-screen pb-24 pt-36 bg-cover bg-center" style="background-image: url('{{ asset('assets/Desa.jpg') }}');">
            <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

            <div class="relative z-5 flex items-center justify-center h-full py-[13rem]">
                <div class="container mx-auto">
                    <div class="flex items-center justify-center">
                        <div class="w-full flex items-center justify-start">
                            <div class="text-center">
                                <h1 class="mb-10 text-7xl font-bold md:text-7xl lg:text-8xl lg:text-left animate-fadeInUp text-white">Wihara Sima</h1>
                                <h2 class="text-2xl lg:text-justify animate-fadeInUp delay-150 text-white shadow-sm">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates ullam placeat impedit rerum expedita explicabo doloribus non voluptatem? A earum necessitatibus nisi ab aliquid eveniet magni ut ipsum excepturi vero illo quidem explicabo voluptates, sequi, animi alias dicta et nulla. Pariatur consectetur tenetur officiis modi expedita, sint sapiente hic harum?
                                </h2>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <section id="About" class="py-24 px-4 lg:px-8">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div id="default-carousel" class="relative w-full px-2 lg:w-1/2 justify-center" data-carousel="slide">
                        <div class="relative aspect-video overflow-hidden rounded-lg w-full h-full">
                            {{-- @foreach($posts as $index => $post)
                                <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ asset('storage/' . $post->post_foto) }}" class="absolute block w-full rounded-lg" alt="Post Image">
                                </div>
                            @endforeach --}}
                            <div class="duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('assets/Desa.jpg') }}" class="absolute block w-full rounded-lg" alt="Post Image" loading="lazy">
                            </div>
                        </div>
                        <div class="absolute z-5 flex -translate-x-1/2 bottom-7 left-1/2 space-x-3 rtl:space-x-reverse">
                            {{-- @foreach($posts as $post)
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                            @endforeach --}}
                        </div>
                        <button type="button" class="absolute top-0 start-0 z-5 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-5 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    
                    <div class="w-full px-2 lg:w-1/2 lg:pl-8 ">
                        <h1 class="mb-3 text-3xl font-bold text-slate-800 md:text-4xl lg:text-5xl">Wihara Sima</h1>
                        <p class="font-medium text-slate-700 mb-4 mt-1 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde necessitatibus possimus sit iste rerum dolores ducimus, dolorem quibusdam adipisci quasi in. Saepe consectetur minima, alias cum, consequatur omnis illum recusandae, eligendi fugiat aliquam ad veniam. Mollitia autem placeat ea aliquam? Ducimus reprehenderit voluptate hic rerum ratione maxime qui expedita?</p>
                        {{-- <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                            <div class="text-center flex-1">
                                <div class="bg-redRiung p-4 text-white rounded-md">
                                    <h1 class="text-4xl">{{ $bidangCount }}</h1>
                                    <p>Bidang & Biro</p>
                                </div>
                            </div>
                            <div class="text-center flex-1">
                                <div class="bg-redRiung p-4 text-white rounded-md">
                                    <h1 class="text-4xl">{{ $anggotaCount }}</h1>
                                    <p>Anggota</p>
                                </div>
                            </div>
                            <div class="text-center flex-1">
                                <div class="bg-redRiung p-4 text-white rounded-md">
                                    <h1 class="text-4xl">{{ $programCount }}</h1> 
                                    <p>program</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="w-full mt-4 ">
                            <a href="/tentang" class="block w-full text-center rounded-lg text-Poppins font-bold py-4 px-8 text-white 
                            bg-blue-900
                            hover:bg-white hover:text-blue-900 hover:bg-clip-text 
                            hover:bg-gradient-to-r hover:from-[#1D66A6] hover:to-[#DC7477] 
                            hover:border hover:border-[#1D66A6] hover:shadow-xl 
                            transition-all duration-300 ease-in-out">
                                Tentang Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SOTK (Struktur Organisasi dan Tata Kerja Desa Regunun) -->
        {{-- <div class="w-full h-screen flex flex-row items-center justify-start px-8">
            <div class="flex flex-col items-start justify-start w-full h-full py-4 ">
                <h1 class="text-5xl font-bold mb-4">SOTK</h1>
                <h3 class="text-lg mb-4">Struktur Organisasi dan Tata Kerja Desa Regunung</h3>
                <div class="w-full h-full bg-gradient-to-r from-blue-500 to-green-500">

                </div>

            </div>
        </div> --}}
        {{-- <div class="flex flex-col items-start justify-center w-full h-screen px-8 gap-4">
            <h1 class="text-5xl font-bold mb-4">Administrasi Penduduk</h1>
            
            <p class="w-3/4 text-justify">
                Data penduduk Desa Regunung adalah data yang berisi informasi tentang penduduk yang tinggal di Desa Regunung. Data ini mencakup informasi tentang nama, alamat, jenis kelamin, tanggal lahir, dan status perkawinan penduduk. Data ini digunakan untuk keperluan administrasi pemerintahan desa dan juga untuk keperluan statistik.
            </p>
            <div class="w-full h-full flex flex-row gap-4 items-start justify-start ">
                <div class="flex flex-col w-full h-3/5 items-center justify-center">
                    <div class="flex flex-row w-full h-3/5 items-center justify-start gap-4">
                        <div class="w-1/4 h-3/5 bg-blue-200 flex font-bold text-xl items-center justify-center">
                            1154
                        </div>
                        <div class="w-1/2 h-3/5 shadow-md flex items-center justify-center">
                            Penduduk
                        </div>
                    </div>
                    <div class="flex flex-row w-full h-3/5 items-center justify-start gap-4">
                        <div class="w-1/4 h-3/5 bg-blue-200 flex font-bold text-xl  items-center justify-center">
                            305
                        </div>
                        <div class="w-1/2 h-3/5 shadow-md flex  items-center justify-center">
                            Kepala Keluarga
                        </div>
                    </div>
                    <div class="flex flex-row w-full h-3/5 items-center justify-start gap-4">
                        <div class="w-1/4 h-3/5 bg-blue-200 flex font-bold text-xl  items-center justify-center">
                            305
                        </div>
                        <div class="w-1/2 h-3/5 shadow-md flex items-center justify-center">
                            Kepala Keluarga
                        </div>
                    </div>
                        
                </div>
                <div class="flex flex-col w-full h-3/5 items-center justify-center">
                    <div class="flex flex-row w-full h-1/2 items-center justify-start gap-4">
                        <div class="w-1/4 h-3/5 bg-blue-200 flex font-bold text-xl  items-center justify-center">
                            305
                        </div>
                        <div class="w-1/2 h-3/5 shadow-md flex items-center justify-center">
                            Kepala Keluarga
                        </div>
                    </div>
                    <div class="flex flex-row w-full h-1/2 items-center justify-start gap-4">
                        <div class="w-1/4 h-3/5 bg-blue-200 flex font-bold text-xl  items-center justify-center">
                            305
                        </div>
                        <div class="w-1/2 h-3/5 shadow-md flex items-center justify-center">
                            Kepala Keluarga
                        </div>
                    </div>
                    <div class="flex flex-row w-full h-1/2 items-center justify-start gap-4">
                        <div class="w-1/4 h-3/5 bg-blue-200 flex font-bold text-xl items-center justify-center">
                            305
                        </div>
                        <div class="w-1/2 h-3/5 shadow-md flex items-center justify-center">
                            Kepala Keluarga
                        </div>
                    </div>
                        
                </div>
            </div>

        </div> --}}
        {{-- <div class="w-full h-screen flex flex-row items-center justify-start px-8">
            <div class="w-full h-3/4 flex items-center justify-center bg-gradient-to-t from-blue-500 to-green-500 ">


            </div>
            <div class="w-full h-3/4 flex flex-col items-start justify-start px-4 gap-4">
                <h1 class="text-5xl font-bold ">APB Desa 2025</h1>
                <p>Akses cepat dan transparan terhadap APB Desa serta proyek pembangunan</p>
                <div class="w-full h-1/5 flex flex-col shadow-md border p-4">
                    <h1 class="text-md font-semibold opacity-75 self-start">Pendapatan</h1>
                    <h1 class="text-4xl font-extrabold opacity-75 self-end">Rp 4.802.205.800,00</h1>
                </div>
                <div class="w-full h-1/5 flex flex-col shadow-md border p-4">
                    <h1 class="text-md font-semibold opacity-75 self-start">Pengeluaran</h1>
                    <h1 class="text-4xl font-extrabold opacity-75 self-end">Rp 4.802.205.800,00</h1>
                </div>
                <h1 class="text-md font-bold self-end opacity-60 cursor-pointer hover:text-blue-500">Lihat Data Lebih Lengkap</h1>

            </div>

        </div> --}}
        <x-footer></x-footer>

    </body>
</html>