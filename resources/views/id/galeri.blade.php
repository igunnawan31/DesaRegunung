<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <title>Galeri</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container mx-auto px-4 mt-28 md:mt-44 mb-32">
        <div class="text-4xl font-bold text-blue-900">Galeri</div>
        <div class="text-xl text-slate-700 mt-2 mb-6">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Wihara Sima</div>

        <div id="galeri-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($galeri as $item)
                <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden flex flex-col">
                    <div class="gallery-image-container">
                        <img 
                            src="{{ asset('storage/' . $item->image_acara) }}"
                            alt="{{ $item->name_acara }}" 
                            class="cursor-pointer gallery-image"
                            onclick="showModal({{ $item->id }})"
                        >
                    </div>
                    <div class="p-4 flex-grow flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $item->name_acara }}</h3>
                        <p class="text-sm text-gray-500 mb-3">{{ $item->date_acara }}</p>
                        <button 
                            onclick="showModal({{ $item->id }})" 
                            class="read-more-btn mt-auto px-4 py-2 bg-blue-900 text-white rounded hover:bg-blue-700"
                        >
                            Read More &raquo;
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10 mb-32 flex justify-center">
            {{ $galeri->links() }}
        </div>
    </div>

    <div id="gallery-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl max-h-[90vh] overflow-auto mx-4">
            <div class="p-6">
                <div class="flex justify-between items-start">
                    <h3 id="modal-title" class="text-2xl font-bold text-gray-800"></h3>
                    <button id="close-modal" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center justify-center">
                        <img id="modal-image" class="max-h-[60vh] object-contain rounded-lg" src="" alt="Event Image">
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-gray-700">Date:</h4>
                            <p id="modal-date" class="text-gray-600"></p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Description:</h4>
                            <p id="modal-description" class="text-gray-600"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

    <script>
        function showModal(id) {
            fetch(`/galeri/${id}`)
                .then(res => res.json())
                .then(data => {
                    document.getElementById('modal-title').textContent = data.name_acara;
                    document.getElementById('modal-image').src = data.image_acara;
                    document.getElementById('modal-image').alt = data.name_acara;
                    document.getElementById('modal-date').textContent = data.date_acara;
                    document.getElementById('modal-description').textContent = data.description_acara;
                    document.getElementById('gallery-modal').classList.remove('hidden');
                });
        }

        document.getElementById('close-modal').addEventListener('click', () => {
            document.getElementById('gallery-modal').classList.add('hidden');
        });

        document.getElementById('gallery-modal').addEventListener('click', (e) => {
            if (e.target.id === 'gallery-modal') {
                document.getElementById('gallery-modal').classList.add('hidden');
            }
        });
    </script>
</body>
</html>
