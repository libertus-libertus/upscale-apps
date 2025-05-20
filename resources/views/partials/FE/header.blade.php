<nav id="main-navbar" class="fixed top-0 left-0 w-full z-50 transition-colors duration-300 bg-transparent">
    <div class="container mx-auto px-4 sm:px-6 lg:px-28">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img class="h-8" src="https://upscale.id/template/upscale/media/logo-transparent.png"
                        alt="Upscale.id" loading="lazy">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="{{ url('/') }}" data-link
                    class="px-3 py-2 text-sm font-medium hover:text-cyan-500 transition-colors">Home</a>
                <a href="{{ route('business') }}" data-link
                    class="px-3 py-2 text-sm font-medium hover:text-cyan-500 transition-colors">For Business</a>
                <a href="{{ route('talent') }}" data-link
                    class="px-3 py-2 text-sm font-medium hover:text-cyan-500 transition-colors">For Talent</a>
                <a href="{{ route('jobs') }}"
                    class="px-3 py-2 text-sm font-medium hover:text-cyan-500 transition-colors">Jobs</a>
                <a href="{{ route('faq') }}"
                    class="px-3 py-2 text-sm font-medium hover:text-cyan-500 transition-colors">F.A.Q</a>

                <!-- Language Dropdown -->
                <div class="relative dropdown px-3">
                    <button class="flex items-center text-sm font-medium hover:text-cyan-500 transition-colors">
                        <img src="https://upscale.id/template/upscale/media/id.png" alt="ID" class="w-5 h-3 mr-2"
                            loading="lazy">
                        ID
                    </button>
                    <div
                        class="dropdown-menu hidden absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg z-10 flex-col py-1">
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700">
                            <img src="https://upscale.id/template/upscale/media/id.png" alt="ID"
                                class="w-5 h-3 mr-1" loading="lazy">
                            ID
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700">
                            <img src="https://upscale.id/template/upscale/media/en.png" alt="EN"
                                class="w-5 h-3 mr-1" loading="lazy">
                            EN
                        </a>
                    </div>
                </div>

                <div class="h-4 border-l border-gray-600 mx-2"></div>

                <!-- Auth Buttons -->
                <button id="login-btn"
                    class="px-3 py-2 text-sm font-medium hover:text-cyan-500 transition-colors">Login</button>
                <a href="#"
                    class="border border-white text-white rounded-full px-4 py-1 hover:bg-cyan-500 hover:text-white hover:border-cyan-500 transition-colors ml-2 text-sm font-medium">
                    Live Chat
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button"
                    class="p-2 hover:text-cyan-500 focus:outline-none transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu with smooth transition -->
    <div id="mobile-menu"
        class="lg:hidden fixed inset-x-0 top-16 bottom-0 z-40 bg-white text-black overflow-y-auto transform transition-all duration-300 translate-y-[-100%] opacity-0 pointer-events-none">
        <div class="px-4 pt-4 pb-8 space-y-2">
            <a href="{{ route('home') }}" data-link class="block px-3 py-2 hover:text-cyan-500 transition-colors">Home</a>
            <a href="{{ route('business') }}" data-link class="block px-3 py-2 hover:text-cyan-500 transition-colors">For
                Business</a>
            <a href="{{ route('talent') }}" data-link class="block px-3 py-2 hover:text-cyan-500 transition-colors">For
                Talent</a>
            <a href="{{ route('jobs') }}" class="block px-3 py-2 hover:text-cyan-500 transition-colors">Jobs</a>
            <a href="{{ route('faq') }}" class="block px-3 py-2 hover:text-cyan-500 transition-colors">F.A.Q</a>

            <!-- Language Selection -->
            <div class="flex items-center px-3 py-2 space-x-2">
                <a href="#" class="flex items-center hover:text-cyan-500 transition-colors">
                    <img src="https://upscale.id/template/upscale/media/en.png" alt="EN" class="w-5 h-3 mr-2"
                        loading="lazy">
                    English
                </a>
                <span class="text-gray-500">/</span>
                <a href="#" class="flex items-center hover:text-cyan-500 transition-colors">
                    <img src="https://upscale.id/template/upscale/media/id.png" alt="ID" class="w-5 h-3 mr-2"
                        loading="lazy">
                    Indonesia
                </a>
            </div>

            <div class="border-t border-gray-300 pt-2 mt-2">
                <button id="mobile-login-btn"
                    class="block w-full text-left px-3 py-2 hover:text-cyan-500 transition-colors">Login</button>
                <a href="#"
                    class="block w-full text-left px-3 py-2 mt-2 text-white bg-cyan-500 hover:bg-cyan-600 rounded transition-colors">
                    Live Chat
                </a>
            </div>
        </div>
    </div>
</nav>