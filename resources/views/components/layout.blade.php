<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Ensure this is pointing to your compiled CSS -->

    <!-- Link to the favicon -->
    <link rel="icon" href="{{ asset('images/dmi.png') }}" type="image/x-icon">
    <!--fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
  rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
<!--Font awaresome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
     <!-- Header -->
    <header class="bg-blue-700 text-white">
        <div class="container mx-auto">
            <section class="flex justify-center lg:justify-between items-center p-1 flex-wrap">
                <!-- Left Section -->
                <div class="hidden lg:flex items-center space-x-4">
                    <span class="flex items-center space-x-2">
                        <i class="fa fa-phone"></i>
                        <span>+255 699 635 000</span>
                    </span>
                    <span class="flex items-center space-x-2">
                        <i class="fa fa-envelope"></i>
                        <span>info@sjuit.ac.tz</span>
                    </span>
                </div>

                <!-- Social Icons -->
                <div class="hidden lg:flex space-x-4">
                    <a href="#" class="text-white hover:text-gray-300"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fa fa-google"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fa fa-linkedin"></i></a>
                </div>

                <!-- Innovation Button -->
                <div class="flex space-x-4 mt-4 lg:mt-0">
                    <button id="innovation-btn" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-green-400">
                        Innovation Hub
                    </button>

                    <!-- Click Here to Apply Button -->
                    <button id="apply-btn" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <a href="{{route('register_home')}}" target="_blank">Click Here to Apply</a>
                    </button>
                </div>
            </section>
        </div>
    </header>
    <!-- Ends Header -->

        <!-- Logo Header -->
<div class="relative w-full py-2 bg-gray-900 flex items-center shadow-lg">
    <div class="w-1/6 flex justify-center">
        <img src="{{asset('images/dmi.png')}}" alt="Logo Left" class="h-16 shadow-md">
    </div>
    <div class="w-4/6 text-center">
        <div class="text-4xl font-extrabold text-white mb-2 leading-tight">St. Joseph University In Tanzania (SJUIT)</div>
        <div style="font-family: 'Bradley Hand ITC', cursive;" class="text-2xl text-orange-400">Where your dreams are nurtured</div>
    </div>
    <div class="w-1/6 flex justify-center">
        <!-- Optional: Add a second logo or image on the right if needed -->
    </div>
</div>
<!-- End of Logo Header -->



<!-- Navbar -->
<nav id="main-navbar" class="p-4 shadow-md bg-green-500">
    <div class="container mx-auto">
        <div class="flex justify-between py-2">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="{{asset('images/dmi.png')}}" alt="Logo" class="h-12 rounded-lg w-auto hidden bg-white" id="sticky-logo">
            </div>
            <!-- Navbar Menu -->
            <div class="flex w-full justify-center">
                <ul class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-4">
                    <!-- Home Link -->
                    <li><a href="{{ route('index') }}" class="text-white hover:text-gray-900 font-semibold active">Home</a></li>

                    <!-- About SJUIT Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('about-dropdown')">
                            About SJUIT
                        </button>
                        <ul id="about-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[380px] mt-2 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg z-10">
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Background</a></li>
                            <li><a href="{{ route('mission_vission') }}" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Mission and Vision</a></li>
                            <li><a href="{{ route('dmi_in_africa') }}" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">DMI in Africa</a></li>
                            <li><a href="{{ route('un_council') }}" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">University Council</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Administration</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">University Almanac</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">University Quality Assurance Directorate</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">DRPS</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Group Of Institutions</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">SJUIT Accreditation by TCU</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">CSSR & Outreach</a></li>
                        </ul>
                    </li>

                    <!-- Academic Services Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('academic-dropdown')">
                            Academic Services
                        </button>
                        <ul id="academic-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg z-10">
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Prospectus</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Students Diary</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Students Bylaws</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Examination Regulations</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Examination Results</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Student Almanac</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">GILT</a></li>
                        </ul>
                    </li>

                    <!-- Admission Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('admission-dropdown')">
                            Admission
                        </button>
                        <ul id="admission-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg z-10">
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">List Of Programmes</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Short Courses</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Entry Requirements</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Degree Fees Structure</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Diploma Fees Structure</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Study</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">SETS the BE</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Education</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">CHES</a></li>
                        </ul>
                    </li>

                    <!-- ICT Services Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('ict-dropdown')">
                            ICT Services
                        </button>
                        <ul id="ict-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg z-10">
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Email Login</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Vcampus-Student Login - SJCET</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Vcampus-Student Login - SJCHS</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Vcampus-Staff Login - SJCET</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Vcampus-Staff Login - SJCHS</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Alumni</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Digital Library</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Online & Virtual</a></li>
                        </ul>
                    </li>

                    <!-- Campus Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('campus-dropdown')">
                            Colleges
                        </button>
                        <ul id="campus-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[600px] mt-2 left-1/2 transform -translate-x-1/2 grid grid-cols-2 gap-4 p-4 bg-green-300 shadow-lg z-10">
                            <li>
                                <a href="#" class="font-semibold block px-4 py-2 hover:rounded-lg hover:bg-green-400">College of Engineering and Technology</a>
                                <ul class="ml-4">
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Mechanical Engineering</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Electrical Engineering</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Computer Science</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Civil Engineering</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="font-semibold block px-4 py-2 hover:rounded-lg hover:bg-green-400">College of Health Science</a>
                                <ul class="ml-4">
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Nursing</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Public Health</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Pharmacy</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Department of Clinical Medicine</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Policies Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('policies-dropdown')">
                            Policies
                        </button>
                        <ul id="policies-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg z-10">
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Rolling Strategic Plan</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Annual Action Plan</a></li>
                        </ul>
                    </li>

                    <!-- Research Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('research-dropdown')">
                            Research
                        </button>
                        <ul id="research-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg z-10">
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Research Projects</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Publications</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Journals</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Students Projects</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Projects Exhibition</a></li>
                        </ul>
                    </li>

                    <!-- CSR Dropdown -->
                    <li class="relative">
                        <button class="text-white hover:text-gray-900 dropdown-arrow font-semibold focus:outline-none" onclick="toggleDropdown('csr-dropdown')">
                            CSR
                        </button>
                        <ul id="csr-dropdown" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg z-10">
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Prospectus</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Students Diary</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Students Bylaws</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Examination Regulations</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Examination Results</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">Student Almanac</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:rounded-lg hover:bg-green-400">GILT</a></li>
                        </ul>
                    </li>

                    <!-- Gallery Link -->
                    <li><a href="#" class="text-white hover:text-gray-900 font-semibold">Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- CSS -->
