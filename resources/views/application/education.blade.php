<x-dashboard>
@section('content')
    <!-- Content Area -->
    <div class="flex-1 p-4 md:p-8 scrollable-content">
        <!-- Error Message -->
        @if(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-8 shadow-md">
                {{ session('error') }}
            </div>
        @endif

        <!-- Education Background Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
            <h2 class="text-xl font-semibold text-green-600 mb-4">Education Background</h2>

            <!-- Education Form -->
            <form action="{{ route('education.Save') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- School Name -->
                    <div>
                        <label class="block text-gray-700 font-semibold">School Name <span class="text-red-500">*</span></label>
                        <input type="text" name="school_name" value="{{ old('school_name', $education->school_name ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        @if(isset($education) && $education->school_name) readonly  @endif >
                        @error('school_name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Degree -->
                    <div>
                        <label class="block text-gray-700 font-semibold">Degree <span class="text-red-500">*</span></label>
                        <input type="text" name="degree" value="{{ old('degree', $education->degree ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                         @if(isset($education) && $education->degree) readonly  @endif
>
                        @error('degree')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Graduation Year -->
                    <div>
                        <label class="block text-gray-700 font-semibold">Graduation Year <span class="text-red-500">*</span></label>
                        <input type="number" name="graduation_year" value="{{ old('graduation_year', $education->graduation_year ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          @if(isset($education) && $education->graduation_year) readonly  @endif
>
                        @error('graduation_year')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- GPA -->
                    <div>
                        <label class="block text-gray-700 font-semibold">GPA <span class="text-red-500">*</span></label>
                        <input type="number" step="0.01" name="gpa" value="{{ old('gpa', $education->gpa ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                         @if(isset($education) && $education->gpa) readonly  @endif
>
                        @error('gpa')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-8 flex justify-between">
                    <!-- Previous Button -->
                    <a href="{{ route('profile') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-600 transition duration-200">Previous</a>
                    <!-- Next Button -->
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600 transition duration-200">Next</button>
                </div>
            </form>
        </div>
    </div>
@endsection
</x-dashboard>