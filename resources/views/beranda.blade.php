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
        <div class="w-full h-screen relative">
            <!-- Background Image -->
            <div class="absolute inset-0" style="background-image: url('{{ asset('assets/Desa.jpg') }}'); background-size: cover; background-position: center; opacity: 0.8;"></div>
                
                <!-- Overlay Layer -->
                <div class="absolute inset-0 bg-gradient-to-t from-green-500 to-transparent via-transparent"></div>
                
                <!-- Content -->
                <div class="relative flex flex-col items-start justify-center h-screen px-8">
                    <h1 class="text-5xl font-bold mb-4">Selamat datang</h1>
                    <h2 class="text-4xl font-bold mb-4 bg-gradient-to-r bg-cover w-5/6 h-[50px] from-blue-200 to-green-200 bg-clip-text text-transparent">Website Resmi Desa Regunung</h2>
                    <p class="text-lg">Sumber informasi terbaru tentang pemerintahan di Desa Regunung</p>
                </div>
            </div>
        <div class="flex flex-row items-center px-8 justify-center gap-8 h-screen">
            <div class="flex flex-col items-start justify-center w-full h-full ">
                <h1 class="text-5xl font-bold mb-4">Jelajahi Desa</h1>
                <p class="text-lg mb-4 text-justify">
                    Website ini adalah website resmi Desa Regunung. Website ini bertujuan untuk memberikan informasi kepada masyarakat tentang Desa Regunung.
                Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan Desa. Aspek pemerintahan, penduduk, demografi, potensi Desa, dan juga berita tentang Desa.
                </p>
            </div>
            <div class="flex flex-col w-full items-start gap-4 justify-center h-full ">
                <div class="flex flex-row w-full gap-4 h-3/5 pr-8 ">
                    <div class="flex w-full h-full shadow-md items-center text-center justify-center text-6xl">
                        A
                    </div>
                    <div class="flex w-full h-full shadow-md items-center text-center text-6xl justify-center">
                        B
                    </div>

                </div>
                <div class="flex flex-row w-full h-3/5 gap-4 pl-8">
                    <div class="flex w-full h-full shadow-md items-center text-center text-6xl justify-center">
                        C
                    </div>
                    <div class="flex w-full h-full shadow-md items-center text-center text-6xl justify-center">
                        D
                    </div>

                </div>
            </div>
            </div>
        </div>
        <div class="w-full h-screen flex flex-row items-center justify-start px-8">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo Kabupaten Semarang" class="block w-3/6 h-3/4 bg-cover">
            <div class="flex flex-col items-start justify-start w-full h-3/4 px-4 ">
                <h1 class="text-5xl font-bold mb-4">Sambutan Kepala Desa</h1>
                <h1 class="text-3xl font-bold mb-4">Prabowo</h1>
                <h3 class="text-lg font-semibold mb-4">Kepala Desa Regunung</h3>
                <p class="text-lg mb-4 text-justify">
                    Website ini adalah website resmi Desa Regunung. Website ini bertujuan untuk memberikan informasi kepada masyarakat tentang Desa Regunung.
                    Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan Desa. Aspek pemerintahan, penduduk, demografi, potensi Desa, dan juga berita tentang Desa.
                    Website ini juga bertujuan untuk memberikan informasi kepada masyarakat tentang Desa Regunung. Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan Desa. Aspek pemerintahan, penduduk, demografi, potensi Desa, dan juga berita tentang Desa.
                </p>
            </div>


        </div>

        <!-- Peta desa -->
        <div class="w-full h-screen flex flex-row items-center justify-start px-8">
            <div class="flex flex-col items-start justify-start w-full h-full py-4 ">
                <h1 class="text-5xl font-bold mb-4">Peta Desa</h1>
                <div class="w-full h-full bg-gradient-to-r from-blue-500 to-green-500">

                </div>
            </div>
        </div>

        <!-- SOTK (Struktur Organisasi dan Tata Kerja Desa Regunun) -->
        <div class="w-full h-screen flex flex-row items-center justify-start px-8">
            <div class="flex flex-col items-start justify-start w-full h-full py-4 ">
                <h1 class="text-5xl font-bold mb-4">SOTK</h1>
                <h3 class="text-lg mb-4">Struktur Organisasi dan Tata Kerja Desa Regunung</h3>
                <div class="w-full h-full bg-gradient-to-r from-blue-500 to-green-500">

                </div>

            </div>
        </div>
        <div class="flex flex-col items-start justify-center w-full h-screen px-8 gap-4">
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

        </div>
        <div class="w-full h-screen flex flex-row items-center justify-start px-8">
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

        </div>

    </body>
</html>