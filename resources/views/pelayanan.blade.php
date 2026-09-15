<x-app-layout>

    {{-- HERO SECTION / SLIDER --}}
    <section id="beranda" class="relative flex min-h-screen items-center justify-center overflow-hidden pt-20">
        {{-- Background Image Grayscale dengan Overlay Gelap --}}
        <div class="absolute inset-0">
            <img src="{{ asset('image/ruai.png') }}" alt="Sejarah Desa Ruai" class="h-full w-full object-cover grayscale contrast-125">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/75 to-black/50"></div>
        </div>

        {{-- Slider Navigation Arrows --}}
        <button class="absolute left-6 top-1/2 z-20 -translate-y-1/2 rounded-full border border-white/20 bg-black/40 p-3 text-white backdrop-blur-md transition hover:bg-black/80">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button class="absolute right-6 top-1/2 z-20 -translate-y-1/2 rounded-full border border-white/20 bg-black/40 p-3 text-white backdrop-blur-md transition hover:bg-black/80">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>

        {{-- Hero Content (Tombol Play Dihapus & Info Diperbanyak) --}}
        <div class="relative z-10 max-w-5xl px-6 text-center">
            <p class="text-xs font-bold uppercase tracking-widest text-amber-400 md:text-sm">
                #WARISAN & LELUHUR DESA RUAI
            </p>
            <h1 class="mt-3 text-4xl font-extrabold uppercase leading-tight tracking-tight text-white md:text-5xl">
                SEJARAH & REKAM JEJAK <br>
                <span class="text-amber-400">DESA RUAI</span>
            </h1>
            
            <p class="mx-auto mt-6 max-w-3xl text-base leading-relaxed text-gray-300 md:text-lg">
                Berdiri sejak puluhan tahun silam, Desa Ruai tumbuh menjadi simbol keharmonisan tradisi lokal dan perkembangan modern. Menjaga semangat gotong royong serta kelestarian budaya demi mewujudkan kesejahteraan seluruh masyarakat desa.
            </p>

            {{-- Ringkasan Statistik Singkat --}}
            <div class="mt-10 grid grid-cols-2 gap-4 rounded-xl border border-white/10 bg-black/50 p-4 backdrop-blur-md md:grid-cols-4">
                <div class="border-r border-stone-800 last:border-r-0">
                    <p class="text-2xl font-black text-amber-400">1.200+</p>
                    <p class="text-xs text-gray-400">Kepala Keluarga</p>
                </div>
                <div class="border-r border-stone-800 last:border-r-0">
                    <p class="text-2xl font-black text-amber-400">4</p>
                    <p class="text-xs text-gray-400">Dusun Wilayah</p>
                </div>
                <div class="border-r border-stone-800 last:border-r-0">
                    <p class="text-2xl font-black text-amber-400">24 Jam</p>
                    <p class="text-xs text-gray-400">Akses Informasi</p>
                </div>
                <div>
                    <p class="text-2xl font-black text-amber-400">100%</p>
                    <p class="text-xs text-gray-400">Layanan Digital</p>
                </div>
            </div>
        </div>

        {{-- Progress Bar --}}
        <div class="absolute bottom-0 left-0 right-0 z-20 h-1.5 bg-white/20">
            <div class="h-full w-1/4 bg-amber-400"></div>
        </div>
    </section>

    {{-- SECTION: TENTANG DESA RUAI & HISTORIS --}}
    <section id="tentang" class="bg-stone-950 py-24 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <p class="text-xs font-bold uppercase tracking-widest text-amber-400">
                    Profil & Sejarah
                </p>
                <h2 class="mt-3 text-3xl font-extrabold uppercase tracking-tight text-white sm:text-5xl">
                    Mengenal Lebih Dekat Desa Ruai
                </h2>
                <div class="mx-auto mt-4 h-1 w-20 bg-amber-400"></div>
                <p class="mt-6 text-base leading-relaxed text-gray-400">
                    Nama Desa Ruai berakar dari nilai-nilai kearifan lokal yang menjunjung tinggi kebersamaan dan keterbukaan. Kini, Desa Ruai siap melangkah maju melalui digitalisasi pelayanan administrasi desa demi memberikan kenyamanan penuh bagi warga.
                </p>
            </div>
        </div>
    </section>

    {{-- SECTION: KEUNGGULAN / LAYANAN DESA --}}
    <section id="keunggulan" class="border-y border-stone-800 bg-stone-900 py-24 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="text-center">
                <p class="text-xs font-bold uppercase tracking-widest text-amber-400">
                    Fasilitas Publik
                </p>
                <h2 class="mt-2 text-3xl font-extrabold uppercase text-white sm:text-4xl">
                    Pelayanan Utama Desa Ruai
                </h2>
            </div>

            <div class="mt-16 grid gap-8 sm:grid-cols-2 md:grid-cols-3">
                {{-- CARD 1 --}}
                <div class="flex flex-col items-center rounded-xl border border-stone-800 bg-stone-950/60 p-8 text-center transition hover:border-amber-400/50">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full border border-amber-400/30 bg-amber-400/10 text-amber-400">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                    </div>
                    <h3 class="mt-6 text-lg font-bold uppercase tracking-wide text-white">Informasi & Berita Terkini</h3>
                    <p class="mt-2 text-sm text-gray-400">Dapatkan pengumuman resmi dan update kegiatan warga Desa Ruai secara tepat waktu.</p>
                </div>

                {{-- CARD 2 --}}
                <div class="flex flex-col items-center rounded-xl border border-stone-800 bg-stone-950/60 p-8 text-center transition hover:border-amber-400/50">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full border border-amber-400/30 bg-amber-400/10 text-amber-400">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <h3 class="mt-6 text-lg font-bold uppercase tracking-wide text-white">Pelayanan Administrasi</h3>
                    <p class="mt-2 text-sm text-gray-400">Pengurusan surat keterangan, kependudukan, dan berkas kantor desa secara terpadu.</p>
                </div>

                {{-- CARD 3 --}}
                <div class="flex flex-col items-center rounded-xl border border-stone-800 bg-stone-950/60 p-8 text-center transition hover:border-amber-400/50">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full border border-amber-400/30 bg-amber-400/10 text-amber-400">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="mt-6 text-lg font-bold uppercase tracking-wide text-white">Portal Mandiri Warga</h3>
                    <p class="mt-2 text-sm text-gray-400">Kemudahan mengajukan permohonan dan memantau status berkas langsung melalui akun warga.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION: BERITA & ARTIKEL --}}
    <section id="berita" class="bg-stone-950 py-24 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-col items-start justify-between gap-4 md:flex-row md:items-end">
                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-amber-400">
                        Kabar Desa
                    </p>
                    <h2 class="mt-2 text-3xl font-extrabold uppercase tracking-tight text-white sm:text-4xl">
                        Kabar & Kegiatan Terbaru
                    </h2>
                </div>
                <a href="#" class="text-sm font-bold uppercase tracking-wider text-amber-400 hover:underline">
                    Lihat Semua Kabar &rarr;
                </a>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <article class="overflow-hidden rounded-xl border border-stone-800 bg-stone-900 transition hover:border-amber-400/40">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('image/ruai.png') }}" alt="Kegiatan Desa Ruai" class="h-full w-full object-cover grayscale transition duration-300 hover:scale-105 hover:grayscale-0">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase text-amber-400">Kegiatan Desa</span>
                        <h3 class="mt-2 text-lg font-bold text-white">Musyawarah Pembangunan Desa Ruai</h3>
                        <p class="mt-2 text-sm text-gray-400">Diskusi terbuka antar warga dan perangkat desa mengenai peningkatan fasilitas umum...</p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-xl border border-stone-800 bg-stone-900 transition hover:border-amber-400/40">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('image/ruai.png') }}" alt="Pengumuman" class="h-full w-full object-cover grayscale transition duration-300 hover:scale-105 hover:grayscale-0">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase text-amber-400">Pengumuman</span>
                        <h3 class="mt-2 text-lg font-bold text-white">Jadwal Operasional Balai Desa Ruai</h3>
                        <p class="mt-2 text-sm text-gray-400">Penyesuaian jam kerja pelayanan administrasi kependudukan untuk bulan ini...</p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-xl border border-stone-800 bg-stone-900 transition hover:border-amber-400/40">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('image/ruai.png') }}" alt="UMKM" class="h-full w-full object-cover grayscale transition duration-300 hover:scale-105 hover:grayscale-0">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase text-amber-400">Ekonomi Kreatif</span>
                        <h3 class="mt-2 text-lg font-bold text-white">Program Pembinaan UMKM Desa Ruai</h3>
                        <p class="mt-2 text-sm text-gray-400">Dukungan promosi dan pemasaran hasil karya warga lokal Desa Ruai...</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- SECTION: CTA & KONTAK --}}
    <section id="kontak" class="bg-stone-900 py-20 text-white">
        <div class="mx-auto max-w-5xl px-6 text-center">
            <h2 class="text-3xl font-extrabold uppercase text-white sm:text-4xl">
                Butuh Bantuan Administrasi Desa Ruai?
            </h2>
            <p class="mt-3 text-gray-400">
                Silakan hubungi kontak resmi perangkat desa atau kunjungi Balai Desa Ruai secara langsung.
            </p>

            {{-- Frame Border Putih Bergaya Poster --}}
            <div class="mt-10 rounded-2xl border-2 border-white/80 bg-stone-950/80 p-8 shadow-2xl backdrop-blur-sm">
                <div class="flex flex-col items-center justify-around gap-6 md:flex-row">
                    <div class="text-center md:text-left">
                        <p class="text-xs font-semibold uppercase tracking-widest text-gray-400">Alamat Kantor</p>
                        <p class="text-lg font-bold text-amber-400">Jl. Utama Desa Ruai No. 01</p>
                    </div>
                    <div class="hidden h-10 w-px bg-stone-800 md:block"></div>
                    <div class="text-center md:text-left">
                        <p class="text-xs font-semibold uppercase tracking-widest text-gray-400">Layanan WhatsApp</p>
                        <p class="text-lg font-bold text-amber-400">0887-0671-4648</p>
                    </div>
                </div>

                <div class="mt-8 flex justify-center gap-4 border-t border-stone-800 pt-6">
                    <a href="{{ route('register') }}" class="rounded-lg bg-amber-400 px-6 py-3 text-sm font-extrabold uppercase text-black transition hover:bg-amber-500">
                        Daftar Akun Warga
                    </a>
                    <a href="{{ route('login') }}" class="rounded-lg border border-white/40 px-6 py-3 text-sm font-extrabold uppercase text-white transition hover:bg-white/10">
                        Masuk Akun
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <x-footer />

</x-app-layout>