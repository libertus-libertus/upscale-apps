<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upscale.id, Scaling Up your business with right talent</title>
    <link rel="icon" href="https://upscale.id/template/upscale/media/upscale.ico">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('FE/css/style.css') }}">
    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css')
</head>

<body class="bg-black text-white font-[Jost]">

    <!-- Navbar -->
    @includeIf('partials.FE.header')

    <!-- Login Modal -->
    @includeIf('partials.FE.modal-login')

    <main>

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @includeIf('partials.FE.footer')

    </main>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Custom Script -->
    <script src="{{ asset('FE/js/home.js') }}"></script>
    <!-- Script Modal Login -->
    @includeIf('partials.FE.script-login')
    @stack('js')

</body>

</html>