<x-dashboard>
    @section('content')
        <!-- Content Area -->
        <div class="flex-1 p-4 md:p-8 bg-gray-100 overflow-auto">
            <!-- Error Message -->
            @if(session('error'))
                <div class="bg-red-500 text-white p-4 rounded-lg mb-8 shadow-md">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Confirmation Section -->
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-green-700 mb-6">Review and Confirm Your Submission</h2>
                <p class="text-gray-600 mb-6">Please review your details carefully before finalizing your application submission.</p>

                <!-- User Information Cards -->
                <div class="space-y-8">

                    <!-- Personal Information Card -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md border border-gray-200">
                        <h3 class="text-xl font-semibold text-green-500 border-b-2 border-gray-300 pb-2 mb-4">Personal Information</h3>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Name:</strong> {{ $user->full_name }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Email:</strong> {{ $user->email }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Phone:</strong> {{ $user->phone }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Address:</strong> {{ $user->email }}</p>
                    </div>

                    <!-- Next of Kin Information Card -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md border border-gray-200">
                        <h3 class="text-xl font-semibold text-green-500 border-b-2 border-gray-300 pb-2 mb-4">Next of Kin Information</h3>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Name:</strong> {{ $user->kin_full_name }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Relationship:</strong> {{ $user->kin_relationship }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Phone:</strong> {{ $user->kin_mobile }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Email:</strong> {{ $user->kin_email }}</p>
                    </div>

                    <!-- Education Information Card -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md border border-gray-200">
                        <h3 class="text-xl font-semibold text-green-500 border-b-2 border-gray-300 pb-2 mb-4">Education Information</h3>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">School Name:</strong> {{ $education->school_name }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Degree:</strong> {{ $education->degree }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Graduation Year:</strong> {{ $education->graduation_year }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">GPA:</strong> {{ $education->gpa }}</p>
                    </div>

                    <!-- Program Information Card -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md border border-gray-200">
                        <h3 class="text-xl font-semibold text-green-500 border-b-2 border-gray-300 pb-2 mb-4">Program Selection</h3>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Selected Program A:</strong> {{ $programs->program_a_choice }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Selected Program B:</strong> {{ $programs->program_b_choice }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Selected Program C:</strong> {{ $programs->program_c_choice }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Selected Program C:</strong> {{ $programs->program_d_choice }}</p>
                        <p class="mb-4"><strong class="font-semibold text-gray-900">Selected Program C:</strong> {{ $programs->program_e_choice }}</p>

                    </div>

                </div>

                <!-- Action Buttons: Confirm, Previous, and PDF Download -->
                <div class="mt-8 flex justify-between gap-4">
                    <!-- Confirm Button -->
                    <form action="{{ route('application.confirm') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-green-700 transition duration-150 font-semibold">
                            Confirm Submission
                        </button>
                    </form>

                    {{-- <!-- Previous Button -->
                    <a href="{{ route('program') }}" class="bg-gray-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-700 transition duration-150 font-semibold">
                        Previous
                    </a> --}}

                    <!-- Download PDF Button -->
                    <a href="{{ route('program') }}" class="bg-gray-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition duration-150 font-semibold">
                        Previous
                    </a>
                </div>

            </div>
        </div>
    @endsection
</x-dashboard>
