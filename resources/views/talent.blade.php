@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen pt-24 md:pt-28 lg:pt-10">
    <!-- Background Video -->
    <video muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover opacity-70 z-0"
        poster="https://upscale.id/template/upscale/media/video-poster-2.jpg">
        <source src="https://upscale.id/template/upscale/media/repeat-medium.mp4" type="video/mp4">
    </video>

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>

    <!-- Konten -->
    <div class="relative z-20 flex items-center justify-center min-h-screen">
        <div class="container px-6 sm:px-10 lg:px-28 w-full">
            <!-- Flex Container -->
            <div
                class="flex flex-col lg:flex-col xl:flex-row items-center xl:items-stretch justify-between gap-12 xl:gap-0">

                <!-- Kiri: Teks -->
                <div class="w-full xl:w-1/2 max-w-3xl" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                        Upgrade kemampuan dan networkmu<span class="text-cyan-600 font-semibold">.</span>
                    </h1>
                    <p class="text-xl text-gray-300 mb-6">
                        Bergabung dan dapatkan beberapa manfaat:
                    </p>
                    <ul class="list-disc list-inside text-white space-y-2">
                        <li class="text-xl">Karir di perusahaan idaman</li>
                        <li class="text-xl">Project as a freelance</li>
                        <li class="text-xl">Pasif Income</li>
                        <li class="text-xl">Free Education</li>
                        <li class="text-xl">Konsultasi senior programer</li>
                        <li class="text-xl">Kerja Remote (lokal/International)</li>
                    </ul>
                </div>

                <!-- Kanan: Tombol Join -->
                <div class="w-full xl:w-1/2 flex items-center justify-center xl:justify-end py-8 xl:py-0"
                    data-aos="fade-left" data-aos-duration="1000">
                    <a href="#"
                        class="inline-flex items-center justify-center border border-white hover:border-cyan-500 hover:text-cyan-500 text-white font-medium rounded-full px-8 py-3 transition-colors duration-300 text-nowrap text-lg">
                        Join Community
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#37517E] pb-16 pt-10 sm:pt-14 md:pt-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 flex items-start" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <div class="p-3 mr-4 flex-shrink-0">
                    <i class="text-5xl text-blue-500 lnr lnr-heart"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-white mb-2">Get the Dream Jobs</h3>
                    <p class="text-white text-sm">Helps talent to get the best-matched company and career.</p>
                </div>
            </div>

            <div class="p-6 flex items-start" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <div class="p-3 mr-4 flex-shrink-0">
                    <i class="text-5xl text-blue-500 lnr lnr-rocket"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-white mb-2">Skill Improvement</h3>
                    <p class="text-white text-sm">FREE access to our educational classes.</p>
                </div>
            </div>

            <div class="p-6 flex items-start" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <div class="p-3 mr-4 flex-shrink-0">
                    <i class="text-5xl text-blue-500 lnr lnr-list"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-white mb-2">Know your Rights</h3>
                    <p class="text-white text-sm">Helps talent to get their rights based on company rules and
                        regulation.</p>
                </div>
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

