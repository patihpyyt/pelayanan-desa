<x-app-layout>
    <!-- Header khusus halaman -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Warga
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Notifikasi Sukses -->
            @if(session('success'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-xl shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- BANNER UTAMA -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-6 md:p-8 text-white shadow-md flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold mb-1">Selamat Datang, {{ $user->name }}! 👋</h1>
                    <p class="text-blue-100 text-sm">Kelola pengajuan surat dan perbarui data kependudukanmu dengan mudah dari sini.</p>
                </div>
                <!-- Tombol Buat Surat Baru (Bisa diarahkan ke modal atau halaman pilih jenis surat) -->
                <a href="#pilihan-surat" class="bg-white text-blue-700 hover:bg-blue-50 font-semibold px-5 py-2.5 rounded-xl shadow transition text-sm flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Buat Surat Baru
                </a>
            </div>

            <!-- KONTROL UTAMA (Grid 2 Kolom) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- KOLOM KIRI: Informasi Data Diri & Berkas (Lebar 2 Kolom) -->
                <div class="lg:col-span-2 bg-white shadow-sm rounded-2xl p-6 border border-gray-100 space-y-6">
                    <div class="flex justify-between items-center border-b border-gray-100 pb-4">
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Informasi Data Diri & Berkas</h3>
                            <p class="text-xs text-gray-500">Pastikan data kependudukanmu sudah lengkap sebelum mengajukan surat.</p>
                        </div>
                        <a href="{{ route('warga.profil') }}" class="text-sm font-medium text-blue-600 hover:text-blue-800 bg-blue-50 hover:bg-blue-100 px-3 py-1.5 rounded-lg transition">
                            Edit Profil &rarr;
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
                            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider block mb-1">NIK</span>
                            <span class="font-bold text-gray-800 text-base">{{ $user->nik ?? 'Belum diisi' }}</span>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
                            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider block mb-1">Nomor WhatsApp</span>
                            <span class="font-bold text-gray-800 text-base">{{ $user->no_hp ?? '-' }}</span>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-xl border border-gray-100 md:col-span-2">
                            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider block mb-1">Email Akun</span>
                            <span class="font-bold text-gray-800 text-base">{{ $user->email }}</span>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-xl border border-gray-100 md:col-span-2">
                            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider block mb-1">Alamat Domisili</span>
                            <span class="font-medium text-gray-800 text-sm">{{ $user->alamat ?? 'Belum diisi' }}</span>
                        </div>
                    </div>

                    <!-- Status Dokumen Pendukung -->
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Status Dokumen Pendukung</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs font-medium px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 border border-amber-200 flex items-center gap-1.5">
                                ⚠️ Foto KTP Belum Ada
                            </span>
                            <span class="text-xs font-medium px-3 py-1.5 rounded-lg bg-gray-100 text-gray-600 border border-gray-200">
                                Slip Gaji (Opsional)
                            </span>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: Riwayat Pengajuan (Lebar 1 Kolom) -->
                <div class="bg-white shadow-sm rounded-2xl p-6 border border-gray-100 flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-gray-800 text-lg mb-1">Riwayat Pengajuan</h3>
                        <p class="text-xs text-gray-500 mb-4">Pantau status surat yang sudah kamu ajukan di sini.</p>

                        <!-- Kondisi jika belum ada pengajuan sama sekali -->
                        <div class="text-center py-10 px-4 bg-gray-50 rounded-xl border border-dashed border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <p class="text-sm font-medium text-gray-600">Belum ada riwayat pengajuan</p>
                            <p class="text-xs text-gray-400 mt-1">Silakan buat pengajuan surat baru melalui tombol di atas.</p>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full bg-white hover:bg-red-50 text-red-600 text-sm font-medium px-4 py-2.5 rounded-xl border border-red-200 transition text-center">
                                Keluar Akun (Logout)
                            </button>
                        </form>
                    </div>
                </div>

            </div>

            <!-- SECTION TAMBAHAN: PILIHAN JENIS SURAT (Muncul saat tombol Buat Surat diklik) -->
            <div id="pilihan-surat" class="bg-white shadow-sm rounded-2xl p-6 md:p-8 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Pilih Jenis Layanan Surat</h3>
                <p class="text-sm text-gray-500 mb-6">Pilih jenis surat yang ingin kamu ajukan ke Kantor Desa Karya Makmur:</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    
                    <!-- Kartu Jenis Surat 1 -->
                    <div class="border border-gray-200 hover:border-blue-500 hover:shadow-md rounded-xl p-5 transition flex flex-col justify-between group">
                        <div>
                            <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center font-bold mb-3 group-hover:bg-blue-600 group-hover:text-white transition">
                                📄
                            </div>
                            <h4 class="font-bold text-gray-800 group-hover:text-blue-600">Surat Keterangan Domisili</h4>
                            <p class="text-xs text-gray-500 mt-1">Digunakan untuk verifikasi tempat tinggal resmi warga desa.</p>
                        </div>
                        <a href="#" class="mt-5 inline-flex items-center text-sm font-semibold text-blue-600 hover:text-blue-800">
                            Ajukan Pembuatan &rarr;
                        </a>
                    </div>

                    <!-- Kartu Jenis Surat 2 -->
                    <div class="border border-gray-200 hover:border-blue-500 hover:shadow-md rounded-xl p-5 transition flex flex-col justify-between group">
                        <div>
                            <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold mb-3 group-hover:bg-emerald-600 group-hover:text-white transition">
                                📑
                            </div>
                            <h4 class="font-bold text-gray-800 group-hover:text-emerald-600">Surat Keterangan Tidak Mampu (SKTM)</h4>
                            <p class="text-xs text-gray-500 mt-1">Keperluan pengajuan keringanan biaya sekolah atau berobat.</p>
                        </div>
                        <a href="#" class="mt-5 inline-flex items-center text-sm font-semibold text-emerald-600 hover:text-emerald-800">
                            Ajukan Pembuatan &rarr;
                        </a>
                    </div>

                    <!-- Kartu Jenis Surat 3 -->
                    <div class="border border-gray-200 hover:border-blue-500 hover:shadow-md rounded-xl p-5 transition flex flex-col justify-between group">
                        <div>
                            <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center font-bold mb-3 group-hover:bg-purple-600 group-hover:text-white transition">
                                📇
                            </div>
                            <h4 class="font-bold text-gray-800 group-hover:text-purple-600">Surat Pengantar SKCK</h4>
                            <p class="text-xs text-gray-500 mt-1">Keperluan administrasi pengurusan SKCK ke pihak kepolisian.</p>
                        </div>
                        <a href="#" class="mt-5 inline-flex items-center text-sm font-semibold text-purple-600 hover:text-purple-800">
                            Ajukan Pembuatan &rarr;
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>