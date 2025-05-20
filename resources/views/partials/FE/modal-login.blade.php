<div id="loginModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div id="modal-backdrop" class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-black opacity-75"></div>
        </div>

        <!-- Modal content -->
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Login Dashboard
                            </h3>
                            <button id="login-modal-close" class="text-gray-400 hover:text-gray-500 focus:outline-none">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Session Status -->
                        @if (session('status'))
                        <div class="mt-4 p-3 bg-green-100 border-l-4 border-green-500 text-green-700 rounded">
                            {{ session('status') }}
                        </div>
                        @endif

                        <!-- Validation Errors -->
                        @if ($errors->any())
                        <div class="mt-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form class="mt-5 space-y-5" action="{{ route('login') }}" method="POST">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <label for="email"
                                    class="block text-left text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Type your email" required autofocus
                                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 text-gray-700" />
                            </div>

                            <!-- Password -->
                            <div>
                                <label for="password"
                                    class="block text-left text-sm font-medium text-gray-700">Password</label>
                                <input type="password" id="password" name="password" placeholder="Type your password"
                                    required autocomplete="current-password"
                                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 text-gray-700" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block text-left">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" name="remember"
                                        class="rounded border-gray-300 text-cyan-600 shadow-sm focus:border-cyan-300 focus:ring focus:ring-cyan-200 focus:ring-opacity-50">
                                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                </label>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Belum punya akun?
                                    <a href="{{ route('register') }}"
                                        class="text-sm text-cyan-600 hover:underline">Register</a>
                                </span>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm text-cyan-500 hover:underline">
                                    Forgot password?
                                </a>
                                @endif
                            </div>

                            <div class="flex justify-between gap-4 mt-6">
                                <a href="{{ route('password.request') }}"
                                    class="w-1/2 text-center bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg transition-colors">
                                    Reset Password
                                </a>
                                <button type="submit"
                                    class="w-1/2 bg-cyan-500 hover:bg-cyan-600 text-white py-2 rounded-lg transition-colors">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>