<!-- Value Proposition -->
<section class="bg-[#F1F5F7] py-20 text-gray-600">
    <div class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">

            <!-- Kolom 1 -->
            <div data-aos="fade-up">
                <h3 class="text-2xl font-semibold text-[#0F1F2C] mb-4">Share & Learn</h3>
                <p>
                    Dengan bergabung dengan upscale, talent mendapatkan akses platform edukasi yang kami kembangkan,
                    baik
                    sebagai mentor maupun sebagai siswa.
                </p>
            </div>

            <!-- Kolom 2 -->
            <div data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-semibold text-[#0F1F2C] mb-4">Expand Your Network</h3>
                <p>
                    Perluas pertemananmu diberbagai bidang kemampuan dan diberbagai regional. Ikuti event-event khusus
                    upscale
                    yang akan dilakukan berkala.
                </p>
            </div>

            <!-- Kolom 3 -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold text-[#0F1F2C] mb-4">Get Hired & Make Money</h3>
                <p>
                    Mulai bangun pipeline karirmu dengan Upscale. Daftarkan diri anda, lengkapi profile, ikuti
                    assessment &
                    dapatkan karir / pekerjaan yang sesuai harapan anda.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-12 md:py-20 bg-white text-gray-700">
    <div class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-8 text-center mb-8">
        <h2 class="text-3xl font-semibold mb-4">Our Partnership in many regional</h2>
        <p class="mb-6">Kami secara aktif akan terus mengembangkan komunitas dan network kami dengan <br> berbagai
            pihak. Nantikan kami hadir di kota Anda.</p>
    </div>
    <div class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 items-center">

            <div class="order-1" data-aos="fade-right">
                <img src="https://upscale.id/template/upscale/media/map.jpg" alt="Peta Regional" class="w-full">
            </div>

            <div class="order-2 text-end" data-aos="fade-left">
                <ul class="list-none space-y-2 gap gap-1">
                    <li>Yogyakarta, Indonesia <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Jakarta, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Bandung, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Malang, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Bali, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Surabaya, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Tangerang, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Semarang, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Solo, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                    <li>Bogor, soon <span class="text-cyan-500 fw-bold text-3xl">.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-12 md:py-20 bg-[#F9FAFB] text-gray-700">
    <div class="container max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-center text-[#0F1F2C] mb-8">Currently open roles urgently</h2>
        <div class="bg-white rounded-md shadow-md p-6 md:p-8">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-6 items-center">
                <div class="md:col-span-2">
                    <h3 class="text-xl font-semibold text-[#0F1F2C] mb-2">Web Developer</h3>
                    <p class="text-sm">2 years work experience, 1 year development experience with Javascript, 1 year
                        development experience with PHP, Good English communication skills and client servicing
                        experiences,
                        Work well under pressure and tight deadlines</p>
                </div>
                <div class="md:col-span-2">
                    <ul class="list-disc list-inside text-sm space-y-1">
                        <li>Fulltime jobs</li>
                        <li>Remote/onsite</li>
                        <li>Contract 6 month</li>
                    </ul>
                </div>
                <div class="md:col-span-2 flex flex-col md:items-end">
                    <button
                        class="bg-[#0EA5E9] hover:bg-[#0284C7] text-white font-semibold py-3 px-6 rounded-md mb-2 md:mb-0">
                        Apply now
                    </button>
                    <p class="text-xs text-gray-500 text-center md:text-right">Make sure to have all the requirements
                        before
                        contacting us!</p>
                </div>
            </div>
            <div class="mt-6 md:mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div>
                    <div class="flex items-center justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#0F1F2C]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.105-.896 9.337 9.337 0 00-4.105-.896 9.38 9.38 0 00-2.625.372M16.5 13.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm1.725 8.15a11.25 11.25 0 00-9.75 0m9.75 0h.008v.008H18v-.008zm-3.182 0h.008v.008H15v-.008zm-3.182 0h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-semibold text-[#0F1F2C]">Availability</h4>
                    <p class="text-xs text-gray-600">2 people</p>
                </div>
                <div>
                    <div class="flex items-center justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#0F1F2C]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042h.012m-1.575 1.575l-2.835 2.835a3 3 0 104.243 4.243l2.835-2.835m-3 3V4.879m0 7.242h.012M12 15.75c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-semibold text-[#0F1F2C]">Experience</h4>
                    <p class="text-xs text-gray-600">Min 2 years</p>
                </div>
                <div>
                    <div class="flex items-center justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#0F1F2C]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 14.25c-2.163 0-4.078 1.527-4.078 3.427m4.078 0V11.85m0 2.4-2.43-3.427M12 14.25c2.163 0 4.078 1.527 4.078 3.427m0 0V11.85m0 2.4 2.43-3.427M12 14.25l-2.43-3.427" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 9l-2.25.75-2.25-.75m9.75 3l-2.25.75-2.25-.75m-9.75 3l2.25.75 2.25-.75m9.75 3l2.25.75 2.25-.75M3 21h18M4.5 12h15" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-semibold text-[#0F1F2C]">Min. Graduation</h4>
                    <p class="text-xs text-gray-600">none</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection