<div class="flex justify-center mt-10">
    <nav class="inline-flex items-center space-x-1 text-sm">
        @if ($currentPage > 1)
            <a href="?page={{ $currentPage - 1 }}" class="px-3 py-1 border rounded-l-md bg-white text-gray-700 hover:bg-slate-200">Prev</a>
        @else
            <span class="px-3 py-1 border rounded-l-md bg-gray-100 text-gray-400 cursor-not-allowed">Prev</span>
        @endif

        @for ($i = 1; $i <= $totalPages; $i++)
            @if ($i == $currentPage)
                <span class="px-3 py-1 border bg-blue-500 text-white">{{ $i }}</span>
            @else
                <a href="?page={{ $i }}" class="px-3 py-1 border bg-white text-gray-700 hover:bg-slate-200">{{ $i }}</a>
            @endif
        @endfor

        @if ($currentPage < $totalPages)
            <a href="?page={{ $currentPage + 1 }}" class="px-3 py-1 border rounded-r-md bg-white text-gray-700 hover:bg-slate-200">Next</a>
        @else
            <span class="px-3 py-1 border rounded-r-md bg-gray-100 text-gray-400 cursor-not-allowed">Next</span>
        @endif
    </nav>
</div>