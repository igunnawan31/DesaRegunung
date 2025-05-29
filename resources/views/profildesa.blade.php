<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Profil Desa</title>
</head>
<body class="overflow-x-hidden">
    <x-navbar></x-navbar>
    <section id="Judul" class="py-1">
        <div class="container mx-auto px-4 lg:px-20 mt-28 md:mt-44 mb-10">
        <div class="text-3xl md:text-4xl font-bold text-blue-900">Profil Wihara</div>
        <div class="text-lg md:text-xl text-slate-700 mt-2 text-justify">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum amet ipsa facere aspernatur ipsam dolorum inventore nobis deleniti reiciendis, officiis error ducimus facilis perferendis repellendus neque debitis consectetur sequi! Deserunt necessitatibus ducimus culpa quae! Commodi cumque sint eligendi id quasi.
        </div>
    </section>
    <section id="About" class="mx-auto px-4 lg:px-20 container">
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
                            <img src="{{ asset('assets/Desa.jpg') }}" class="absolute block w-full rounded-lg" alt="Post Image">
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
                    <h1 class="mb-3 text-2xl font-bold text-blue-900 text-center">Deskripsi Singkat</h1>
                    <div class="flex justify-center items-center mb-5">
                        <div class="w-[12rem] rounded-lg bg-blue-900 h-1"></div>
                    </div>
                    <p class="text-black mb-4 mt-1 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde necessitatibus possimus sit iste rerum dolores ducimus, dolorem quibusdam adipisci quasi in. Saepe consectetur minima, alias cum, consequatur omnis illum recusandae, eligendi fugiat aliquam ad veniam. Mollitia autem placeat ea aliquam? Ducimus reprehenderit voluptate hic rerum ratione maxime qui expedita?</p>
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
                </div>
                <div>
                    <h1 class="py-2 text-2xl font-bold text-blue-900">Cerita Wihara</h1>
                    <div class="mb-5">
                        <div class="w-[9.5rem] rounded-lg bg-blue-900 h-1"></div>
                    </div>
                </div>
                <p class="text-black mb-4 mt-1 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, blanditiis porro distinctio velit voluptates deleniti adipisci perspiciatis autem aut deserunt voluptate, animi in corrupti reiciendis sed nostrum fugiat cum? Esse laudantium temporibus soluta voluptate debitis eos saepe tenetur at deserunt quas. Eaque adipisci itaque accusantium, quibusdam odio dolores explicabo perspiciatis voluptatum quod animi fugit ducimus recusandae, assumenda a veritatis id praesentium molestias? Non id ad deserunt debitis fugit, perspiciatis quae labore tenetur porro illum aliquid aperiam maxime ut voluptate dolorum numquam eius autem natus nihil excepturi quis, consectetur sapiente soluta? Nostrum harum fuga minima pariatur libero commodi. Natus, amet aut!</p>
                <p class="text-black mb-4 mt-1 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, blanditiis porro distinctio velit voluptates deleniti adipisci perspiciatis autem aut deserunt voluptate, animi in corrupti reiciendis sed nostrum fugiat cum? Esse laudantium temporibus soluta voluptate debitis eos saepe tenetur at deserunt quas. Eaque adipisci itaque accusantium, quibusdam odio dolores explicabo perspiciatis voluptatum quod animi fugit ducimus recusandae, assumenda a veritatis id praesentium molestias? Non id ad deserunt debitis fugit, perspiciatis quae labore tenetur porro illum aliquid aperiam maxime ut voluptate dolorum numquam eius autem natus nihil excepturi quis, consectetur sapiente soluta? Nostrum harum fuga minima pariatur libero commodi. Natus, amet aut!</p>
                <p class="text-black mb-4 mt-1 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, blanditiis porro distinctio velit voluptates deleniti adipisci perspiciatis autem aut deserunt voluptate, animi in corrupti reiciendis sed nostrum fugiat cum? Esse laudantium temporibus soluta voluptate debitis eos saepe tenetur at deserunt quas. Eaque adipisci itaque accusantium, quibusdam odio dolores explicabo perspiciatis voluptatum quod animi fugit ducimus recusandae, assumenda a veritatis id praesentium molestias? Non id ad deserunt debitis fugit, perspiciatis quae labore tenetur porro illum aliquid aperiam maxime ut voluptate dolorum numquam eius autem natus nihil excepturi quis, consectetur sapiente soluta? Nostrum harum fuga minima pariatur libero commodi. Natus, amet aut!</p>
            </div>
        </div>
    </section>
    
    <section id="kemahasiswaan-post" class="mx-auto px-4 lg:px-20 container mb-32">
        <h1 class="py-2 text-3xl font-bold text-blue-900 text-center">Galeri Kami</h1>
        <div class="flex justify-center items-center mb-5">
            <div class="w-[12rem] rounded-lg bg-blue-900 h-1"></div>
        </div>
        <div class="container swiper font-Poppins">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
                    {{-- @foreach ($igposts as $igpost) --}}
                        <div class="swiper-slide flex justify-start animate-fadeInUp">
                            <div class="card w-full sm:w-40 md:w-56 lg:w-56 xl:w-64 sm:h-64 md:h-64 lg:h-80 xl:h-96 rounded-lg shadow-lg transform opacity-60 hover:opacity-100 hover:shadow-xl overflow-hidden ease-in-out transition duration-300">
                                {{-- <a href="{{ $igpost->linkig }}" class="block w-full h-full"> --}}
                                    <img src="{{ asset('assets/Desa.jpg') }}" class="w-full h-full object-cover" alt="Post Image">
                                    {{-- <img src="{{ asset('storage/' . $igpost->post_foto) }}" alt="{{ $igpost->deskripsi_foto }}" class="w-full h-full object-cover"> --}}
                                {{-- </a> --}}
                            </div>
                        </div>
                    {{-- @endforeach --}}
                </div>
                <div class="swiper-button-prev absolute top-[38%] -translate-y-1/2 left-0 z-10 text-blue-500"></div>
                <div class="swiper-button-next absolute top-[38%] -translate-y-1/2 right-0 z-10 text-blue-500"></div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>

</body>
</html>