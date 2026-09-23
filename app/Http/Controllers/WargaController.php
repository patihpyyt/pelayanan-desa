<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi input dan file upload
        $request->validate([
            'nik' => 'required|size:16|unique:wargas,nik',
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required',
            'no_telepon' => 'required|string|max:15',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Maksimal 2MB
            'slip_gaji' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'foto_rumah' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Proses Upload File KTP
        $pathKtp = $request->file('foto_ktp')->store('uploads/ktp', 'public');

        // 3. Proses Upload Slip Gaji (Jika ada)
        $pathSlip = $request->hasFile('slip_gaji') 
            ? $request->file('slip_gaji')->store('uploads/slip_gaji', 'public') 
            : null;

        // 4. Proses Upload Foto Rumah (Jika ada)
        $pathRumah = $request->hasFile('foto_rumah') 
            ? $request->file('foto_rumah')->store('uploads/rumah', 'public') 
            : null;

        // 5. Simpan ke Database
        Warga::create([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'foto_ktp' => $pathKtp,
            'slip_gaji' => $pathSlip,
            'foto_rumah' => $pathRumah,
        ]);

        return redirect()->back()->with('success', 'Data diri dan berkas berhasil diunggah!');
    }

    public function create()
{
    return view('warga.data-diri');
}
}
