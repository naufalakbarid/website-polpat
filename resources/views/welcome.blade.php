@extends('layouts.app')

@section('content')
    <!-- BLOK 2: Hero Banner -->
    <div class="relative bg-gray-100 overflow-hidden mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-polpat tracking-tight mb-4">
                Selamat Datang di SD Polisi 4 Bogor
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Sekolah Berprestasi, Berkarakter, dan Berwawasan Global. Membangun generasi cerdas untuk masa depan.
            </p>
            <a href="https://ppdb.dinas.contoh" target="_blank" class="inline-block bg-polpat hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                INFO PENDAFTARAN PPDB ONLINE
            </a>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- BLOK 3: Highlight Info Juara (Dinamis) -->
        <div class="mb-20">
            <div class="text-center mb-10">
                <h3 class="text-3xl font-bold inline-block border-b-4 border-polpat pb-2 text-gray-800">
                    Info Juara & Prestasi
                </h3>
            </div>
            
            <!-- Grid System Tailwind (Otomatis responsif di HP) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($prestasi as $item)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="h-48 bg-gray-300 flex items-center justify-center text-gray-500 font-medium">
                        Foto Ilustrasi Lomba
                    </div>
                    <div class="p-6">
                        <h5 class="text-xl font-bold text-gray-900 mb-2">{{ $item->judul }}</h5>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $item->konten }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- BLOK 4: Sambutan Kepala Sekolah -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12 mb-16 flex flex-col md:flex-row items-center gap-10">
            <div class="w-48 h-48 rounded-full bg-gray-200 flex-shrink-0">
                <!-- Tempat Foto Kepsek -->
            </div>
            <div>
                <h4 class="text-2xl font-bold text-polpat mb-4">Sambutan Kepala Sekolah</h4>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa. Kami berkomitmen untuk terus meningkatkan kualitas pendidikan di SD Polisi 4 Bogor dengan memadukan nilai-nilai karakter dan pemanfaatan teknologi modern guna mempersiapkan siswa menghadapi tantangan global.
                </p>
                <button class="border-2 border-gray-300 text-gray-700 hover:border-polpat hover:text-polpat font-medium py-2 px-6 rounded-lg transition-colors duration-300">
                    Baca Selengkapnya
                </button>
            </div>
        </div>
    </div>
@endsection