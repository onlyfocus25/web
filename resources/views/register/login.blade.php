<x-apply>
    <div class="bg-gray-100 min-h-screen flex justify-center items-center py-6">
        <div class="container mx-auto p-4">
            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
                <!-- Login Form -->
                <div class="lg:col-span-1 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-green-600">Login</h2>
                    <hr class="border-green-500 my-4">

                    <!-- Login Form Start -->
                    <form id="login-form" action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Active Email Field -->
                        <div class="mt-4">
                            @error('failed')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            <label class="block text-gray-700">Active Email</label>
                            <input type="text" name="email" class="mt-1 block w-full border border-gray-300 rounded p-2" placeholder="magesa@gmail.com">
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mt-4">
                            <label class="block text-gray-700">Password</label>
                            <input type="password" name="password" class="mt-1 block w-full border border-gray-300 rounded p-2" placeholder="Enter your Password">
                            @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="mt-4 flex items-center">
                            <input type="checkbox" name="remember" class="form-checkbox text-green-500">
                            <span class="ml-2 text-gray-700">Remember Me</span>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" id="login-button" class="bg-green-500 text-white mt-6 px-4 py-2 rounded w-full">
                            Login
                        </button>

                        <!-- Processing Button (Initially Hidden) -->
                        <button type="button" id="processing-button" class="bg-green-500 text-white mt-6 px-4 py-2 rounded w-full hidden" disabled>
                            <svg class="animate-spin h-5 w-5 mr-3 inline-block" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                                <path d="M4 12a8 8 0 018-8V0C3.58 0 0 3.58 0 8h4zm2 5.3a8.1 8.1 0 011.7-1.6l-2.4-2.5c-1.1 1.2-2 2.5-2.6 3.8L6 17.3z" fill="currentColor"></path>
                            </svg>
                            Processing...
                        </button>
                    </form>
                    <!-- Login Form End -->

                    <!-- Forgot Password Link -->
                    <div class="mt-4 text-center">
                        <a href="#" class="text-blue-600 underline">Forgot your password?</a>
                    </div>
                </div>

                <!-- Information Panel -->
                <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-blue-600">Login Instructions</h2>
                    <hr class="border-blue-500 my-4">
                    <p class="mt-4 text-gray-700">Please use your credentials to log in. If you encounter any issues, contact the support team.</p>
                    <div class="bg-gray-100 p-4 rounded mt-4">
                        <p class="text-sm text-gray-600">Example:</p>
                        <p class="text-sm text-gray-600"><strong>Active Email:</strong> S0100/0007/2022 or EQ2019003309/2020</p>
                        <p class="text-sm text-gray-600"><strong>Password:</strong> KANGWE</p>
                    </div>
                    <div class="mt-4 text-gray-700">
                        <p><strong>Support Contact:</strong> +255755089545, +255782337911, +255655634738</p>
                        <p><strong>Whatsapp:</strong> +255785451058</p>
                    </div>
                    <button class="bg-blue-500 text-white mt-6 px-4 py-2 rounded w-full">
                        <a href="{{ route('register_home') }}">Click Here to Register</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to Handle Button Toggle on Form Submit -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const loginForm = document.getElementById('login-form');
            const loginButton = document.getElementById('login-button');
            const processingButton = document.getElementById('processing-button');

            loginForm.addEventListener('submit', function () {
                // Hide the login button and show the processing button
                loginButton.classList.add('hidden');
                processingButton.classList.remove('hidden');
            });
        });
    </script>
</x-apply>
