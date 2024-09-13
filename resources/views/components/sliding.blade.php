<div class="flex flex-col md:flex-row w-full bg-gray-100">
    <!-- Carousel Div -->
    <div id="default-carousel" class="relative w-full md:w-2/3 overflow-hidden" data-carousel="slide">
        <!-- Carousel Wrapper -->
        <div class="relative p-8 overflow-hidden h-[35vh] md:h-[60vh] lg:h-[80vh] shadow-lg">
            <!-- Item 1 -->
            <div class="block duration-700 ease-in-out" data-carousel-item>
                <img src="https://portal.udom.ac.tz/frontend/web/uploads/files/images/service_1124_5_1_2024_07_3107_42_50.jpg" class="absolute block w-full h-full object-cover object-center rounded-lg" alt="Image 1">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/image5.jpg') }}" class="absolute block w-full h-full object-cover object-center rounded-lg" alt="Image 2">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://portal.udom.ac.tz/frontend/web/uploads/files/images/service_1124_5_1_2024_07_3107_42_50.jpg" class="absolute block w-full h-full object-cover object-center rounded-lg" alt="Image 3">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/image6.jpg') }}" class="absolute block w-full h-full object-cover object-center rounded-lg" alt="Image 4">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/image9.jpg') }}" class="absolute block w-full h-full object-cover object-center rounded-lg" alt="Image 5">
            </div>
        </div>
        <!-- Slider Indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-4 h-4 bg-gray-300 rounded-full focus:ring-2 focus:ring-gray-500 hover:bg-gray-400 transition" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-4 h-4 bg-gray-300 rounded-full focus:ring-2 focus:ring-gray-500 hover:bg-gray-400 transition" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-4 h-4 bg-gray-300 rounded-full focus:ring-2 focus:ring-gray-500 hover:bg-gray-400 transition" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-4 h-4 bg-gray-300 rounded-full focus:ring-2 focus:ring-gray-500 hover:bg-gray-400 transition" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-4 h-4 bg-gray-300 rounded-full focus:ring-2 focus:ring-gray-500 hover:bg-gray-400 transition" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider Controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70">
                <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70">
                <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- This Week Section -->
    <div class="max-w-lg mx-auto p-4 md:w-1/3 bg-white shadow-lg transition-all duration-500 hover:shadow-2xl hover:scale-105">
    <h1 class="text-2xl font-bold text-gray-800 px-5 mb-6">Trading This Week</h1>

    <!-- This Week Item 1 -->
    <div class="flex items-center bg-white border-l-4 border-blue-600 rounded-lg shadow-md p-4 mb-4 transition transform hover:scale-105 hover:shadow-lg">
        <div class="flex-shrink-0 bg-blue-600 text-white text-center p-4 rounded-l-lg">
            <div class="text-sm font-semibold">Aug</div>
            <div class="text-2xl font-bold">29</div>
        </div>
        <div class="ml-4">
            <h3 class="text-lg font-semibold text-gray-800">The 10th Graduation Ceremony at NM-AIST</h3>
            <p class="text-gray-600 text-sm">The Nelson Mandela African Institution of Science and Technology...</p>
        </div>
    </div>

    <!-- This Week Item 2 -->
    <div class="flex items-center bg-white border-l-4 border-yellow-600 rounded-lg shadow-md p-4 mb-4 transition transform hover:scale-105 hover:shadow-lg">
        <div class="flex-shrink-0 bg-blue-600 text-white text-center p-4 rounded-l-lg">
            <div class="text-sm font-semibold">Sep</div>
            <div class="text-2xl font-bold">30</div>
        </div>
        <div class="ml-4">
            <h3 class="text-lg font-semibold text-gray-800">Public Notice for Prospective Students (2024/2025 Academic Year)</h3>
            <p class="text-gray-600 text-sm">The Nelson Mandela African Institution of Science and Technology...</p>
        </div>
    </div>

    <!-- This Week Item 3 -->
    <div class="flex items-center bg-white border-l-4 border-yellow-600 rounded-lg shadow-md p-4 mb-4 transition transform hover:scale-105 hover:shadow-lg">
        <div class="flex-shrink-0 bg-blue-600 text-white text-center p-4 rounded-l-lg">
            <div class="text-sm font-semibold">Jul</div>
            <div class="text-2xl font-bold">31</div>
        </div>
        <div class="ml-4">
            <h3 class="text-lg font-semibold text-gray-800">Invitation to Public Talk: “The Science Behind Global Change” by Prof. em. Dr. Karl Fleischmann</h3>
            <p class="text-gray-600 text-sm">We are excited to invite you to an enlightening...</p>
        </div>
    </div>
</div>

</div>
