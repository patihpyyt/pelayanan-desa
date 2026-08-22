<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lengkapi Data Diri</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div>
        <h1>Lengkapi Data Diri</h1>

        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('warga.profil.update') }}">
            @csrf
            @method('PUT')

            <div>
                <label>Nama Lengkap</label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $user->name) }}"
                    required
                >
            </div>

            <div>
                <label>NIK</label>

                <input
                    type="text"
                    name="nik"
                    value="{{ old('nik', $user->nik) }}"
                    maxlength="16"
                    required
                >
            </div>

            <div>
                <label>No. HP</label>

                <input
                    type="text"
                    name="no_hp"
                    value="{{ old('no_hp', $user->no_hp) }}"
                    required
                >
            </div>

            <div>
                <label>Alamat</label>

                <textarea
                    name="alamat"
                    required
                >{{ old('alamat', $user->alamat) }}</textarea>
            </div>

            <button type="submit">
                Simpan Data
            </button>
        </form>

    </div>

</body>
</html>