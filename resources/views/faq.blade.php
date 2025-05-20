@extends('layouts.app')

@section('content')
<!-- F.A.Q -->
<section class="bg-white min-h-screen py-20 px-4 sm:px-6 md:px-10 lg:px-16 flex items-center justify-center">
    <!-- <section class="bg-white h-screen py-24 px-4 sm:px-6 lg:px-8 flex items-center justify-center"> -->
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-28  grid grid-cols-1 md:grid-cols-2 gap-12"
        x-data="{ active: null }">
        <!-- FAQ Kolom 1 -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-6">
                Untuk Perusahaan / Pengusaha
            </h3>
            <div class="space-y-4">
                <!-- Item 1 -->
                <div class="pb-2">
                    <button @click="active === 'faq1' ? active = null : active = 'faq1'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq1' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Siapakah kami?</span>
                    </button>
                    <div x-show="active === 'faq1'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Kami adalah perusahaan yang berfokus pada solusi penyedia talent / tenaga kerja.
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="pb-2">
                    <button @click="active === 'faq2' ? active = null : active = 'faq2'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq2' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Siapakah yang membutuhkan kami?</span>
                    </button>
                    <div x-show="active === 'faq2'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Semua perusahaan yang membutuhkan talent ( tenaga kerja ), baik sebagai karyawan fulltime,
                        freelance,
                        secara onsite ( dikantor anda ) atau secara remote ( from home / tempat lainya )
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="pb-2">
                    <button @click="active === 'faq3' ? active = null : active = 'faq3'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq3' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Skala perusahaan yang cocok untuk menggunakan
                            Upscale?</span>
                    </button>
                    <div x-show="active === 'faq3'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Service kami cocok untuk segala level perusahaan, baik UKM, Startup maupun corporate
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="pb-2">
                    <button @click="active === 'faq4' ? active = null : active = 'faq4'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq4' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Bagaimana request talent / tenaga kerja?</span>
                    </button>
                    <div x-show="active === 'faq4'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Silahkan hubungi kami ke nomor 087-888-666-531, baik whatsapp atau telephone
                    </div>
                </div>


                <!-- Item 4 -->
                <div class="pb-2">
                    <button @click="active === 'faq5' ? active = null : active = 'faq5'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq5' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Apakah kelebihan / keunikan Upscale dibanding
                            perusahaan
                            lain</span>
                    </button>
                    <div x-show="active === 'faq5'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Perusahaan kami memiliki ecosystem yang berkembang pesat, dengan kerjasama dengan berbagai pihak
                        kami
                        memiliki total database talent pool lebih dari puluhan ribu talent.
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Kolom 2 -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-6"> Untuk Talent</h3>
            <div class="space-y-4">
                <!-- Item 6 -->
                <div class="pb-2">
                    <button @click="active === 'faq6' ? active = null : active = 'faq6'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq6' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Bagaimana cara mendaftar Upscale?</span>
                    </button>
                    <div x-show="active === 'faq6'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Bisa klik tombol login / register di kanan atas website ini , atau klik ke halaman "for talent"
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="pb-2">
                    <button @click="active === 'faq7' ? active = null : active = 'faq7'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq7' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Apa manfaat bergabung di Upscale?</span>
                    </button>
                    <div x-show="active === 'faq7'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Selain mendapatkan tawaran pekerjaan, anda dapat memperluas network kamu agar banyak peluang
                        yang
                        mungkin bisa anda dapatkan.
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="pb-2">
                    <button @click="active === 'faq8' ? active = null : active = 'faq8'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq8' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Bagaimana status pekerja bagi talent yang
                            mendapatkan
                            pekerjaan</span>
                    </button>
                    <div x-show="active === 'faq8'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Status pekerja ada beberapa macam, ada yang sebagai karyawan upscale, ada yang berstatus sebagai
                        pegawai
                        internal client kami. Tergantung kesepakatan dari client dan talent itu sendiri.
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="pb-2">
                    <button @click="active === 'faq9' ? active = null : active = 'faq9'"
                        class="flex items-start gap-3 w-full text-left">
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                            :class="{ 'rotate-90': active === 'faq9' }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-gray-700">Apakah bisa mendapatkan side project dari
                            Upscale?</span>
                    </button>
                    <div x-show="active === 'faq9'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mt-2 text-sm text-gray-600 pl-9">
                        Ya, tentu saja. Meskipun anda saat ini sudah bekerja, namun kami bisa membantu anda mendapatkan
                        pekerjaan sampingan. Namun pastikan tidak mengganggu pekerjaan ya.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection