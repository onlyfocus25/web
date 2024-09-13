<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
    <style>
        .swiper-button-next, .swiper-button-prev {
            color: #007bff; /* Customize navigation button color */
        }
        .swiper-pagination-bullet {
            background: #007bff; /* Customize pagination bullet color */
        }
    </style>
</head>

<body>
    <!-- Welcome Note and Announcements Row -->
    <div class="py-10 bg-gradient-to-r from-green-400 to-blue-500 text-white">
        <header class="text-center mt-5">
            <div class="container mx-auto px-4">
                <h3 class="text-3xl lg:text-4xl font-bold">Welcome To St. Joseph University In Tanzania (SJUIT)</h3>
                <hr class="my-4 border-t-2 border-white w-1/4 mx-auto">
            </div>
        </header>

        <div class="flex flex-wrap lg:flex-nowrap justify-between m-5">
            <!-- Welcome Note Section -->
            <div class="w-full lg:w-2/3 mb-4 lg:mb-0">
                <div class="flex flex-col lg:flex-row items-center bg-white text-gray-800 rounded-lg shadow-lg p-6">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQV_buLjLcdiBna3N24rUPGiRFQlnJq0dYBA&s"
                         class="rounded-lg mb-4 lg:mb-0 lg:mr-6 shadow-md w-full lg:w-60 h-60 object-cover" 
                         alt="Prof. Aloys Ntanturo Mvuma">
                    <div class="text-center lg:text-left">
                        <h5 class="text-2xl font-semibold">Prof. Aloys Ntanturo Mvuma</h5>
                        <p class="text-gray-600 mb-4">Vice Chancellor</p>
                        <p class="text-justify">On behalf of the Management, I am delighted to welcome you all to St. Joseph University in Tanzania (SJUIT), a premier institution dedicated to fostering academic excellence and innovation. At SJUIT, we pride ourselves on a rich history of academic distinction and commitment to shaping the future through education and research in a variety of disciplines. We are proud to be at the forefront of developing leaders and innovators who will make a meaningful impact in their fields and communities.</p>
                        <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition ease-in-out duration-300">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Vertical Line Separator -->
            <div class="hidden lg:block border-l-2 border-gray-300 mx-5 h-auto"></div>

            <!-- Announcements Section -->
            <div class="w-full lg:w-1/3">
                <h4 class="text-2xl lg:text-3xl font-extrabold text-white mb-4 text-center lg:text-left">Announcements</h4>
                <div class="space-y-4">
                    <div class="bg-white shadow-lg p-4 rounded-lg hover:shadow-xl transition transform hover:-translate-y-1 duration-300">
                        <i class="fas fa-bullhorn text-yellow-600"></i>
                        <span class="ml-2 text-gray-800">Joining Instruction for Government Sponsored Students for 2024/2025</span>
                        <span class="bg-blue-500 text-white text-xs font-bold py-1 px-2 rounded-full ml-2">New</span>
                        <p class="text-gray-600 text-sm mt-2">25 Jul 2024</p>
                        <a href="#" class="text-blue-600 hover:underline">Download</a>
                    </div>
                    <div class="bg-white shadow-lg p-4 rounded-lg hover:shadow-xl transition transform hover:-translate-y-1 duration-300">
                        <i class="fas fa-bullhorn text-yellow-600"></i>
                        <span class="ml-2 text-gray-800">Joining Instruction for Certificate & Diploma Students under private sponsorship 2024/2025</span>
                        <span class="bg-blue-500 text-white text-xs font-bold py-1 px-2 rounded-full ml-2">New</span>
                        <p class="text-gray-600 text-sm mt-2">25 Jul 2024</p>
                        <a href="#" class="text-blue-600 hover:underline">Download</a>
                    </div>
                </div>
                <div class="text-center lg:text-left">
                    <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition ease-in-out duration-300">
                        See More Announcements
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <div class="m-5 mt-6">
        <h4 class="text-3xl font-extrabold text-white mb-3">News</h4>
        
        <!-- Swiper -->
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.sjuit.ac.tz/file_up/stjoseph_sports.jpeg" class="w-full h-48 object-cover" alt="News Image">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold mb-2">The Foundation Stone at Rukwa Campus is Laid by President</h5>
                        <p class="text-gray-600 text-sm mb-2"><small>24 Jul 2024</small></p>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.sjuit.ac.tz/file_up/stjoseph_sports.jpeg" class="w-full h-48 object-cover" alt="News Image">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold mb-2">MUST in collaboration with the UNESCO Dar es Salaam Field Office successfully organised a Technical Meeting for the CFIT project</h5>
                        <p class="text-gray-600 text-sm mb-2"><small>13 May 2024</small></p>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.sjuit.ac.tz/file_up/stjoseph_sports.jpeg" class="w-full h-48 object-cover" alt="News Image">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold mb-2">MUST NA AMSHAAMSHA FOUNDATION WAINGIA MAKUBALIANO YA KUSHIRIKIANA</h5>
                        <p class="text-gray-600 text-sm mb-2"><small>09 May 2024</small></p>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>

                <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.sjuit.ac.tz/file_up/stjoseph_sports.jpeg" class="w-full h-48 object-cover" alt="News Image">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold mb-2">MUST NA AMSHAAMSHA FOUNDATION WAINGIA MAKUBALIANO YA KUSHIRIKIANA</h5>
                        <p class="text-gray-600 text-sm mb-2"><small>09 May 2024</small></p>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>

                <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.sjuit.ac.tz/file_up/stjoseph_sports.jpeg" class="w-full h-48 object-cover" alt="News Image">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold mb-2">MUST NA AMSHAAMSHA FOUNDATION WAINGIA MAKUBALIANO YA KUSHIRIKIANA</h5>
                        <p class="text-gray-600 text-sm mb-2"><small>09 May 2024</small></p>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>

                <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.sjuit.ac.tz/file_up/stjoseph_sports.jpeg" class="w-full h-48 object-cover" alt="News Image">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold mb-2">MUST NA AMSHAAMSHA FOUNDATION WAINGIA MAKUBALIANO YA KUSHIRIKIANA</h5>
                        <p class="text-gray-600 text-sm mb-2"><small>09 May 2024</small></p>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>

                <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.sjuit.ac.tz/file_up/stjoseph_sports.jpeg" class="w-full h-48 object-cover" alt="News Image">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold mb-2">MUST NA AMSHAAMSHA FOUNDATION WAINGIA MAKUBALIANO YA KUSHIRIKIANA</h5>
                        <p class="text-gray-600 text-sm mb-2"><small>09 May 2024</small></p>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <!-- End of News Section -->

    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000, // Delay between slides in ms
                disableOnInteraction: false, // Allow autoplay to continue after user interaction
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>
</html>
