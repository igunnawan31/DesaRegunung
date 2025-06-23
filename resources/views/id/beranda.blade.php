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

            <div class="relative z-5 flex items-center justify-center h-full py-[13rem] px-4 lg:px-8">
                <div class="container mx-auto">
                    <div class="flex items-center justify-center">
                        <div class="w-full flex items-center justify-start">
                            <div class="text-center">
                                <h1 class="mb-10 text-7xl font-bold md:text-7xl lg:text-8xl lg:text-left animate-fadeInUp text-white">Wihara Sima</h1>
                                <h2 class="text-xl lg:text-2xl text-justify animate-fadeInUp delay-150 text-white shadow-sm">
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
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="w-full lg:w-1/2 px-2">
                        <div class="relative aspect-video overflow-hidden rounded-lg w-full h-full">
                            <img src="{{ asset('assets/Desa.jpg') }}" 
                                class="w-full h-full object-cover rounded-lg" 
                                alt="Post Image">
                        </div>
                    </div>
                    
                    <div class="w-full px-2 lg:w-1/2 lg:pl-8 ">
                        <h1 class="mb-3 text-3xl font-bold text-slate-800 md:text-4xl lg:text-5xl">Wihara Sima</h1>
                        <p class="font-medium text-slate-700 mb-4 mt-1 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde necessitatibus possimus sit iste rerum dolores ducimus, dolorem quibusdam adipisci quasi in. Saepe consectetur minima, alias cum, consequatur omnis illum recusandae, eligendi fugiat aliquam ad veniam. Mollitia autem placeat ea aliquam? Ducimus reprehenderit voluptate hic rerum ratione maxime qui expedita?</p>
                        <div class="w-full mt-4 ">
                            <a href="/tentang" class="block w-full text-center rounded-lg text-Poppins font-bold py-4 px-8 text-white 
                            bg-blue-900 border
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
        
        <section id="About" class="py-24 px-4 lg:px-8">
            <div class="container mx-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2902767302444!2d110.40186257589772!3d-7.092312492910837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70891d81a2e59d%3A0x16317791443bd876!2sVihara%20Sima%202500%20Buddha%20Jayanti%20Semarang!5e0!3m2!1sen!2sid!4v1750522333776!5m2!1sen!2sid" width="1520" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        

        <x-footer></x-footer>

    </body>
</html>