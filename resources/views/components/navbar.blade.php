<nav class="fixed left-0 right-0 top-0 z-50 border-b border-white/10 bg-white/90 backdrop-blur-xl">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6">

        {{-- LOGO --}}
        <a href="/" class="flex items-center gap-3">

            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#20242B] text-white">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    class="h-5 w-5"
                >
                    <path d="M3 21h18" />
                    <path d="M5 21V9l7-5 7 5v12" />
                    <path d="M9 21v-7h6v7" />
                    <path d="M9 10h.01" />
                    <path d="M15 10h.01" />
                </svg>
            </div>

            <div>
                <h1 class="text-sm font-bold tracking-tight text-[#20242B]">
                    Pelayanan Desa
                </h1>

                <p class="text-[11px] text-[#77736D]">
                    Sistem Administrasi
                </p>
            </div>

        </a>


        {{-- MENU --}}
        <div class="hidden items-center gap-8 md:flex">

            <a
                href="#beranda"
                class="text-sm font-medium text-[#55514B] transition hover:text-[#A34F32]"
            >
                Beranda
            </a>

            <a
                href="#layanan"
                class="text-sm font-medium text-[#55514B] transition hover:text-[#A34F32]"
            >
                Layanan
            </a>

            <a
                href="#cara-kerja"
                class="text-sm font-medium text-[#55514B] transition hover:text-[#A34F32]"
            >
                Cara Kerja
            </a>

            <a
                href="#tentang"
                class="text-sm font-medium text-[#55514B] transition hover:text-[#A34F32]"
            >
                Tentang
            </a>

        </div>


        {{-- AUTH --}}
        <div class="flex items-center gap-2">

            <a
                href="{{ route('login') }}"
                class="rounded-lg px-4 py-2.5 text-sm font-semibold text-[#3D3A36] transition hover:bg-[#F3F0EA]"
            >
                Masuk
            </a>

            <a
                href="{{ route('register') }}"
                class="rounded-lg bg-[#A34F32] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#8D422A]"
            >
                Daftar
            </a>

        </div>

    </div>
</nav>