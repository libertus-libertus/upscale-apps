@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="video-container relative min-h-[110vh]">
    <!-- Background Video -->
    <video autoplay loop muted playsinline poster="https://upscale.id/template/upscale/media/video-poster-3.jpg"
        class="absolute top-0 left-0 w-full h-full object-cover opacity-70">
        <source src="https://upscale.id/template/upscale/media/repeat-medium.mp4" type="video/mp4">
    </video>

    <!-- Optional Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-40 z-0"></div>

    <!-- Content Overlay -->
    <div class="content-overlay relative z-10 flex items-center pt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-28 py-40 lg:py-56">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Left Content -->
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-4xl mb-6 leading-tight text-white">
                        Hire Talent On-Demand<span class="text-cyan-600 font-semibold">.</span>
                    </h1>
                    <h2 class="text-xl md:text-2xl font-medium mb-6 text-gray-300">
                        Kami membantu meng-handle semua urusan "talent", agar anda dapat fokus pada pengembangan
                        bisnis<span class="text-cyan-600 font-semibold">.</span>
                    </h2>
                    <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-300 leading-relaxed">
                        Hire software developers, designers, product manager, finance, atau administratif team dari
                        eksklusif
                        network kami. Talent kami bisa bekerja secara remote maupun on-site.
                        <br><br>
                        Kontrak full-time maupun freelance yang disesuaikan dengan kebutuhan bisnis Anda.
                    </p>
                </div>

                <!-- Buttons -->
                <div class="lg:w-1/2 flex flex-col md:flex-row items-center md:justify-start space-y-4 md:space-y-0 md:space-x-4"
                    data-aos="fade-left" data-aos-duration="1000">
                    <a href="#"
                        class="bg-cyan-500 hover:bg-cyan-600 text-white font-medium rounded-full px-8 py-3 transition-colors duration-300 text-center w-full sm:w-auto">
                        Request Quotation
                    </a>
                    <a href="#"
                        class="border border-white hover:border-cyan-500 hover:text-cyan-500 text-white font-medium rounded-full px-8 py-3 transition-colors duration-300 text-center w-full sm:w-auto">
                        Join as Talent
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="relative z-10 bg-[#37517E] pt-44">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28">
        <!-- Grid with 4 Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 -mt-32 lg:-mt-60">

            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-7 text-center" data-aos="fade-up"
                data-aos-duration="900">
                <h3 class="text-xl font-semibold text-black mb-4 leading-6">Dedicated Team</h3>
                <p class="text-gray-400">Hire talent sebagai karyawan outsource.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-7 text-center" data-aos="fade-up"
                data-aos-duration="1200">
                <h3 class="text-xl font-semibold text-black mb-4 leading-6">Freelance Team</h3>
                <p class="text-sm text-gray-400">Hire talent freelance berbasis man-hour.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-7 text-center" data-aos="fade-up"
                data-aos-duration="1500">
                <h3 class="text-xl font-semibold text-black mb-4 leading-6">Head Hunter</h3>
                <p class="text-sm text-gray-400">Hire talent sebagai karyawan internal anda.</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-7 text-center" data-aos="fade-up"
                data-aos-duration="1700">
                <h3 class="text-xl font-semibold text-black mb-4 leading-6">Project-Based</h3>
                <p class="text-sm text-gray-400">Hire vendor / freelance berbasis project.</p>
            </div>

        </div>
    </div>
</section>

<!-- Partnership Section -->
<section class="bg-[#37517E] pb-16 pt-10 sm:pt-14 md:pt-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28">
        <div class="swiper partner-swiper">
            <div class="swiper-wrapper items-center">
                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('FE/partner/logo-1.png') }}" alt="Koinworks" class="max-h-14 object-contain" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('FE/partner/logo-2.png') }}" alt="Cakap" class="max-h-14 object-contain" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('FE/partner/logo-3.png') }}" alt="Gameloft" class="max-h-14 object-contain" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('FE/partner/logo-4.png') }}" alt="Krafthaus" class="max-h-14 object-contain" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('FE/partner/logo-5.png') }}" alt="Crowde" class="max-h-14 object-contain" />
                </div>
                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('FE/partner/logo-6.png') }}" alt="Wakuliner" class="max-h-14 object-contain" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business-focus -->
