<x-dashboard>
    @section('content')
    <div class="flex-1 p-6 md:p-12 scrollable-content">
        <!-- Display success or error messages -->
        @if(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-8 shadow-md">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-8 shadow-md">
                {{ session('success') }}
            </div>
        @endif

        <!-- Applicant Personal Information -->
        <div class="bg-white p-8 rounded-lg shadow-lg mb-8 mt-12 animate__animated animate__fadeInUp">
            <h2 class="text-3xl font-bold text-green-600 mb-6">Applicant Personal Information</h2>

            <!-- Personal Information Form -->
            <form action="{{ route('profile.update') }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Full Name -->
                    <div class="form-group">
                        <label class="block text-gray-700 font-semibold">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" name="full_name" placeholder="Enter your full name"
                               class="mt-1 block w-full border @error('full_name') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                               value="{{ old('full_name', $user->full_name) }}"
                               @if($user->full_name) readonly  @endif>
                        @error('full_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Disability -->
                    <div class="form-group">
                        <label class="block text-gray-700 font-semibold">Disability <span class="text-red-500">*</span></label>
                        <select name="disability" class="mt-1 block w-full border @error('disability') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                @if($user->disability) readonly  @endif>
                            <option value="" disabled>Select disability</option>
                            <option value="None" {{ old('disability', $user->disability) == 'None' ? 'selected' : '' }}>None</option>
                            <option value="Visual Impairment" {{ old('disability', $user->disability) == 'Visual Impairment' ? 'selected' : '' }}>Visual Impairment</option>
                            <option value="Hearing Impairment" {{ old('disability', $user->disability) == 'Hearing Impairment' ? 'selected' : '' }}>Hearing Impairment</option>
                        </select>
                        @error('disability')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date of Birth -->
                    <div class="form-group">
                        <label class="block text-gray-700 font-semibold">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" name="date_of_birth"
                                class="mt-1 block w-full border @error('date_of_birth') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                value="{{ old('date_of_birth', $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->format('Y-m-d') : null) }}"
                                @if($user->date_of_birth) readonly  @endif>

                        @error('date_of_birth')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <label class="block text-gray-700 font-semibold">Gender <span class="text-red-500">*</span></label>
                        <select name="gender" class="mt-1 block w-full border @error('gender') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                @if($user->gender) readonly  @endif>
                            <option value="" disabled>Select gender</option>
                            <option value="Male" {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nationality -->
                    <div class="form-group">
                        <label class="block text-gray-700 font-semibold">Nationality <span class="text-red-500">*</span></label>
                        <select name="nationality" class="mt-1 block w-full border @error('nationality') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                @if($user->nationality) readonly  @endif>
                            <option value="" disabled>Select nationality</option>
                            <option value="American" {{ old('nationality', $user->nationality) == 'American' ? 'selected' : '' }}>American</option>
                            <option value="Canadian" {{ old('nationality', $user->nationality) == 'Canadian' ? 'selected' : '' }}>Canadian</option>
                            <option value="British" {{ old('nationality', $user->nationality) == 'British' ? 'selected' : '' }}>British</option>
                        </select>
                        @error('nationality')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Permanent Address -->
                    <div class="form-group">
                        <label class="block text-gray-700 font-semibold">Permanent Address <span class="text-red-500">*</span></label>
                        <input type="text" name="permanent_address" placeholder="Enter your permanent address"
                               class="mt-1 block w-full border @error('permanent_address') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                               value="{{ old('permanent_address', $user->permanent_address) }}"
                               @if($user->permanent_address) readonly  @endif>
                        @error('permanent_address')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Next of Kin Information -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg mt-12">
                    <h3 class="text-2xl font-semibold text-green-600 mb-6">Next of Kin Information</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Next of Kin Full Name -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Next of Kin Full Name <span class="text-red-500">*</span></label>
                            <input type="text" name="kin_full_name" placeholder="Enter next of kin full name"
                                   class="mt-1 block w-full border @error('kin_full_name') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                   value="{{ old('kin_full_name', $user->kin_full_name) }}"
                                   @if($user->kin_full_name) readonly  @endif>
                            @error('kin_full_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Next of Kin Relationship -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Next of Kin Relationship <span class="text-red-500">*</span></label>
                            <input type="text" name="kin_relationship" placeholder="Enter next of kin relationship"
                                   class="mt-1 block w-full border @error('kin_relationship') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                   value="{{ old('kin_relationship', $user->kin_relationship) }}"
                                   @if($user->kin_relationship) readonly  @endif>
                            @error('kin_relationship')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Next of Kin Mobile -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Next of Kin Mobile <span class="text-red-500">*</span></label>
                            <input type="text" name="kin_mobile" placeholder="Enter next of kin mobile number"
                                   class="mt-1 block w-full border @error('kin_mobile') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                   value="{{ old('kin_mobile', $user->kin_mobile) }}"
                                   @if($user->kin_mobile) readonly  @endif>
                            @error('kin_mobile')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Next of Kin email -->
                        <div class="form-group">
                            <label class="block text-gray-700 font-semibold">Next of Kin email <span class="text-red-500">*</span></label>
                            <input type="text" name="kin_email" placeholder="Enter next of kin email"
                                   class="mt-1 block w-full border @error('kin_email') border-red-500 @else border-gray-300 @enderror rounded-lg p-3"
                                   value="{{ old('kin_email', $user->kin_email) }}"
                                   @if($user->kin_email) readonly  @endif>
                            @error('kin_email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-8">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md">
                        Update Information
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</x-dashboard>
