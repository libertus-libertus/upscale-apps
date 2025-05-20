@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen">
    <!-- Background Video -->
    <video muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover opacity-70 z-0"
        poster="https://upscale.id/template/upscale/media/video-poster-2.jpg">
        <source src="https://upscale.id/template/upscale/media/repeat-medium.mp4" type="video/mp4">
    </video>

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>

    <!-- Konten -->
    <div class="relative z-20 flex items-center justify-center min-h-screen">
        <div class="container px-6 sm:px-10 lg:px-28">
            <div class="max-w-3xl" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Scaling Up Your Business
                </h1>
                <p class="text-xl sm:text-xl text-gray-300 mb-6">
                    Service kami cocok untuk membantu berbagai <br class="hidden sm:inline"> skala perusahaan
                </p>
                <ul class="list-disc list-inside text-white space-y-2">
                    <li class="text-xl">Enterprise Corporation</li>
                    <li class="text-xl">Startup Company</li>
                    <li class="text-xl">E-commerce</li>
                    <li class="text-xl">Small-business</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Talent -->
<section class="bg-[#F1F5F7] text-gray-500 py-20">
    <div
        class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-10 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

        <!-- Kolom 1 -->
        <div data-aos="fade-up">
            <p class="text-lg leading-relaxed">
                Dapatkan akses database talent kami untuk membantu scaling up perusahaan anda dengan cara yang flexible.
                Hal
                ini sangat krusial bagi bisnis yang ingin berinovasi dengan cepat dan tepat. Terlebih apabila anda
                memiliki
                roadmap project yang baik dan strategi yang tepat.
            </p>
        </div>

        <!-- Kolom 2 -->
        <div data-aos="fade-up" data-aos-delay="100">
            <p class="text-lg leading-relaxed">
                Sejak tahun 2009, telah membantu banyak perusahaan untuk mewujudkan harapan dengan mencarikan talent
                atau
                vendor yang tepat. Dengan database talent pool kami yang jumlahnya lebih dari 5000 talent, kami dapat
                membantu
                anda mewujudkan visi anda.
            </p>
        </div>

        <!-- Kolom 3: Galeri -->
        <div class="grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="200">
            <img src="https://upscale.id/template/upscale/media/music/image-15.jpg" alt="Gallery 1"
                class="rounded-lg w-full h-auto object-cover shadow-md">
            <img src="https://upscale.id/template/upscale/media/music/image-1.jpg" alt="Gallery 2"
                class="rounded-lg w-full h-auto object-cover shadow-md">
            <img src="https://upscale.id/template/upscale/media/music/image-3.jpg" alt="Gallery 3"
                class="rounded-lg w-full h-auto object-cover shadow-md">
            <img src="https://upscale.id/template/upscale/media/music/image-13.jpg" alt="Gallery 4"
                class="rounded-lg w-full h-auto object-cover shadow-md">
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

