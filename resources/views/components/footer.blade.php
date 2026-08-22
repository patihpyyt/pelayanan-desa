<footer class="border-t border-[#DED9D0] bg-[#20242B]">

    <div class="mx-auto max-w-7xl px-6 py-14">

        <div class="grid gap-10 md:grid-cols-3">

            {{-- BRAND --}}
            <div>

                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-[#20242B]">

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
                        </svg>

                    </div>

                    <div>

                        <h2 class="text-sm font-bold text-white">
                            Pelayanan Desa
                        </h2>

                        <p class="text-[11px] text-white/50">
                            Sistem Administrasi Desa
                        </p>

                    </div>

                </div>

                <p class="mt-5 max-w-sm text-sm leading-7 text-white/55">
                    Sistem pelayanan administrasi desa untuk membantu
                    masyarakat mengajukan dan memantau layanan secara
                    lebih mudah dan tertata.
                </p>

            </div>


            {{-- LAYANAN --}}
            <div>

                <h3 class="text-sm font-bold text-white">
                    Layanan
                </h3>

                <div class="mt-5 space-y-3 text-sm text-white/55">

                    <a href="#layanan" class="block transition hover:text-white">
                        Surat Keterangan
                    </a>

                    <a href="#layanan" class="block transition hover:text-white">
                        Administrasi Kependudukan
                    </a>

                    <a href="#layanan" class="block transition hover:text-white">
                        Layanan Umum
                    </a>

                </div>

            </div>


            {{-- NAVIGASI --}}
            <div>

                <h3 class="text-sm font-bold text-white">
                    Navigasi
                </h3>

                <div class="mt-5 space-y-3 text-sm text-white/55">

                    <a href="#beranda" class="block transition hover:text-white">
                        Beranda
                    </a>

                    <a href="#cara-kerja" class="block transition hover:text-white">
                        Cara Kerja
                    </a>

                    <a href="{{ route('login') }}" class="block transition hover:text-white">
                        Masuk
                    </a>

                    <a href="{{ route('register') }}" class="block transition hover:text-white">
                        Daftar
                    </a>

                </div>

            </div>

        </div>


        {{-- BOTTOM --}}
        <div class="mt-12 border-t border-white/10 pt-6">

            <p class="text-xs text-white/35">
                © {{ date('Y') }} Sistem Pelayanan Administrasi Desa.
                Seluruh hak cipta dilindungi.
            </p>

        </div>

    </div>

</footer>