<section class="py-16 md:py-20 bg-white main-content">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28 text-center">
        <h2 class="text-2xl sm:text-3xl lg:text-3xl text-black mb-6 sm:mb-8 leading-snug" data-aos="fade-down"
            data-aos-duration="1000">
            Fokuskan perhatian pada strategi pengembangan bisnis Anda<span class="text-cyan-500">.</span>
        </h2>
        <p class="text-base sm:text-lg text-gray-500 mb-8 sm:mb-12 leading-relaxed" data-aos="fade-down"
            data-aos-duration="1000"> Kami akan meng-handle urusan
            perpajakan, legal dan management. Kami memiliki <br> framework kerja yang terbukti efektif untuk kolaborasi
            team dan juga terdapat tools <br> memonitor produktivitas secara real-time.</p>
        <div class="w-full flex justify-center" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('FE/images/devices.png') }}" alt="Dashboard Upscale" class="w-full max-w-4xl h-auto">
        </div>
    </div>
</section>

<!-- Hiring-duration -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center p-6 sm:p-8" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="text-lg sm:text-xl text-black font-semibold mb-3">Kecepatan Rekrutmen</h3>
                <p class="text-sm sm:text-base text-gray-500 leading-relaxed">Setelah kami mengetahui kebutuhan
                    bisnis Anda, talent akan ready dalam waktu 14 hari.</p>
            </div>
            <div class="text-center p-6 sm:p-8" data-aos="fade-down" data-aos-duration="1400">
                <h3 class="text-lg sm:text-xl text-black font-semibold mb-3">Kontrol Penuh</h3>
                <p class="text-sm sm:text-base text-gray-500 leading-relaxed">Anda akan mendapatkan report berkala
                    dan dapat login dalam sistem real-time monitoring kami.</p>
            </div>
            <div class="text-center p-6 sm:p-8" data-aos="fade-down" data-aos-duration="1800">
                <h3 class="text-lg sm:text-xl text-black font-semibold mb-3">Cost-Efficient</h3>
                <p class="text-sm sm:text-base text-gray-500 leading-relaxed">Tidak perlu mengeluarkan biaya untuk
                    kantor dan team yang tidak produktif.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pool-talent -->
<section class="py-12 md:py-20 main-content bg-[#F1F5F7]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28 text-center">
        <h2 class="text-2xl md:text-3xl text-black font-semibold mb-4 md:mb-6" data-aos="fade-down"
            data-aos-duration="1000">
            Departemen apa yang Anda butuhkan saat ini?
        </h2>
        <p class="text-base md:text-lg text-gray-500 mb-8 md:mb-10 max-w-3xl mx-auto" data-aos="fade-down"
            data-aos-duration="1000">
            Talent kami mencakup, namun tidak terbatas pada Software Developer, Quality Assurance, Graphic Designer,
            UX Designer, Product Manager, Keuangan, Data Entry, dll. Talent kami sangat disiplin dan memiliki
            passion terhadap produktifitas dan teknologi.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-0">
            <div class="p-6 md:p-8 rounded-lg flex flex-col justify-center">
                <h3 class="text-lg md:text-xl text-gray-800 font-semibold mb-2">Talent Pool</h3>
                <span class="count-up text-3xl font-bold text-gray-900" data-target="100000" data-suffix=" +">0</span>
                <p class="text-gray-500 text-xs md:text-sm">Talent pool dari partnership, komunitas, dan universitas.
                </p>
            </div>
            <div
                class="p-6 md:p-8 rounded-lg flex flex-col justify-center border-t border-b sm:border-0 sm:border-l sm:border-r border-gray-300">
                <h3 class="text-lg md:text-xl text-gray-800 font-semibold mb-2">Talent Tersalurkan</h3>
                <p class="text-2xl md:text-3xl text-gray-900 font-bold mb-2 count-up" data-target="7000"
                    data-suffix=" +">0
                </p>
                <p class="text-gray-500 text-xs md:text-sm">Talent tersalurkan dan bekerja untuk client kami.</p>
            </div>
            <div class="p-6 md:p-8 rounded-lg flex flex-col justify-center">
                <h3 class="text-lg md:text-xl text-gray-800 font-semibold mb-2">Happy Clients</h3>
                <p class="text-2xl md:text-3xl text-gray-900 font-bold mb-2 count-up" data-target="100"
                    data-suffix=" +">0
                </p>
                <p class="text-gray-500 text-xs md:text-sm">Sejak tahun 2009, UpScale telah dipercaya oleh ratusan
                    perusahaan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Procedure -->
