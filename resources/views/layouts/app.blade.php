<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Polisi 4 Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-900">

    <!-- NAVBAR (Melayang, Transparan & Efek Kaca) -->
    <nav class="fixed top-0 w-full z-50 bg-gray-200/80 backdrop-blur-md py-4 px-8 border-b border-gray-300/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo Kiri -->
            <div class="text-2xl font-bold leading-tight">
                Lo<br>Go
            </div>
            <!-- Menu Kanan -->
            <div class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="/" class="hover:text-polpat transition">Beranda</a>
                <a href="{{ route('profil.sekolah') }}" class="hover:text-polpat transition">Profil</a>
                <a href="/sdm" class="hover:text-polpat transition">SDM</a>
                <a href="/fasilitas" class="hover:text-polpat transition">Fasilitas</a>
                <a href="/akademik" class="hover:text-polpat transition">Akademik</a>
                <a href="/ekstrakurikuler" class="hover:text-polpat transition">Ekstrakulikuler</a>
                <a href="/berita" class="hover:text-polpat transition">Berita</a>
                <a href="/kontak" class="hover:text-polpat transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- KONTEN DINAMIS HALAMAN (Tanpa Jarak) -->
    <main class="w-full">
        @yield('content')
    </main>

    <!-- FOOTER (Menempel Rapat dengan Section Terakhir) -->
    <footer class="w-full bg-gray-300 pt-10 pb-6 border-t border-gray-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left mb-8">
                <!-- Kolom 1: Logo -->
                <div class="flex justify-center md:justify-start items-center">
                    <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center font-bold text-gray-500 shadow-sm">
                        logo
                    </div>
                </div>
                <!-- Kolom 2: Hubungi Kami -->
                <div class="bg-white p-4 flex items-center justify-center text-sm shadow-sm">
                    hubungi kami
                </div>
                <!-- Kolom 3: Sosmed -->
                <div class="bg-white p-4 flex items-center justify-center text-sm shadow-sm">
                    sosmed
                </div>
                <!-- Kolom 4: Maps -->
                <div class="bg-white p-4 flex items-center justify-center text-sm shadow-sm">
                    maps
                </div>
            </div>
            <div class="text-center text-xs text-gray-600 mt-4 border-t border-gray-400 pt-4">
                Footer - &copy; 2026 SD Polisi 4 Bogor
            </div>
        </div>
    </footer>

</body>
</html>