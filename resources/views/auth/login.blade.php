<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal - SD Polisi 4</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border border-gray-200">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Portal Akses</h1>
            <p class="text-sm text-gray-500">SD Polisi 4 Bogor</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded-lg text-sm mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/portal-pembina" method="POST" class="space-y-5">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
            </div>

            <button type="submit" class="w-full bg-polpat text-white font-semibold py-2 rounded-lg hover:bg-orange-600 transition duration-300">
                Masuk Sistem
            </button>
        </form>
        
        <div class="mt-6 text-center text-xs text-gray-400">
            &copy; 2026 Sistem Informasi SD Polisi 4
        </div>
    </div>

</body>
</html>