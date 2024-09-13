<x-dashboard>
    @section('content')
    <!-- Main Content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        <!-- Left Side Content -->
        <div class="col-span-2 space-y-6">
            <!-- My Application Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800">My Application</h2>
                <p class="mt-4 text-gray-700">Dear applicant,</p>
                <p class="mt-2 text-gray-700">
                    Welcome to The University of Dodoma Online Admission System (UDOM-OAS). 
                    Thank you for choosing UDOM. You have successfully logged in, the next stage 
                    is filling out online forms located on the left side of your desktop or by 
                    clicking the button on the application status panel below.
                </p>
            </div>

            <!-- Application Status Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Application Status</h3>
                <p class="mt-4 bg-green-100 text-green-600 p-3 rounded-lg">
                    Congratulations! You have been Selected.
                </p>
            </div>

            <!-- Congratulations Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Congratulations!</h3>
                <p class="mt-4 bg-green-100 text-green-600 p-3 rounded-lg">
                    Congratulations! You have been admitted into <span class="font-bold">Bachelor of Arts in Economics (BA - EC)</span> of The University of Dodoma.
                </p>
                <p class="mt-4 text-gray-700">
                    Below are the documents that you are required to download before reporting to the University of Dodoma:
                </p>
                <ul class="list-disc list-inside mt-4 text-blue-600">
                    <li><a href="#" class="hover:text-blue-800">Admission Letter (Offer of Admission)</a></li>
                    <li><a href="#" class="hover:text-blue-800">UNDERGRADUATE FEE STRUCTURE 2024/2025</a></li>
                    <li><a href="#" class="hover:text-blue-800">MEDICAL EXAMINATION FORM</a></li>
                </ul>
            </div>
        </div>

        <!-- Right Side Content -->
        <div class="space-y-6">
            <!-- Application Process Status Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Application Process Status</h3>
                <div class="mt-4 space-y-3">
                    <!-- Step 1 -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-800">Personal Information</span>
                        <span class="text-green-500 font-semibold">Completed</span>
                    </div>
                    <!-- Step 2 -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-800">Payment</span>
                        <span class="text-green-500 font-semibold">Completed</span>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-800">Academic Result</span>
                        <span class="text-green-500 font-semibold">Completed</span>
                    </div>
                    <!-- Step 4 -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-800">Apply</span>
                        <span class="text-green-500 font-semibold">Completed</span>
                    </div>
                    <!-- Step 5 -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-800">Application Submission</span>
                        <span class="text-green-500 font-semibold">Completed</span>
                    </div>
                </div>
            </div>

            <!-- Programmes Applied Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Programmes Applied</h3>
                <div class="mt-4 space-y-2">
                    <!-- Program 1 -->
                    <div class="flex justify-between">
                        <span class="text-gray-800">Bachelor of Arts in Economics (BA - EC)</span>
                        <span class="text-gray-500">2024/2025</span>
                    </div>
                    <!-- Program 2 -->
                    <div class="flex justify-between">
                        <span class="text-gray-800">Bachelor of Arts in Environmental Economics and Policy (BA - EEP)</span>
                        <span class="text-gray-500">2024/2025</span>
                    </div>
                    <!-- Program 3 -->
                    <div class="flex justify-between">
                        <span class="text-gray-800">Bachelor of Arts in Economics and Statistics (BA - Eco. Stat)</span>
                        <span class="text-gray-500">2024/2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-dashboard>
