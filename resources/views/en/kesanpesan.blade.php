<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <title>Kesan & Pesan</title>
</head>
<body>
    <x-navbar></x-navbar>
    @if (session('success'))
        <div id="popup-success" class="fixed bottom-5 left-1/2 transform -translate-x-1/2 z-50 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded shadow-lg transition-opacity duration-300">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                const popup = document.getElementById('popup-success');
                if (popup) {
                    popup.style.opacity = '0';
                    setTimeout(() => popup.remove(), 300);
                }
            }, 3000);
        </script>
    @endif
    <div class="container mx-auto px-4 mt-28 md:mt-44 mb-32">
        <div class="text-3xl md:text-4xl font-bold text-blue-900">Kesan & Pesan</div>
        <div class="text-lg md:text-xl text-slate-700 mt-2">
            Berikan kesan anda kepada kami agar kami dapat memberikan layanan yang terbaik kedepannya
        </div>

        <form action="{{ route('kesanpesan.store', ['lang' => app()->getLocale()]) }}" method="POST" class="mt-10 space-y-6 w-full">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium text-blue-900">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="asal" class="block text-sm font-medium text-blue-900">Asal</label>
                <input type="text" id="asal" name="asal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="kesan_pesan" class="block text-sm font-medium text-blue-900">Kesan & Pesan</label>
                <textarea id="kesan_pesan" name="kesan_pesan" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div>
                <button type="submit" class="px-6 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition">
                    Kirim
                </button>
            </div>
        </form>
        <div class="w-full mt-10">
            <h1 class="mb-2 text-2xl font-bold text-blue-900">Komentar</h1>
            <div class="mb-5">
                <div class="w-full rounded-lg bg-blue-900 h-1"></div>
            </div>
            @foreach ($komentar as $item)
                <div class="mb-6 p-4 rounded-md bg-white border shadow-sm">
                    <div class="font-semibold text-blue-900">{{ $item->nama }} <span class="text-sm text-gray-500">({{ $item->asal }})</span></div>
                    <div class="mt-1 text-slate-700">{{ app()->getLocale() === 'id' ? $item->kesan_pesan_id : $item->kesan_pesan_en }}</div>
                </div>
            @endforeach

            <div class="mt-8">
                {{ $komentar->links() }}
            </div>         
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>
