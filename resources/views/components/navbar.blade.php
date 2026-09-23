<nav class="fixed left-0 right-0 top-0 z-50 border-b border-white/10 bg-gradient-to-b from-black/80 via-black/40 to-transparent backdrop-blur-sm transition-all duration-300">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6">

        {{-- LOGO --}}
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('image/aik.png') }}" alt="Logo Desa Air Ruai" class="h-10 w-auto drop-shadow-md">
            <span class="text-xl font-extrabold tracking-wide uppercase text-white">
                Kantor Desa <span class="text-emerald-400">Air Ruai</span>
            </span>
        </a>

        {{-- MENU NAVIGATION --}}
        <div class="hidden items-center gap-6 md:flex text-xs font-bold uppercase tracking-wider">
          <a href="{{ url('/') }}#beranda" class="text-emerald-400 transition hover:text-emerald-300">
    Beranda
</a>
            
            {{-- DROPDOWN TENTANG DESA --}}
            <div class="relative group cursor-pointer text-gray-200 hover:text-emerald-400 flex items-center gap-1 py-7 transition">
                <span>Tentang Desa</span>
                <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>

            {{-- DROPDOWN KEUNGGULAN DESA --}}
            <div class="relative group cursor-pointer text-gray-200 hover:text-emerald-400 flex items-center gap-1 py-7 transition">
                <span>Keunggulan Desa</span>
                <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>

            <a href="#berita" class="text-gray-200 hover:text-emerald-400 transition">
                Berita
            </a>
            <a href="#event" class="text-gray-200 hover:text-emerald-400 transition">
                Event
            </a>
            <a href="#artikel" class="text-gray-200 hover:text-emerald-400 transition">
                Artikel
            </a>
        </div>

      {{-- AUTH & CTA BUTTONS --}}
<div class="flex items-center gap-3">

    @guest
        <a href="{{ route('login') }}" class="rounded-lg border border-emerald-400/40 px-4 py-2 text-xs font-bold uppercase tracking-wider text-emerald-400 transition hover:bg-emerald-500 hover:text-black">
            Masuk
        </a>
        <a href="{{ route('register') }}" class="rounded-lg bg-emerald-600 px-4 py-2 text-xs font-bold uppercase tracking-wider text-white transition hover:bg-emerald-500 shadow-md shadow-emerald-900/30">
            Daftar
        </a>
    @endguest

    @auth
        <a href="{{ route('dashboard') }}" class="rounded-lg border border-emerald-400/40 px-4 py-2 text-xs font-bold uppercase tracking-wider text-emerald-400 transition hover:bg-emerald-500 hover:text-black">
            Dashboard
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="rounded-lg bg-red-600 px-4 py-2 text-xs font-bold uppercase tracking-wider text-white transition hover:bg-red-500">
                Keluar
            </button>
        </form>
    @endauth

    <a href="#kontak" class="hidden rounded-lg bg-white/10 border border-white/20 backdrop-blur-md px-4 py-2 text-xs font-bold uppercase tracking-wider text-white transition hover:bg-white/20 sm:inline-block">
        Kontak
    </a>
</div>

    </div>
</nav>