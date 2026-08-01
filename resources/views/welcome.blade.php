@extends('layouts.app')

@section('content')
    <!-- SECTION 1: Hero (Video Berjalan) - Layar 1 -->
    <div class="w-full bg-gray-300 min-h-screen relative flex items-center justify-center">
        <span class="text-gray-600 font-medium">Foto atau Vidio Berjalan</span>
        <button class="absolute bottom-16 left-8 md:left-24 bg-polpat text-white px-8 py-3 font-semibold shadow-md hover:bg-orange-600 transition">
            Daftar
        </button>
    </div>

    <!-- SECTION 2: Sambutan Kepsek - Layar 2 -->
    <div class="w-full bg-gray-200 min-h-screen flex items-center justify-center py-16">
        <div class="max-w-4xl w-full mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
            <div class="bg-white h-64 md:h-80 flex items-center justify-center shadow-sm text-gray-500">
                foto kepsek
            </div>
            <div class="bg-white h-64 md:h-80 flex items-center justify-center shadow-sm text-gray-500 p-8 text-center">
                kalimat sambutan
            </div>
        </div>
    </div>

    <!-- SECTION 3: Highlight / Info Juara - Layar 3 -->
    <div class="w-full bg-gray-300 min-h-screen flex items-center justify-center py-16">
        <div class="max-w-7xl w-full mx-auto px-4 text-center">
            <h3 class="text-2xl font-semibold mb-12 text-gray-800">Highlight/info juara</h3>
            <!-- Grid 4 Kolom -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @forelse ($prestasi as $item)
                    <div class="bg-white h-56 flex items-center justify-center shadow-sm text-sm p-4 text-center transition-transform hover:-translate-y-2">
                        {{ $item->judul }}
                    </div>
                @empty
                    <!-- Jika data kosong -->
                    <div class="bg-white h-56 shadow-sm"></div>
                    <div class="bg-white h-56 shadow-sm"></div>
                    <div class="bg-white h-56 shadow-sm"></div>
                    <div class="bg-white h-56 shadow-sm"></div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- SECTION 4: Berita Umum - Layar 4 -->
    <div class="w-full bg-gray-200 min-h-screen flex items-center justify-center py-16">
        <div class="max-w-7xl w-full mx-auto px-4 text-center">
            <h3 class="text-2xl font-semibold mb-12 text-gray-800">Berita</h3>
            <!-- Grid 3 Kolom -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white h-64 flex items-center justify-center shadow-sm text-gray-500 transition-transform hover:-translate-y-2">
                    berita 1
                </div>
                <div class="bg-white h-64 flex items-center justify-center shadow-sm text-gray-500 transition-transform hover:-translate-y-2">
                    berita 2
                </div>
                <div class="bg-white h-64 flex items-center justify-center shadow-sm text-gray-500 transition-transform hover:-translate-y-2">
                    berita 3
                </div>
            </div>
        </div>
    </div>
@endsection