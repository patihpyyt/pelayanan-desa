<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit()
    {
        $user = auth()->user();

        return view('warga.profil', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'nik'     => ['required', 'string', 'max:16'],
            'no_hp'   => ['required', 'string', 'max:20'],
            'alamat'  => ['required', 'string'],
        ]);

        auth()->user()->update($request->only(['name', 'nik', 'no_hp', 'alamat']));

        return redirect()
            ->route('warga.dashboard')
            ->with('success', 'Data diri berhasil diperbarui.');
    }
}