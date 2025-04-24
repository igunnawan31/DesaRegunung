<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 mt-2 lg:px-8">
    <div class="mx-auto container py-2 ">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo Kabupaten Semarang" class="block w-16 h-16">
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button"
                class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>
                <nav id="nav-menu" 
                    class="transition-all duration-300 hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[20rem] 
                    w-full right-4 top-full lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none
                    lg:bg-transparent">
                    <ul class="block lg:flex">
                        <li class="group mb-2">
                            <a href="/" class="md:font-bold text-base  text-black p-2 mx-8 rounded-lg
                            flex group-hover:shadow-md">Beranda</a>
                        </li>
                        <li class="group mb-2">
                            <a href="/profildesa" class="md:font-bold text-base text-black p-2 mx-8 rounded-lg
                            flex group-hover:shadow-md">Profil Desa</a>
                        </li>
                        <li class="group mb-2">
                            <a href="/informasi" class="md:font-bold text-base text-black p-2 mx-8 rounded-lg
                            flex group-hover:shadow-md">Informasi</a>
                        </li>
                        <li class="group mb-2">
                            <a href="/berita" class="md:font-bold text-base text-black p-2 mx-8 rounded-lg
                            flex group-hover:shadow-md">Berita</a>
                        </li>
                        <li class="group mb-2">
                            <a href="/umkm" class="md:font-bold text-base text-black p-2 mx-8 rounded-lg
                            flex group-hover:shadow-md">UMKM</a>
                        </li>
                        <li class="group mb-2">
                            <a href="/galeri" class="md:font-bold text-base text-black p-2 mx-8 rounded-lg
                            flex group-hover:shadow-md">Galeri</a>
                        </li>
                        <li class="group mb-2">
                            <div class="mx-8">
                                <form class="max-w-md">   
                                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative">
                                        <input type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 rounded-full" placeholder="Cari" required />
                                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-black hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-full text-sm px-4 py-2">
                                            <svg class="w-4 h-4 text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>