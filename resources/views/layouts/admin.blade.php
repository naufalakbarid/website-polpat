<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - SD Polisi 4</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex font-sans min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gray-800 text-white flex flex-col shadow-xl">
        <div class="h-16 flex items-center justify-center border-b border-gray-700">
            <h2 class="text-lg font-bold tracking-widest text-polpat">PANEL ADMIN</h2>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/dashboard" class="flex items-center px-4 py-3 hover:bg-gray-700 rounded-lg transition {{ request()->is('dashboard') ? 'bg-gray-900 text-polpat font-medium' : '' }}">
                🏠 Dashboard Utama
            </a>
            
            @if(Auth::user()->role === 'super_admin')
            <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-700 rounded-lg transition">
                👥 Manajemen Akun
            </a>
            @endif
            
            <a href="{{ route('berita.index') }}" class="flex items-center px-4 py-3 hover:bg-gray-700 rounded-lg transition {{ request()->is('dashboard/berita*') ? 'bg-gray-900 text-polpat font-medium' : '' }}">
                📰 Kelola Berita
            </a>
        </nav>
    </aside>

    <!-- MAIN CONTENT AREA -->
    <main class="flex-1 flex flex-col">
        <!-- TOPBAR -->
        <header class="h-16 bg-white shadow-sm flex items-center justify-between px-8">
            <span class="text-gray-600 font-medium">Sistem Informasi SD Polisi 4 Bogor</span>
            <div class="flex items-center gap-4">
                <span class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }} ({{ strtoupper(Auth::user()->role) }})</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm">
                        Keluar
                    </button>
                </form>
            </div>
        </header>

        <!-- AREA KONTEN DINAMIS -->
        <div class="p-8">
            @yield('content')
        </div>
    </main>

</body>
</html>