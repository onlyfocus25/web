<x-apply>
    <div class="bg-gray-100 min-h-screen flex justify-center items-center py-6">
        <div class="container mx-auto p-4">
            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
                <!-- Login Information -->
                <div class="lg:col-span-1 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-green-600">Login Information</h2>
                    <hr class="border-green-500 my-4">
                    <p class="mt-4 text-gray-700">Upon successful Account Creation.</p>
                    <p class="text-gray-700">Applicant should use Form IV Index No SXXXX/XXXX/YYYY or Equivalent Award Index No EQY/YYYY/XXXX as Username And UPPERCASE surname As Password</p>
                    <div class="bg-gray-100 p-4 rounded mt-4">
                        <p class="text-sm text-gray-600">If Applicant Name: <strong>Israel Maduhu Kangwe</strong> as per NECTA registration then</p>
                        <p class="text-sm text-gray-600"><strong>Example Username:</strong> S0100/0007/2022 or EQ2019003309/2020</p>
                        <p class="text-sm text-gray-600"><strong>Example Password:</strong> KANGWE</p>
                    </div>
                    <button class="bg-green-500 text-white mt-6 px-4 py-2 rounded w-full">
                        <a href="{{ route('login') }}">Click Here to Login</a>
                    </button>
                    <div class="mt-4 text-gray-700">
                        <p><strong>Admission Officer:</strong> +255755089545, +255782337911, +255655634738</p>
                        <p><strong>Whatsapp:</strong> +255785451058</p>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-blue-600">Registration Form</h2>
                    <hr class="border-blue-500 my-4">
                    <p class="mt-4">Please select below the level you are applying for:</p>

                    <!-- Registration Form Start -->
                    <form action="{{ route('register_home') }}" method="post" id="login-form">
                        @csrf
                        <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div class="{{ $errors->has('level_applying') ? 'border border-red-500 rounded p-2' : '' }}">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="level_applying" value="Masters Degree" class="form-radio text-green-500 {{ $errors->has('level_applying') ? 'border-red-500' : '' }}" {{ old('level_applying') == 'Masters Degree' ? 'checked' : '' }}>
                                    <span class="ml-2">Masters Degree</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="level_applying" value="Bachelor Degree" class="form-radio text-green-500 {{ $errors->has('level_applying') ? 'border-red-500' : '' }}" {{ old('level_applying') == 'Bachelor Degree' ? 'checked' : '' }}>
                                    <span class="ml-2">Bachelor Degree</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="level_applying" value="Ordinary Diploma" class="form-radio text-green-500 {{ $errors->has('level_applying') ? 'border-red-500' : '' }}" {{ old('level_applying') == 'Ordinary Diploma (NTA Level IV-VI)' ? 'checked' : '' }}>
                                    <span class="ml-2">Ordinary Diploma (NTA Level IV-VI)</span>
                                </label>
                                @error('level_applying')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Form Fields -->
                        <div class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <label class="block text-gray-700">Secondary Education</label>
                                <select class="mt-1 block w-full border {{ $errors->has('secondary_education') ? 'border-red-500' : 'border-gray-300' }} rounded p-2" name="secondary_education">
                                    <option value="" disabled selected hidden>Select Secondary Education Level</option>
                                    <option value="form four" {{ old('secondary_education') == 'form four' ? 'selected' : '' }}>CSEE Award from NECTA</option>
                                    <option value="EQ" {{ old('secondary_education') == 'EQ' ? 'selected' : '' }}>Foreign Certificate/CSEE Equivalent</option>
                                </select>
                                @error('secondary_education')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700">Form IV Index No</label>
                                <input type="text" class="mt-1 block w-full border {{ $errors->has('form_4_index_number') ? 'border-red-500' : 'border-gray-300' }} rounded p-2" name="form_4_index_number" placeholder="S0110/0064/1964" value="{{ old('form_4_index_number') }}">
                                @error('form_4_index_number')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700">Active Email Address</label>
                                <input type="email" class="mt-1 block w-full border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded p-2" name="email" placeholder="example@gmail.com" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700">Active Phone Number</label>
                                <input type="text" class="mt-1 block w-full border {{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }} rounded p-2" name="phone" placeholder="255718123456" value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700">Password</label>
                                <input type="password" class="mt-1 block w-full border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded p-2" name="password" placeholder="123_STUDENT">
                                @error('password')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700">Confirm Password</label>
                                <input type="password" class="mt-1 block w-full border {{ $errors->has('password_confirmation') ? 'border-red-500' : 'border-gray-300' }} rounded p-2" name="password_confirmation" placeholder="123_STUDENT">
                                @error('password_confirmation')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button id="login-button" class="mt-6 bg-blue-600 text-white px-4 py-2 rounded w-full">Register</button>

                        <!-- Processing Button (Initially Hidden) -->
                        <button type="button" id="processing-button" class="bg-blue-500 text-white mt-6 px-4 py-2 rounded w-full hidden" disabled>
                            <svg class="animate-spin h-5 w-5 mr-3 inline-block" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                                <path d="M4 12a8 8 0 018-8V0C3.58 0 0 3.58 0 8h4zm2 5.3a8.1 8.1 0 011.7-1.6l-2.4-2.5c-1.1 1.2-2 2.5-2.6 3.8L6 17.3z" fill="currentColor"></path>
                            </svg>
                            Processing...
                        </button>
                        <p class="mt-2 text-sm text-center text-gray-600">
                            By clicking Register, you're confirming that you've read our 
                            <a href="#" class="text-blue-600 underline">Terms & Conditions</a>
                        </p>
                    </form>
                    <!-- Registration Form End -->
                </div>
            </div>
        </div>
    </div>
</x-apply>

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
