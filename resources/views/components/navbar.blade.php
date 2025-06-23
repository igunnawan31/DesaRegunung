<header id="header" class="bg-blue-900 shadow-md border-b border-white/20 fixed backdrop-blur-sm top-0 left-0 w-full flex items-center z-10 transition-colors duration-300 xl:px-8">
    <div class="mx-auto container py-2 ">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/">
                    <div class="flex">
                        <img src="{{ asset('assets/logo.png') }}" alt="Logo Kabupaten Semarang" class="block max-h-14 xl:max-h-20">
                        <div class="block ml-5">
                            <span class="text-white font-bold">Kabupaten Semarang</span>
                            <h2 class="text-white font-light">Wihara Sima</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button"
                class="block absolute right-4 xl:hidden">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>
                <nav id="nav-menu" 
                    class="transition-all duration-300 hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[40rem] 
                    w-full right-4 top-20 xl:block xl:static xl:max-w-full xl:shadow-none xl:rounded-none
                    xl:bg-transparent">
                    <ul class="block xl:flex items-center">
                        <li class="group mb-2">
                            <a href="/{{ app()->getLocale() }}/" 
                                class="relative flex items-center justify-start xl:justify-center text-base text-blue-900 xl:text-white font-bold xl:font-normal p-2 mx-8 rounded-lg group-hover:shadow-md 
                                    after:content-[''] after:absolute after:h-1 xl:after:bg-white after:bg-blue-900 after:rounded-full 
                                    after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                    {{ request()->is(app()->getLocale() . '/') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                
                                <div class="w-6 flex-shrink-0">
                                    <img src="{{ asset('assets/home_white.svg') }}" alt="Home" class="w-full invert xl:invert-0">
                                </div>
                                <span class="ml-3 w-full text-left xl:text-center">{{ __('menu.home') }}</span>
                            </a>
                        </li>
                        <li class="group mb-2">
                            <a href="/{{ app()->getLocale() }}/profildesa" 
                                class="relative flex items-center justify-start xl:justify-center text-base text-blue-900 xl:text-white font-bold xl:font-normal p-2 mx-8 rounded-lg group-hover:shadow-md 
                                    after:content-[''] after:absolute after:h-1 xl:after:bg-white after:bg-blue-900 after:rounded-full 
                                    after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                    {{ request()->is(app()->getLocale() . '/profildesa') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                
                                <div class="w-6 flex-shrink-0">
                                    <img src="{{ asset('assets/profil_white.svg') }}" alt="Home" class="w-full invert xl:invert-0">
                                </div>
                                <span class="ml-3 w-full text-left xl:text-center">{{ __('menu.profile') }}</span>
                            </a>
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
                            <a href="/{{ app()->getLocale() }}/sejarah" 
                                class="relative flex items-center justify-start xl:justify-center text-base text-blue-900 xl:text-white font-bold xl:font-normal p-2 mx-8 rounded-lg group-hover:shadow-md 
                                    after:content-[''] after:absolute after:h-1 xl:after:bg-white after:bg-blue-900 after:rounded-full 
                                    after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                    {{ request()->is(app()->getLocale() . '/sejarah') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                
                                <div class="w-6 flex-shrink-0">
                                    <img src="{{ asset('assets/history_white.svg') }}" alt="Home" class="w-full invert xl:invert-0">
                                </div>
                                <span class="ml-3 w-full text-left xl:text-center">{{ __('menu.history') }}</span>
                            </a>
                        </li>
                        <li class="group mb-2">
                            <a href="/{{ app()->getLocale() }}/artikel" 
                                class="relative flex items-center justify-start xl:justify-center text-base text-blue-900 xl:text-white font-bold xl:font-normal p-2 mx-8 rounded-lg group-hover:shadow-md 
                                    after:content-[''] after:absolute after:h-1 xl:after:bg-white after:bg-blue-900 after:rounded-full 
                                    after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                    {{ request()->is(app()->getLocale() . '/artikel') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                
                                <div class="w-6 flex-shrink-0">
                                    <img src="{{ asset('assets/article_white.svg') }}" alt="Home" class="w-full invert xl:invert-0">
                                </div>
                                <span class="ml-3 w-full text-left xl:text-center">{{ __('menu.articles') }}</span>
                            </a>
                        </li>
                        <li class="group mb-2">
                            <a href="/{{ app()->getLocale() }}/galeri" 
                                class="relative flex items-center justify-start xl:justify-center text-base text-blue-900 xl:text-white font-bold xl:font-normal p-2 mx-8 rounded-lg group-hover:shadow-md 
                                    after:content-[''] after:absolute after:h-1 xl:after:bg-white after:bg-blue-900 after:rounded-full 
                                    after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                    {{ request()->is(app()->getLocale() . '/galeri') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                
                                <div class="w-6 flex-shrink-0">
                                    <img src="{{ asset('assets/galery_white.svg') }}" alt="Home" class="w-full invert xl:invert-0">
                                </div>
                                <span class="ml-3 w-full text-left xl:text-center">{{ __('menu.gallery') }}</span>
                            </a>
                        </li>
                        <li class="group mb-5 xl:mb-2">
                            <a href="/{{ app()->getLocale() }}/kesanpesan" 
                                class="relative flex items-center justify-start xl:justify-center text-base text-blue-900 xl:text-white font-bold xl:font-normal p-2 mx-8 rounded-lg group-hover:shadow-md 
                                    after:content-[''] after:absolute after:h-1 xl:after:bg-white after:bg-blue-900 after:rounded-full 
                                    after:w-full after:-bottom-1 after:left-0 after:transition-all after:duration-300 
                                    {{ request()->is(app()->getLocale() . '/kesanpesan') ? 'after:opacity-100' : 'after:opacity-0' }}">
                                
                                <div class="w-6 flex-shrink-0">
                                    <img src="{{ asset('assets/pesan_white.svg') }}" alt="Home" class="w-full invert xl:invert-0">
                                </div>
                                <span class="ml-3 w-full text-left xl:text-center">{{ __('menu.testimony') }}</span>
                            </a>
                        </li>
                        <li class="group mb-2 xl:ml-8">
                            <a href="/admin" class="">
                                <button class="ml-8 w-[90%] rounded-lg shadow-xl
                                    xl:w-full xl:ml-0 xl:px-5 py-2
                                    border-2 border-white
                                    xl:hover:border-white xl:hover:bg-blue-900 xl:hover:text-white
                                    hover:border-blue-900  hover:bg-white hover:text-blue-900
                                    xl:bg-white xl:text-blue-900 
                                    bg-blue-900 text-white
                                    font-bold 
                                ">
                                    Login
                                </button>
                            </a>
                        </li>
                        <li class="group mb-2 xl:ml-4">
                            <div class="relative">
                                <select onchange="location = this.value;" 
                                    class="ml-8 w-[90%] rounded-lg shadow-xl
                                    xl:w-full xl:ml-0 xl:px-5 py-2
                                    border-2 border-white
                                    xl:hover:border-white xl:hover:bg-blue-900 xl:hover:text-white
                                    hover:border-blue-900  hover:bg-white hover:text-blue-900
                                    xl:bg-white xl:text-blue-900 
                                    bg-blue-900 text-white
                                    font-bold ">
                                    @php
                                        $segments = request()->segments(); 
                                        $langSegment = $segments[0] ?? 'id';
                                        $restSegments = array_slice($segments, 1);
                                        $restPath = implode('/', $restSegments); 
                                    @endphp

                                    <option value="/id{{ $restPath ? '/' . $restPath : '' }}" {{ app()->getLocale() === 'id' ? 'selected' : '' }}>
                                        ID
                                    </option>
                                    <option value="/en{{ $restPath ? '/' . $restPath : '' }}" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>
                                        EN
                                    </option>
                                </select>
                            </div>
                        </li>  
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>