<section class="py-20 main-content bg-white">
    <div
        class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div class="text-left" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl text-black font-medium mb-4">
                Bagaimana prosedur kami?<br>
                Kami bekerja sesuai dengan kebutuhan bisnis Anda
            </h2>
            <p class="text-gray-500 mb-6 leading-relaxed">
                Konsultasi singkat dengan konsultan kami akan membantu kami untuk mengetahui kebutuhan bisnis dan
                talent Anda.
                Kami pastikan talent yang kami tawarkan adalah talent yang memiliki kualifikasi sesuai dengan
                kebutuhan.
            </p>
            <div class="mb-8">
                <p class="text-gray-700 text-lg font-semibold mb-2">Perkiraan waktu untuk konsultasi</p>
                <div class="flex items-end gap-2">
                    <span class="count-up text-5xl font-bold text-gray-800" data-target="30">0</span>
                    <span class="text-xl text-cyan-500 font-medium pb-2">Menit</span>
                </div>
            </div>
        </div>

        <div class="space-y-8" data-aos="fade-left" data-aos-duration="1000">
            <ol class="relative border-s border-gray-200 dark:border-gray-300">
                <!-- Step 1 -->
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-9 ring-gray-200 text-gray-700">1</span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">Konsultasikan kebutuhan
                        bisnis Anda</h3>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                        Bisnis analis kami akan membantu Anda dalam menentukan kualifikasi talent.
                    </p>
                </li>
                <!-- Step 2 -->
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-9 ring-gray-200 text-gray-700">2</span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Talent Assessment</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        Kami akan melakukan pencarian talent sesuai dengan kebutuhan, melakukan interview, test
                        psikolog, dan online technical test.
                    </p>
                </li>
                <!-- Step 3 -->
                <li class="ms-6">
                    <span
                        class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-9 ring-gray-200 text-gray-700">3</span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Pilih Talent Anda</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        Kami akan memberikan list kandidat terbaik, dan Anda dapat melakukan assessment tambahan.
                    </p>
                </li>
            </ol>
        </div>
    </div>
</section>

<!-- Contact -->
<section
    class="bg-[url('https://upscale.id/template/upscale/media/hd-4.jpg')] bg-fixed bg-cover bg-center bg-no-repeat parallax-background h-[450px] relative">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 h-full flex items-center justify-center" data-aos="fade-down" data-aos-duration="1000">
        <div
            class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-10 w-full grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
            <div class="text-center md:text-left">
                <h2 class="text-3xl md:text-3xl font-bold text-white mb-4">Ingin Konsultasi Kebutuhan Anda?</h2>
                <p class="text-lg text-white/80 max-w-xl mb-6">
                    Bisnis analis kami selalu siap untuk mendengar kebutuhan bisnis Anda, secara GRATIS.
                </p>
            </div>

            <div class="flex justify-center md:justify-end">
                <button
                    class="bg-cyan-500 hover:bg-cyan-600 text-white font-medium py-3 px-16 rounded transition duration-300">
                    Mulai Konsultasi Sekarang
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Next-step -->
<section class="py-20 main-content bg-[#F1F5F7]">
    <div
        class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div class="text-left" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl text-black font-medium mb-4">
                Setelah Anda mendapatkan talent <br> terbaik, Kami tetap mensupport <br> kebutuhan bisnis Anda
            </h2>
            <p class="text-gray-500 mb-6 leading-relaxed">
                Setelah Anda mendapatkan talent, kami segera mempersiapkan semua dokumen HR seperti kontrak dan
                perpajakan. Kami juga mengelola seputar manajemen seperti timeline, finance, KPI building, dll.
            </p>
            <div class="mb-8">
                <p class="text-gray-700 text-lg font-semibold mb-2">Estimated Talent Matching</p>
                <div class="flex items-end gap-2">
                    <span class="count-up text-5xl font-bold text-gray-800" data-target="14">0</span>
                    <span class="text-xl text-cyan-500 font-medium pb-2">days</span>
                </div>
            </div>
        </div>

        <div class="space-y-8" data-aos="fade-left" data-aos-duration="1000">
            <ol class="relative border-s border-gray-200 dark:border-gray-300">
                <!-- Step 1 -->
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-8 h-8 bg-white rounded-full -start-4 ring-9 ring-gray-200 text-gray-700">4</span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">Paperwork</h3>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                        Persiapan kontrak, pembuatan akun real-time monitoring agar kedepan anda dapat memastikan
                        produktifitas talent, dll.
                    </p>
                </li>
                <!-- Step 2 -->
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-8 h-8 bg-white rounded-full -start-4 ring-9 ring-gray-200 text-gray-700">5</span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Talent Siap Bekerja</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        Talent siap membantu mengembangkan bisnis Anda.
                    </p>
                </li>
                <!-- Step 3 -->
                <li class="ms-6">
                    <span
                        class="absolute flex items-center justify-center w-8 h-8 bg-white rounded-full -start-4 ring-9 ring-gray-200 text-gray-700">6</span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Support</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        Kami juga dapat membantu anda mengelola beberapa hal seperti coworkspace, absensi,
                        perijinan, timeline, task, KPI dll
                    </p>
                </li>
            </ol>
        </div>
    </div>
