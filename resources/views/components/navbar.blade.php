
<nav class="fixed left-0 right-0 top-0 z-50 border-b border-stone-800 bg-stone-950/90 backdrop-blur-md shadow-lg">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between pl-6 pr-6">

        {{-- LOGO --}}
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('image/aik.png') }}" alt="Logo Desa Air Ruai" class="h-10 w-auto">
            <span class="text-xl font-extrabold tracking-wide uppercase text-white">
                Kantor Desa <span class="text-amber-400">Air Ruai</span>
            </span>
        </a>

        {{-- MENU NAVIGATION --}}
        <div class="hidden items-center gap-6 md:flex text-xs font-bold uppercase tracking-wider">
            <a href="#beranda" class="text-amber-400 transition hover:text-amber-300">
                Beranda
            </a>
            
            {{-- DROPDOWN TENTANG DESA --}}
            <div class="relative group cursor-pointer text-gray-300 hover:text-amber-400 flex items-center gap-1 py-7 transition">
                <span>Tentang Desa</span>
                <svg class="w-3 h-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>

            {{-- DROPDOWN KEUNGGULAN DESA --}}
            <div class="relative group cursor-pointer text-gray-300 hover:text-amber-400 flex items-center gap-1 py-7 transition">
                <span>Keunggulan Desa</span>
                <svg class="w-3 h-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>

            <a href="#berita" class="text-gray-300 hover:text-amber-400 transition">
                Berita
            </a>
            <a href="#event" class="text-gray-300 hover:text-amber-400 transition">
                Event
            </a>
            <a href="#artikel" class="text-gray-300 hover:text-amber-400 transition">
                Artikel
            </a>
        </div>

        {{-- AUTH & CTA BUTTONS --}}
        <div class="flex items-center gap-3">
            <a href="{{ route('login') }}" class="rounded-lg border border-amber-400/40 px-4 py-2 text-xs font-bold uppercase tracking-wider text-amber-400 transition hover:bg-amber-400 hover:text-black">
                Masuk
            </a>
            <a href="{{ route('register') }}" class="rounded-lg bg-amber-400 px-4 py-2 text-xs font-bold uppercase tracking-wider text-black transition hover:bg-amber-500 shadow-md shadow-amber-400/10">
                Daftar
            </a>
            <a href="#kontak" class="hidden rounded-lg bg-stone-800 border border-stone-700 px-4 py-2 text-xs font-bold uppercase tracking-wider text-white transition hover:bg-stone-700 sm:inline-block">
                Kontak
            </a>
        </div>

    </div>
</nav>