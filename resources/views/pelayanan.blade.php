<x-app-layout>

  


    <section
        id="beranda"
        class="relative flex min-h-screen items-center justify-center overflow-hidden"
    >

        {{-- IMAGE --}}
        <div class="absolute inset-0">

            <img
                src="{{ asset('image/desa.png') }}"
                alt="Pelayanan administrasi desa"
                class="h-full w-full object-cover"
            >

            {{-- DARK OVERLAY --}}
            <div class="absolute inset-0 bg-[#16181C]/65"></div>

        </div>


        {{-- HERO CONTENT --}}
        <div class="relative z-10 mx-auto max-w-4xl px-6 pt-20 text-center">

            {{-- BADGE --}}
            <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 backdrop-blur-md">

                <span class="flex h-5 w-5 items-center justify-center text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        class="h-4 w-4"
                    >
                        <path d="M4 21h16" />
                        <path d="M6 21V9l6-4 6 4v12" />
                        <path d="M9 21v-6h6v6" />
                    </svg>

                </span>

                <span class="text-xs font-semibold uppercase tracking-[0.15em] text-white/90">
                    Pelayanan Administrasi Desa
                </span>

            </div>


            {{-- TITLE --}}
            <h1 class="text-3xl font-extrabold leading-[1.08] tracking-[-0.04em] text-white sm:text-2xl md:text-6xl lg:text-7xl">

                Mengurus Administrasi Desa

                <span class="block text-[#D88A68]">
                    Lebih Mudah & Teratur.
                </span>

            </h1>


            {{-- DESCRIPTION --}}
            <p class="mx-auto mt-7 max-w-2xl text-base leading-8 text-white/75 sm:text-lg">

                Ajukan layanan administrasi dari rumah,
                lengkapi persyaratan, dan pantau proses pengajuan
                tanpa harus datang berkali-kali ke kantor desa.

            </p>


            {{-- BUTTON --}}
            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ route('register') }}"
                    class="inline-flex items-center gap-2 rounded-lg bg-[#B85C3B] px-6 py-3.5 text-sm font-bold text-white shadow-xl transition hover:-translate-y-0.5 hover:bg-[#A34F32]"
                >

                    Mulai Mengajukan

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        class="h-4 w-4"
                    >
                        <path d="M5 12h14" />
                        <path d="m13 6 6 6-6 6" />
                    </svg>

                </a>


                <a
                    href="{{ route('login') }}"
                    class="inline-flex items-center rounded-lg border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-bold text-white backdrop-blur-md transition hover:bg-white hover:text-[#20242B]"
                >
                    Sudah Punya Akun? Masuk
                </a>

            </div>


            {{-- TRUST --}}
            <div class="mt-10 flex flex-wrap justify-center gap-x-8 gap-y-3 text-sm text-white/65">

                <div class="flex items-center gap-2">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        class="h-4 w-4 text-white"
                    >
                        <path d="m5 12 4 4L19 6" />
                    </svg>

                    Pengajuan Online

                </div>


                <div class="flex items-center gap-2">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        class="h-4 w-4 text-white"
                    >
                        <path d="M12 3v18" />
                        <path d="M3 12h18" />
                    </svg>

                    Status Pengajuan

                </div>


                <div class="flex items-center gap-2">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        class="h-4 w-4 text-white"
                    >
                        <path d="M4 4h16v16H4z" />
                        <path d="M8 8h8" />
                        <path d="M8 12h8" />
                        <path d="M8 16h5" />
                    </svg>

                    Arsip Tertata

                </div>

            </div>

        </div>

    </section>


    <section class="bg-[#F7F5F0]">

        <div class="mx-auto max-w-7xl px-6 py-24">

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#A34F32]">
                    Pelayanan Publik
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight tracking-tight text-[#20242B] sm:text-4xl">
                    Satu tempat untuk mengurus kebutuhan administrasi desa.
                </h2>

                <p class="mt-6 text-base leading-8 text-[#68645D]">
                    Warga dapat mengetahui layanan yang tersedia,
                    melihat persyaratan, mengirim pengajuan,
                    dan memantau proses administrasi secara online.
                </p>

            </div>

        </div>

    </section>


    

    <section
        id="layanan"
        class="border-y border-[#E2DED5] bg-white"
    >

        <div class="mx-auto max-w-7xl px-6 py-24">

            <div class="max-w-2xl">

                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#A34F32]">
                    Layanan
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-[#20242B] sm:text-4xl">
                    Layanan administrasi yang tersedia
                </h2>

                <p class="mt-4 leading-7 text-[#68645D]">
                    Pilih kebutuhan administrasi sesuai keperluan
                    dan lihat persyaratan sebelum mengajukan.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-3">


                {{-- CARD 1 --}}
                <div class="group rounded-2xl border border-[#E2DED5] bg-[#F9F8F5] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#C9A08E] hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#20242B] text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <path d="M6 3h9l3 3v15H6z" />
                            <path d="M14 3v4h4" />
                            <path d="M9 12h6" />
                            <path d="M9 16h6" />
                        </svg>

                    </div>

                    <h3 class="mt-6 text-lg font-bold text-[#20242B]">
                        Surat Keterangan
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#77736D]">
                        Pengajuan berbagai surat keterangan
                        sesuai kebutuhan administrasi warga.
                    </p>

                </div>


                {{-- CARD 2 --}}
                <div class="group rounded-2xl border border-[#E2DED5] bg-[#F9F8F5] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#C9A08E] hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#20242B] text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <circle cx="12" cy="8" r="3" />
                            <path d="M5 21a7 7 0 0 1 14 0" />
                        </svg>

                    </div>

                    <h3 class="mt-6 text-lg font-bold text-[#20242B]">
                        Administrasi Warga
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#77736D]">
                        Kelola kebutuhan administrasi dan data
                        warga secara lebih terstruktur.
                    </p>

                </div>


                {{-- CARD 3 --}}
                <div class="group rounded-2xl border border-[#E2DED5] bg-[#F9F8F5] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#C9A08E] hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#20242B] text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <path d="M4 5h16v14H4z" />
                            <path d="M8 9h8" />
                            <path d="M8 13h8" />
                            <path d="M8 17h5" />
                        </svg>

                    </div>

                    <h3 class="mt-6 text-lg font-bold text-[#20242B]">
                        Layanan Umum
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#77736D]">
                        Pengajuan layanan administrasi lain
                        yang tersedia di kantor desa.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section
        id="cara-kerja"
        class="bg-[#F7F5F0]"
    >

        <div class="mx-auto max-w-7xl px-6 py-24">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#A34F32]">
                    Cara Kerja
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-[#20242B] sm:text-4xl">
                    Proses yang lebih sederhana
                </h2>

            </div>


            <div class="mt-14 grid gap-10 md:grid-cols-4">

                <div class="text-center">

                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#20242B] text-sm font-bold text-white">
                        01
                    </div>

                    <h3 class="mt-5 font-bold text-[#20242B]">
                        Daftar
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#77736D]">
                        Buat akun sebagai warga.
                    </p>

                </div>


                <div class="text-center">

                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#20242B] text-sm font-bold text-white">
                        02
                    </div>

                    <h3 class="mt-5 font-bold text-[#20242B]">
                        Pilih Layanan
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#77736D]">
                        Pilih layanan administrasi.
                    </p>

                </div>


                <div class="text-center">

                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#20242B] text-sm font-bold text-white">
                        03
                    </div>

                    <h3 class="mt-5 font-bold text-[#20242B]">
                        Kirim Pengajuan
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#77736D]">
                        Isi formulir dan kirim persyaratan.
                    </p>

                </div>


                <div class="text-center">

                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#20242B] text-sm font-bold text-white">
                        04
                    </div>

                    <h3 class="mt-5 font-bold text-[#20242B]">
                        Pantau Status
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#77736D]">
                        Lihat proses sampai selesai.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section
        id="tentang"
        class="bg-[#B85C3B]"
    >

        <div class="mx-auto max-w-7xl px-6 py-20">

            <div class="flex flex-col items-start justify-between gap-8 md:flex-row md:items-center">

                <div class="max-w-2xl">

                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/70">
                        Mulai Sekarang
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Urus administrasi tanpa proses yang berbelit.
                    </h2>

                    <p class="mt-4 leading-7 text-white/75">
                        Buat akun untuk mulai mengajukan layanan
                        administrasi desa secara online.
                    </p>

                </div>


                <div class="flex flex-wrap gap-3">

                    <a
                        href="{{ route('register') }}"
                        class="rounded-lg bg-white px-6 py-3.5 text-sm font-bold text-[#20242B] transition hover:bg-[#F5F1EA]"
                    >
                        Daftar Sekarang
                    </a>

                    <a
                        href="{{ route('login') }}"
                        class="rounded-lg border border-white/40 px-6 py-3.5 text-sm font-bold text-white transition hover:bg-white/10"
                    >
                        Masuk
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- FOOTER --}}
    <x-footer />

</x-app-layout>