<x-dashboard>
    @section('content')
        <!-- Content Area -->
        <div class="flex-1 p-4 md:p-8 scrollable-content">
            <!-- Error Message -->
            @if(session('error'))
                <div class="bg-red-500 text-white p-4 rounded mb-8 shadow-md animate-pulse">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Program Selection Section -->
            <div class="bg-white p-8 rounded-lg shadow-lg mb-8 mt-10">
                <h2 class="text-3xl font-bold text-green-600 mb-8">Program Selection</h2>

                <!-- Program Form -->
                <form action="{{ route('program') }}" method="POST" class="space-y-10">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Program Choice 1 -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Select Program A <span class="text-red-500">*</span></label>
                            <select name="program_a_choice" class="mt-2 block w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150">
                                <option value="" disabled>Select a sub-option for Program A</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                            </select>
                            @error('program_a_choice')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Program Choice 2 -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Select Program B <span class="text-red-500">*</span></label>
                            <select name="program_b_choice" class="mt-2 block w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150">
                                <option value="" disabled>Select a sub-option for Program B</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                            </select>
                            @error('program_b_choice')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Program Choice 3 -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Select Program C <span class="text-red-500">*</span></label>
                            <select name="program_c_choice" class="mt-2 block w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150">
                                <option value="" disabled>Select a sub-option for Program C</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                            </select>
                            @error('program_c_choice')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Program Choice 4 -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Select Program D</label>
                            <select name="program_d_choice" class="mt-2 block w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150">
                                <option value="" disabled>Select a sub-option for Program D</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                            </select>
                            @error('program_d_choice')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Program Choice 5 -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Select Program E</label>
                            <select name="program_e_choice" class="mt-2 block w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150">
                                <option value="" disabled>Select a sub-option for Program E</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                                <option value="Bachelor of Engineering in Computer Science Engineering">Bachelor of Engineering in Computer Science Engineering</option>
                            </select>
                            @error('program_e_choice')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between mt-12">
                        <a href="{{ route('education') }}" class="bg-gray-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-gray-600 transition duration-200">
                            Previous
                        </a>
                        <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition duration-200">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</x-dashboard>
