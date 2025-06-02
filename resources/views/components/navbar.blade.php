<header id="header" class="bg-blue-900 shadow-md fixed backdrop-blur-sm top-0 left-0 w-full flex items-center z-10 transition-colors duration-300 lg:px-8">
    <div class="mx-auto container py-2 ">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo Kabupaten Semarang" class="block max-h-14">
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
                    <ul class="block lg:flex items-center">
                        <li class="group mb-2">
                            <a href="/" class="relative text-base text-blue-900 lg:text-white font-bold lg:font-normal p-2 mx-8 rounded-lg flex group-hover:shadow-md 
                                after:content-[''] after:absolute after:h-1 after:bg-white after:rounded-full 
                                after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                {{ request()->is('/') ? 'after:opacity-100' : 'after:opacity-0' }}">Beranda</a>
                        </li>
                        <li class="group mb-2">
                            <a href="/profildesa" 
                                class="relative text-base text-blue-900 lg:text-white font-bold lg:font-normal p-2 mx-8 rounded-lg flex group-hover:shadow-md 
                                after:content-[''] after:absolute after:h-1 after:bg-white after:rounded-full 
                                after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                {{ request()->is('profildesa') ? 'after:opacity-100' : 'after:opacity-0' }}">Profil Wihara</a>
                        </li>
                        {{-- <li class="group mb-2">
                            <a href="/informasi" 
                                class="relative text-base text-white p-2 mx-8 rounded-lg flex group-hover:shadow-md 
                                after:content-[''] after:absolute after:h-1 after:bg-white after:rounded-full 
                                after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                {{ request()->is('informasi') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                Informasi
                            </a>
                        </li> --}}
                        <li class="group mb-2">
                            <a href="/sejarah" class="relative text-base text-blue-900 lg:text-white font-bold lg:font-normal p-2 mx-8 rounded-lg flex group-hover:shadow-md 
                                after:content-[''] after:absolute after:h-1 after:bg-white after:rounded-full 
                                after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                {{ request()->is('sejarah') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                Sejarah
                            </a>
                        </li>
                        {{-- <li class="group mb-2">
                            <a href="/umkm" class="relative text-base text-white p-2 mx-8 rounded-lg flex group-hover:shadow-md 
                                after:content-[''] after:absolute after:h-1 after:bg-white after:rounded-full 
                                after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                {{ request()->is('umkm') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                UMKM
                            </a>
                        </li> --}}
                        <li class="group mb-2">
                            <a href="/galeri" class="relative text-base text-blue-900 lg:text-white font-bold lg:font-normal p-2 mx-8 rounded-lg flex group-hover:shadow-md 
                                after:content-[''] after:absolute after:h-1 after:bg-white after:rounded-full 
                                after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                {{ request()->is('galeri') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                Galeri
                            </a>
                        </li>
                        <li class="group mb-2">
                            <a href="/kesanpesan" class="relative text-base text-blue-900 lg:text-white font-bold lg:font-normal p-2 mx-8 rounded-lg flex group-hover:shadow-md 
                                after:content-[''] after:absolute after:h-1 after:bg-white after:rounded-full 
                                after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                {{ request()->is('kesanpesan') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                Kesan & Pesan
                            </a>
                        </li>
                        <li class="group mb-2 lg:ml-8">
                            <a href="/admin" class="">
                                <button class="ml-8 w-[81%] rounded-lg shadow-xl
                                    lg:w-full lg:ml-0 lg:px-5 py-2
                                    border-2
                                    lg:hover:border-white lg:hover:bg-blue-900 lg:hover:text-white
                                    hover:border-blue-900  hover:bg-white hover:text-blue-900
                                    lg:bg-white lg:text-blue-900 
                                    bg-blue-900 text-white
                                    font-bold 
                                ">
                                    Login
                                </button>
                            </a>
                        </li>  
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>