</section>

<!-- F.A.Q 1 -->
<section class="py-20 main-content bg-white">
    <div
        class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-[0.8fr_2.2fr] gap-8 items-start">
        <!-- Bagian kiri (accordion) -->
        <div class="space-y-4 w-full" x-data="{ activeAccordion: null }" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-2xl font-medium text-gray-900 mb-4">Recruitment Type <span class="text-cyan-500">.</span>
            </h2>
            <p class="text-gray-800 text-sm leading-relaxed">Tentukan tipe recruitment anda. Pilihan fasilitas tidak
                bersifat wajib, sehingga masih dapat disesuaikan kembali sesuai kebutuhan.</p>

            <!-- Accordion Item 1 -->
            <div class="pb-2">
                <button @click="activeAccordion === 'item1' ? activeAccordion = null : activeAccordion = 'item1'"
                    class="flex items-start gap-3 w-full text-left">
                    <span
                        class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'item1' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span class="text-sm font-medium text-gray-800">Dedicated Team / Freelance Team</span>
                </button>
                <div x-show="activeAccordion === 'item1'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2" class="mt-2 text-sm text-gray-600 pl-9">
                    Pencarian talent terbaik untuk kebutuhan bisnis Anda. Talent bersedia untuk bekerja on-site
                    maupun remote dan full-time maupun part-time.
                </div>
            </div>

            <!-- Accordion Item 1 -->
            <div class="pb-2">
                <button @click="activeAccordion === 'item2' ? activeAccordion = null : activeAccordion = 'item2'"
                    class="flex items-start gap-3 w-full text-left">
                    <span
                        class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'item2' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span class="text-sm font-medium text-gray-800">Head Hunter</span>
                </button>
                <div x-show="activeAccordion === 'item2'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2" class="mt-2 text-sm text-gray-600 pl-9">
                    Menyediakan fasilitas pencarian talent untuk dijadikan karyawan internal.
                </div>
            </div>

            <!-- Accordion Item 1 -->
            <div class="pb-2">
                <button @click="activeAccordion === 'item3' ? activeAccordion = null : activeAccordion = 'item3'"
                    class="flex items-start gap-3 w-full text-left">
                    <span
                        class="flex items-center justify-center w-6 h-6 bg-gray-700 text-white rounded-sm transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'item3' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span class="text-sm font-medium text-gray-800">Project-Based</span>
                </button>
                <div x-show="activeAccordion === 'item3'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2" class="mt-2 text-sm text-gray-600 pl-9">
                    Menyediakan fasilitas pencarian vendor untuk menjadi sub-contractor project Anda.
                </div>
            </div>

        </div>

        <!-- Bagian kanan (tabel) -->
        <div class="w-full" data-aos="fade-left" data-aos-duration="1000">
            <div class="rounded-lg overflow-x-auto shadow-sm">
                <table class="w-full text-xs sm:text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 font-medium text-gray-700 text-left whitespace-nowrap">Fasilitas</th>
                            <th class="p-3 font-medium text-gray-700 text-center whitespace-nowrap">Dedicated Team</th>
                            <th class="p-3 font-medium text-gray-700 text-center whitespace-nowrap">Head Hunter</th>
                            <th class="p-3 font-medium text-gray-700 text-center whitespace-nowrap">Project-Based</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <!-- Data Rows -->
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">Talent Hunt</td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-center"></td>
                        </tr>
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">CoWork Space</td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-center"></td>
                        </tr>
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">Remote Worker / On-Site Worker</td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-center"></td>
                        </tr>
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">Resource Operational & Management</td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-center"></td>
                        </tr>
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">HR Manager</td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-center"></td>
                        </tr>
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">IT Consultant</td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">Resource Tax and Legal</td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3 text-gray-700 whitespace-nowrap">Shared Project Risk & Responsibility</td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-center"></td>
                            <td class="p-3 text-green-600 text-center">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection