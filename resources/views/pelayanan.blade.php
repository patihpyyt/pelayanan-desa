<x-app-layout>

    {{-- HERO SECTION / SLIDER --}}
    <section id="beranda" class="relative flex min-h-[90vh] items-center justify-center overflow-hidden pt-20">
        {{-- Background Image dengan Gradasi Memudar ke Putih (Anti-Pahatan) --}}
        <div class="absolute inset-0">
            <img src="{{ asset('image/ruai.png') }}" alt="Sejarah Desa Ruai" class="h-full w-full object-cover">
            {{-- Overlay Gelap di Atas & Memudar Lembut ke Putih di Bawah --}}
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/80 via-slate-900/60 to-slate-50"></div>
        </div>

        {{-- Navigasi Panah Slider --}}
        <button class="absolute left-6 top-1/2 z-20 -translate-y-1/2 rounded-full border border-white/20 bg-black/30 p-3 text-white backdrop-blur-md transition hover:bg-emerald-600">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button class="absolute right-6 top-1/2 z-20 -translate-y-1/2 rounded-full border border-white/20 bg-black/30 p-3 text-white backdrop-blur-md transition hover:bg-emerald-600">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>

        {{-- Hero Content --}}
<div class="relative z-10 max-w-5xl px-6 text-center pb-12">
    <p class="text-xs font-bold uppercase tracking-widest text-emerald-400 md:text-sm">
        PORTAL PELAYANAN MANDIRI
    </p>
    <h1 class="mt-3 text-4xl font-extrabold uppercase leading-tight tracking-tight text-white md:text-5xl">
        LAYANAN DIGITAL APLIKASI <br>
        <span class="text-emerald-400">DESA AIR RUAI</span>
    </h1>
    
    <p class="mx-auto mt-6 max-w-3xl text-base leading-relaxed text-gray-200 md:text-lg">
        Mempermudah warga dalam pengajuan surat administrasi secara online dan membantu petugas balai desa memproses permohonan dengan lebih cepat, transparan, serta terintegrasi.
    </p>

    {{-- Ringkasan Statistik Singkat --}}
    <div class="mt-10 grid grid-cols-2 gap-4 rounded-2xl border border-white/20 bg-white/10 p-6 backdrop-blur-md shadow-xl md:grid-cols-4">
        <div class="border-r border-white/10 last:border-r-0">
            <p class="text-3xl font-black text-emerald-400">Cepat</p>
            <p class="text-xs font-medium text-gray-200">Pengajuan Surat</p>
        </div>
        <div class="border-r border-white/10 last:border-r-0">
            <p class="text-3xl font-black text-emerald-400">24/7</p>
            <p class="text-xs font-medium text-gray-200">Akses Mandiri</p>
        </div>
        <div class="border-r border-white/10 last:border-r-0">
            <p class="text-3xl font-black text-emerald-400">Mudah</p>
            <p class="text-xs font-medium text-gray-200">Pantau Berkas</p>
        </div>
        <div>
            <p class="text-3xl font-black text-emerald-400">Efisien</p>
            <p class="text-xs font-medium text-gray-200">Kerja Petugas</p>
        </div>
    </div>
</div>
    </section>

    {{-- SECTION: TENTANG DESA RUAI & HISTORIS --}}
    <section id="tentang" class="bg-slate-50 py-20 text-gray-800">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <p class="text-xs font-bold uppercase tracking-widest text-emerald-600">
                    Profil & Sejarah
                </p>
                <h2 class="mt-2 text-3xl font-extrabold uppercase tracking-tight text-gray-900 sm:text-4xl">
                    Mengenal Lebih Dekat Desa Ruai
                </h2>
                <div class="mx-auto mt-4 h-1 w-16 bg-emerald-600 rounded-full"></div>
                <p class="mt-6 text-base leading-relaxed text-gray-600">
                    Nama Desa Ruai berakar dari nilai-nilai kearifan lokal yang menjunjung tinggi kebersamaan dan keterbukaan. Kini, Desa Ruai siap melangkah maju melalui digitalisasi pelayanan administrasi desa demi memberikan kenyamanan penuh bagi warga.
                </p>
            </div>
        </div>
    </section>

    {{-- SECTION: KEUNGGULAN / LAYANAN DESA --}}
    <section id="keunggulan" class="bg-white py-20 text-gray-800">
        <div class="mx-auto max-w-7xl px-6">
            <div class="text-center">
                <p class="text-xs font-bold uppercase tracking-widest text-emerald-600">
                    Fasilitas Publik
                </p>
                <h2 class="mt-2 text-3xl font-extrabold uppercase text-gray-900 sm:text-4xl">
                    Pelayanan Utama Desa Ruai
                </h2>
            </div>

            <div class="mt-16 grid gap-8 sm:grid-cols-2 md:grid-cols-3">
                {{-- CARD 1 --}}
                <div class="flex flex-col items-center rounded-2xl border border-gray-100 bg-slate-50 p-8 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md hover:border-emerald-200">
                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                    </div>
                    <h3 class="mt-6 text-lg font-bold text-gray-900">Informasi & Berita Terkini</h3>
                    <p class="mt-2 text-sm text-gray-600">Dapatkan pengumuman resmi dan update kegiatan warga Desa Ruai secara tepat waktu.</p>
                </div>

                {{-- CARD 2 --}}
                <div class="flex flex-col items-center rounded-2xl border border-gray-100 bg-slate-50 p-8 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md hover:border-emerald-200">
                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <h3 class="mt-6 text-lg font-bold text-gray-900">Pelayanan Administrasi</h3>
                    <p class="mt-2 text-sm text-gray-600">Pengurusan surat keterangan, kependudukan, dan berkas kantor desa secara terpadu.</p>
                </div>

                {{-- CARD 3 --}}
                <div class="flex flex-col items-center rounded-2xl border border-gray-100 bg-slate-50 p-8 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md hover:border-emerald-200">
                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="mt-6 text-lg font-bold text-gray-900">Portal Mandiri Warga</h3>
                    <p class="mt-2 text-sm text-gray-600">Kemudahan mengajukan permohonan dan memantau status berkas langsung melalui akun warga.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION: BERITA & ARTIKEL --}}
    <section id="berita" class="bg-slate-50 py-20 text-gray-800">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-col items-start justify-between gap-4 md:flex-row md:items-end">
                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-emerald-600">
                        Kabar Desa
                    </p>
                    <h2 class="mt-2 text-3xl font-extrabold uppercase tracking-tight text-gray-900 sm:text-4xl">
                        Kabar & Kegiatan Terbaru
                    </h2>
                </div>
                <a href="#" class="text-sm font-bold uppercase tracking-wider text-emerald-600 hover:text-emerald-700">
                    Lihat Semua Kabar &rarr;
                </a>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <article class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition hover:shadow-md">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('image/ruai.png') }}" alt="Kegiatan Desa Ruai" class="h-full w-full object-cover transition duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase text-emerald-600">Kegiatan Desa</span>
                        <h3 class="mt-2 text-lg font-bold text-gray-900">Musyawarah Pembangunan Desa Ruai</h3>
                        <p class="mt-2 text-sm text-gray-600">Diskusi terbuka antar warga dan perangkat desa mengenai peningkatan fasilitas umum...</p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition hover:shadow-md">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('image/ruai.png') }}" alt="Pengumuman" class="h-full w-full object-cover transition duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase text-emerald-600">Pengumuman</span>
                        <h3 class="mt-2 text-lg font-bold text-gray-900">Jadwal Operasional Balai Desa Ruai</h3>
                        <p class="mt-2 text-sm text-gray-600">Penyesuaian jam kerja pelayanan administrasi kependudukan untuk bulan ini...</p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition hover:shadow-md">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('image/ruai.png') }}" alt="UMKM" class="h-full w-full object-cover transition duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase text-emerald-600">Ekonomi Kreatif</span>
                        <h3 class="mt-2 text-lg font-bold text-gray-900">Program Pembinaan UMKM Desa Ruai</h3>
                        <p class="mt-2 text-sm text-gray-600">Dukungan promosi dan pemasaran hasil karya warga lokal Desa Ruai...</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- SECTION: CTA & KONTAK --}}
    <section id="kontak" class="bg-white py-20 text-gray-800">
        <div class="mx-auto max-w-5xl px-6 text-center">
            <h2 class="text-3xl font-extrabold uppercase text-gray-900 sm:text-4xl">
                Butuh Bantuan Administrasi Desa Ruai?
            </h2>
            <p class="mt-3 text-gray-600">
                Silakan hubungi kontak resmi perangkat desa atau kunjungi Balai Desa Ruai secara langsung.
            </p>

            <div class="mt-10 rounded-2xl border border-emerald-100 bg-emerald-50/50 p-8 shadow-sm">
                <div class="flex flex-col items-center justify-around gap-6 md:flex-row">
                    <div class="text-center md:text-left">
                        <p class="text-xs font-semibold uppercase tracking-widest text-gray-500">Alamat Kantor</p>
                        <p class="text-lg font-bold text-emerald-800">Jl. Utama Desa Ruai No. 01</p>
                    </div>
                    <div class="hidden h-10 w-px bg-emerald-200 md:block"></div>
                    <div class="text-center md:text-left">
                        <p class="text-xs font-semibold uppercase tracking-widest text-gray-500">Layanan WhatsApp</p>
                        <p class="text-lg font-bold text-emerald-800">0887-0671-4648</p>
                    </div>
                </div>

                <div class="mt-8 flex justify-center gap-4 border-t border-emerald-100 pt-6">
                    <a href="{{ route('register') }}" class="rounded-lg bg-emerald-600 px-6 py-3 text-sm font-extrabold uppercase text-white transition hover:bg-emerald-700 shadow-md shadow-emerald-600/20">
                        Daftar Akun Warga
                    </a>
                    <a href="{{ route('login') }}" class="rounded-lg border border-emerald-600/30 bg-white px-6 py-3 text-sm font-extrabold uppercase text-emerald-600 transition hover:bg-emerald-50">
                        Masuk Akun
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <x-footer />

</x-app-layout>