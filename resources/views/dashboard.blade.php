<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SD Polisi 4</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex font-sans">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gray-800 text-white min-h-screen flex flex-col shadow-xl">
        <div class="h-16 flex items-center justify-center border-b border-gray-700">
            <h2 class="text-lg font-bold tracking-widest text-polpat">PANEL ADMIN</h2>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/dashboard" class="flex items-center px-4 py-3 bg-gray-900 text-polpat rounded-lg font-medium">
                🏠 Dashboard Utama
            </a>

            @if(Auth::user()->role === 'super_admin')
            <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-700 rounded-lg transition">
                👥 Manajemen Akun
            </a>
            @endif

            <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-700 rounded-lg transition">
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

                <!-- Tombol Logout -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm">
                        Keluar
                    </button>
                </form>
            </div>
        </header>

        <!-- KONTEN HALAMAN -->
        <div class="p-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang!</h1>
                <p class="text-gray-600">
                    Anda masuk sebagai <span class="font-semibold text-polpat">{{ Auth::user()->name }}</span>. 
                    Pilih menu di sebelah kiri untuk mulai mengelola konten sistem.
                </p>
            </div>
        </div>
    </main>

</body>
</html>