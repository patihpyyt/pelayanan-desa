<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Petugas</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <h1>Dashboard Petugas</h1>

    <h2>
        Selamat datang, {{ $user->name ?? auth()->user()->name }}
    </h2>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>