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
        <div class="container mx-auto px-4 mt-28 md:mt-44 mb-10">
            <div class="text-3xl md:text-4xl font-bold text-blue-900">Profil Wihara</div>
            <div class="text-lg md:text-xl text-slate-700 mt-2 text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum amet ipsa facere aspernatur ipsam dolorum inventore nobis deleniti reiciendis, officiis error ducimus facilis perferendis repellendus neque debitis consectetur sequi! Deserunt necessitatibus ducimus culpa quae! Commodi cumque sint eligendi id quasi.
            </div>
        </div>
    </section>
    
    <section id="About" class="mx-auto px-4 container">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-1/2 px-2">
                    <div class="relative aspect-video overflow-hidden rounded-lg w-full h-full">
                        <img src="{{ asset('assets/Desa.jpg') }}" 
                            class="w-full h-full object-cover rounded-lg" 
                            alt="Post Image">
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2 px-2 lg:pl-8">
                    <h1 class="mb-3 text-2xl font-bold text-blue-900 text-center">Deskripsi Singkat</h1>
                    <div class="flex justify-center items-center mb-5">
                        <div class="w-[12rem] rounded-lg bg-blue-900 h-1"></div>
                    </div>
                    <p class="text-black mb-4 mt-1 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nostrum at, mollitia fugit magni molestias earum facere quaerat non distinctio minima voluptates voluptatum explicabo fugiat pariatur nam animi vitae cupiditate, accusamus debitis sunt tempore. Facilis in ab ipsa voluptates consectetur?</p>
                </div>
            </div>
                
            <div class="lg:mt-6">
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
    
    <section id="gallery-section" class="mx-auto px-4 container mb-32">
        <h1 class="py-2 text-3xl font-bold text-blue-900 text-center">Galeri Terbaru</h1>
        <div class="flex justify-center items-center mb-5">
            <div class="w-[12rem] rounded-lg bg-blue-900 h-1"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($galeriposts->take(4) as $glr)
            <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('storage/' . $glr->image_acara) }}" 
                        alt="{{ $glr->description_acara }}" 
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-gray-800 truncate">{{ $glr->name_acara }}</h3>
                    <p class="text-sm text-gray-500">{{ $glr->date_acara }}</p>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-6 flex justify-center">
            <a href="/galeri" 
            class="inline-block text-center rounded-lg text-Poppins font-bold py-3 px-6 text-white bg-blue-900
                    hover:bg-white hover:text-blue-900 hover:border hover:border-[#1D66A6] 
                    transition-all duration-300 ease-in-out
                    text-sm sm:text-base md:text-lg">
                Lihat Lebih Lanjut
            </a>
        </div>
    </section>
    
    <x-footer></x-footer>

</body>
</html>