<style>
    #main-navbar.sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    #sticky-logo.hidden {
        display: none;
    }

    /* Dropdown Menu Styling */
    .dropdown-menu {
        z-index: 1001; /* Ensure dropdowns are above other elements */
    }

    /* Background color on hover for dropdown links */
    .dropdown-menu li a:hover {
        background-color: rgba(0, 128, 0, 0.7);
    }
</style>

<!-- JavaScript -->
<script>
    // Function to toggle dropdown visibility
    function toggleDropdown(dropdownId) {
        var dropdown = document.getElementById(dropdownId);
        var isHidden = dropdown.classList.contains('hidden');
        document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
            menu.classList.add('hidden');
        });
        if (isHidden) {
            dropdown.classList.remove('hidden');
        }
    }

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('li.relative')) {
            document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                menu.classList.add('hidden');
            });
        }
    });

    // Show logo when navbar becomes sticky
    document.addEventListener('DOMContentLoaded', function() {
        var navbar = document.getElementById('main-navbar');
        var stickyLogo = document.getElementById('sticky-logo');
        var stickyOffset = navbar.offsetTop;

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > stickyOffset) {
                navbar.classList.add('sticky');
                stickyLogo.classList.remove('hidden');
            } else {
                navbar.classList.remove('sticky');
                stickyLogo.classList.add('hidden');
            }
        });
    });
</script>



        {{ $slot }} <!-- This renders the content passed into the component -->




        <!-- Footer Section -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-5">
        <!-- Footer Content -->
        <div class="flex flex-col md:flex-row gap-12 mb-12">
            <!-- Contact Form Section -->
            <div class="flex-1">
                <h5 class="text-xl font-bold mb-6">Contact Us</h5>
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-400">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-400">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="subject" class="block text-gray-400">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-white">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-400">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-white" required></textarea>
                    </div>
                    <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition-colors duration-300">Send Message</button>
                </form>
            </div>

            <!-- Footer Links -->
            <div class="flex-1 grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- For Students -->
                <div>
                    <h5 class="text-xl font-bold mb-6">For Students</h5>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Student Information Management System (SIMS)
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> How to Apply
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Payment System
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Referee Recommendation System
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Book Accommodation
                        </li>
                    </ul>
                </div>

                <!-- For Staff -->
                <div>
                    <h5 class="text-xl font-bold mb-6">For Staff</h5>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> E-Office
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Travel Permit
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Employee Self Service
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Salary Slip
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Ajira Portal
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> eMrejesho
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div>
                    <h5 class="text-xl font-bold mb-6">Quick Links</h5>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> TCU
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> NACTVET
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Ministry of Education
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-400 mr-2"></i> Immigration
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-gray-700 pt-8 text-center">
            <p class="text-sm">&copy; 2024 St. Joseph University In Tanzania (SJUIT). All Rights Reserved.</p>
        </div>
    </div>
</footer>


<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.js"></script>
</body>
</html>
