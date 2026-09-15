<nav class="fixed left-0 right-0 top-0 z-50 border-b border-gray-100 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6">

        {{-- LOGO --}}
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('image/aik.png') }}" alt="Logo Desa Air Ruai" class="h-10 w-auto">
            <span class="text-xl font-extrabold tracking-wide uppercase text-gray-800">
                Kantor Desa <span class="text-emerald-600">Air Ruai</span>
            </span>
        </a>

        {{-- MENU NAVIGATION --}}
        <div class="hidden items-center gap-6 md:flex text-xs font-bold uppercase tracking-wider">
            <a href="#beranda" class="text-emerald-600 transition hover:text-emerald-700">
                Beranda
            </a>
            
            {{-- DROPDOWN TENTANG DESA --}}
            <div class="relative group cursor-pointer text-gray-600 hover:text-emerald-600 flex items-center gap-1 py-7 transition">
                <span>Tentang Desa</span>
                <svg class="w-3 h-3 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>

            {{-- DROPDOWN KEUNGGULAN DESA --}}
            <div class="relative group cursor-pointer text-gray-600 hover:text-emerald-600 flex items-center gap-1 py-7 transition">
                <span>Keunggulan Desa</span>
                <svg class="w-3 h-3 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>

            <a href="#berita" class="text-gray-600 hover:text-emerald-600 transition">
                Berita
            </a>
            <a href="#event" class="text-gray-600 hover:text-emerald-600 transition">
                Event
            </a>
            <a href="#artikel" class="text-gray-600 hover:text-emerald-600 transition">
                Artikel
            </a>
        </div>

        {{-- AUTH & CTA BUTTONS --}}
        <div class="flex items-center gap-3">
            <a href="{{ route('login') }}" class="rounded-lg border border-emerald-600/30 px-4 py-2 text-xs font-bold uppercase tracking-wider text-emerald-600 transition hover:bg-emerald-50">
                Masuk
            </a>
            <a href="{{ route('register') }}" class="rounded-lg bg-emerald-600 px-4 py-2 text-xs font-bold uppercase tracking-wider text-white transition hover:bg-emerald-700 shadow-md shadow-emerald-600/20">
                Daftar
            </a>
            <a href="#kontak" class="hidden rounded-lg bg-gray-100 border border-gray-200 px-4 py-2 text-xs font-bold uppercase tracking-wider text-gray-700 transition hover:bg-gray-200 sm:inline-block">
                Kontak
            </a>
        </div>

    </div>
</nav>