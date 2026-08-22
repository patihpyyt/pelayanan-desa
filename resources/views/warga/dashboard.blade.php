<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Warga</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen">

    <div class="max-w-2xl mx-auto py-12 px-4">

        <div class="bg-white shadow-sm rounded-xl p-8 border border-gray-100">

            <h1 class="text-2xl font-bold text-gray-800 mb-1">Dashboard Warga</h1>
            <p class="text-gray-500 mb-6">Selamat datang, {{ $user->name }}</p>

            <div class="space-y-4 mb-8">

                <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                    <span class="text-sm text-gray-500">Email</span>
                    <span class="text-sm font-medium text-gray-800">{{ $user->email }}</span>
                </div>

                <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                    <span class="text-sm text-gray-500">NIK</span>
                    <span class="text-sm font-medium text-gray-800">{{ $user->nik ?? '-' }}</span>
                </div>

                <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                    <span class="text-sm text-gray-500">No. HP</span>
                    <span class="text-sm font-medium text-gray-800">{{ $user->no_hp ?? '-' }}</span>
                </div>

                <div class="flex justify-between items-center pb-1">
                    <span class="text-sm text-gray-500">Alamat</span>
                    <span class="text-sm font-medium text-gray-800 text-right">{{ $user->alamat ?? '-' }}</span>
                </div>

            </div>

            <div class="flex gap-3">

                <a href="{{ route('warga.profil') }}"
                   class="inline-block bg-slate-800 hover:bg-slate-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                    Edit Data Diri
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-white hover:bg-gray-50 text-gray-600 text-sm font-medium px-4 py-2 rounded-lg border border-gray-200 transition">
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </div>

</body>
</html>