<!-- Section: Case Studies / Blog Style -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28">
        <div class="grid md:grid-cols-3 gap-10">

            <!-- Card 1 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-lg shadow-md">
                    <img src="https://upscale.id/template/upscale/media/music/image-16.jpg" alt="Malaysia Team"
                        class="w-full h-[220px] object-cover">
                    <div
                        class="absolute top-4 right-3 bg-[#002b5b] text-white text-xs font-semibold px-3 py-1 rounded-full">
                        AI STARTUP COMPANY
                    </div>
                </div>
                <h3 class="text-xl font-semibold mt-4">Malaysia Startup, Dedicated Team</h3>
                <p class="text-sm text-gray-700 mt-2">
                    2020 kami membantu salah satu startup malaysia yang melayani perusahaan oil & gas untuk entry &
                    extraction
                    data untuk AI Learning
                </p>
                <a href="#" class="inline-block mt-3 text-sky-600 text-sm font-semibold hover:underline">
                    Data Entry Dedicated Team &nbsp;&rarr;
                </a>
            </div>

            <!-- Card 2 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-lg shadow-md">
                    <img src="https://upscale.id/template/upscale/media/photo/image-10.jpg" alt="Cakap Team"
                        class="w-full h-[220px] object-cover">
                    <div
                        class="absolute top-4 right-3 bg-[#002b5b] text-white text-xs font-semibold px-3 py-1 rounded-full">
                        STARTUP EDUCATION
                    </div>
                </div>
                <h3 class="text-xl font-semibold mt-4">Cakap, Dedicated Office & Team</h3>
                <p class="text-sm text-gray-700 mt-2">
                    Sejak tahun 2015 s/d 2020 membantu Cakap mendapatkan belasan programer & mengelola development
                    office di
                    jogja.
                </p>
                <a href="#" class="inline-block mt-3 text-sky-600 text-sm font-semibold hover:underline">
                    Dodi Prakoso Wibowo &nbsp;&rarr;
                </a>
            </div>

            <!-- Card 3 -->
            <div class="group">
                <div class="relative overflow-hidden rounded-lg shadow-md">
                    <img src="https://upscale.id/template/upscale/media/photo/image-9.jpg" alt="Krafthaus Team"
                        class="w-full h-[220px] object-cover">
                    <div
                        class="absolute top-4 right-3 bg-[#002b5b] text-white text-xs font-semibold px-3 py-1 rounded-full">
                        DIGITAL AGENCY
                    </div>
                </div>
                <h3 class="text-xl font-semibold mt-4">Krafthaus, Corporate Management</h3>
                <p class="text-sm text-gray-700 mt-2">
                    Sejak tahun 2012 telah dipercaya oleh perusahaan Australia sebagai Managing Director untuk mengelola
                    cabang
                    di Indonesia
                </p>
                <a href="#" class="inline-block mt-3 text-sky-600 text-sm font-semibold hover:underline">
                    Arief Widyananda &nbsp;&rarr;
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Section: Consultation Form -->
<section class="bg-[#f5fbff] py-20">
    <div class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-10 text-center">
        <h2 class="text-2xl md:text-3xl font-semibold text-[#001c3d]">
            Simple & an affordable price plans for everyone
        </h2>
        <p class="text-sm text-[#5f7896] mt-2">
            Paket harga dengan konsep yang sederhana & terjangkau untuk semua orang. Baik skala <br />
            Coorporate, startup sampai dengan UKM
        </p>

        <!-- Form Box -->
        <div class="mt-10 bg-white shadow-md rounded-md p-6 md:p-10 text-left flex flex-col md:flex-row gap-6">

            <!-- Left Text -->
            <div class="md:w-1/2">
                <h3 class="text-xl font-semibold text-[#001c3d] mb-2">Ingin Konsultasi<br />Kebutuhan Anda?</h3>
                <p class="text-sm text-gray-600 mb-4">
                    Bisnis analis kami akan membantu Anda <br />
                    dalam menentukan kualifikasi talent.
                </p>
                <div class="text-sm text-[#001c3d] space-y-2">
                    <div class="flex items-center gap-2">
                        <img src="https://flagcdn.com/w40/id.png" alt="Indonesia Flag" class="w-5 h-4" />
                        +62 87 888 666 531
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="https://flagcdn.com/w40/au.png" alt="Australia Flag" class="w-5 h-4" />
                        +61 3 9010 6067
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="md:w-1/2 space-y-4">
                <input type="text" placeholder="Name"
                    class="w-full border border-gray-300 text-gray-600 rounded px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300" />
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="text" placeholder="Phone"
                        class="w-full border border-gray-300 text-gray-600 rounded px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300" />
                    <input type="email" placeholder="Email"
                        class="w-full border border-gray-300 text-gray-600 rounded px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300" />
                </div>
                <textarea rows="4" placeholder="Write something ..."
                    class="w-full border border-gray-300 text-gray-600 rounded px-4 py-2 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-blue-300"></textarea>
                <button class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-2 rounded-full text-sm font-semibold">
                    Send inquiry
                </button>
            </div>
        </div>
    </div>
</section>
@endsection