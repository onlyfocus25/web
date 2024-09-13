    <style>
        nav {
            position: sticky; /* Sticky positioning for navbar */
            top: 0; /* Stick to the top of the viewport */
            z-index: 1000; /* Ensure navbar stays above other content */
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
        }

        .dropdown-arrow::after {
            content: '\25BC'; /* Down arrow symbol */
            margin-left: 0.5rem;
            font-size: 0.75rem;
        }

        .dropdown-menu {
            background-color: #011224; /* Dark blue background */
            color: #ecf0f1; /* Light grey text */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
        }

        .dropdown-menu li {
            border-bottom: 1px solid #34495e; /* Darker blue border */
        }

        .dropdown-menu li:last-child {
            border-bottom: none; /* Remove border for last item */
        }

        .dropdown-menu a {
            display: block;
            padding: 0.75rem 1rem;
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        .dropdown-menu a:hover {
            color: #0c0c0c; /* Dark text on hover */
            background-color: #3badab; /* Highlight background on hover */
        }
    </style>

    <!-- Navbar -->
    <nav id="navbar" class="bg-green-500 justify-between p-4 shadow-md transition-colors">
        <div class="container mx-auto">
            <div class="flex justify-between py-2">
                <!-- Navbar Menu -->
                <div class="flex w-full justify-center">
                    <ul class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-4">
                        <!-- Home Link -->
                        <li><a href="#home" class="text-white hover:text-gray-900 font-semibold">Home</a></li>

                        <!-- About SJUIT Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-about')">
                                About SJUIT
                            </button>
                            <ul id="dropdown-about" class="hidden absolute dropdown-menu rounded-lg w-[380px] mt-2 left-1/2 transform -translate-x-1/2">
                                <li><a href="#">Background</a></li>
                                <li><a href="#">Mission and Vision</a></li>
                                <li><a href="#">DMI in Africa</a></li>
                                <li><a href="#">University Council</a></li>
                                <li><a href="#">Administration</a></li>
                                <li><a href="#">University Almanac</a></li>
                                <li><a href="#">University Quality Assurance Directorate</a></li>
                                <li><a href="#">DIRECTORATE OF RESEARCH AND POSTGRADUATE STUDIES (DRPS)</a></li>
                                <li><a href="#">Group Of Institutions</a></li>
                                <li><a href="#">SJUIT ACCREDITATION BY TCU</a></li>
                                <li><a href="#">CSSR & OUTREACH</a></li>
                            </ul>
                        </li>

                        <!-- Academic Services Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-academic-units')">
                                Academic Services
                            </button>
                            <ul id="dropdown-academic-units" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2">
                                <li><a href="#">Prospectus</a></li>
                                <li><a href="#">Students Diary</a></li>
                                <li><a href="#">Students Bylaws</a></li>
                                <li><a href="#">Examination Regulations</a></li>
                                <li><a href="#">Examination Results</a></li>
                                <li><a href="#">Student Almanac</a></li>
                                <li><a href="#">GILT</a></li>
                            </ul>
                        </li>

                        <!-- Admission Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-admission')">
                                Admission
                            </button>
                            <ul id="dropdown-admission" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2">
                                <li><a href="#">List Of Programmes</a></li>
                                <li><a href="#">Short Courses</a></li>
                                <li><a href="#">Entry Requirements</a></li>
                                <li><a href="#">Degree Fees Structure</a></li>
                                <li><a href="#">Diploma Fees Structure</a></li>
                                <li><a href="#">STUDY</a></li>
                                <li><a href="#">SETS THE BE</a></li>
                                <li><a href="#">EDUCATION</a></li>
                                <li><a href="#">CHES</a></li>
                            </ul>
                        </li>

                        <!-- ICT Services Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-ict-services')">
                                ICT Services
                            </button>
                            <ul id="dropdown-ict-services" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2">
                                <li><a href="#">Email Login</a></li>
                                <li><a href="#">Vcampus-Student Login - SJCET</a></li>
                                <li><a href="#">Vcampus-Student Login - SJCHS</a></li>
                                <li><a href="#">Vcampus-Staff Login - SJCET</a></li>
                                <li><a href="#">Vcampus-Staff Login - SJCHS</a></li>
                                <li><a href="#">Alumni</a></li>
                                <li><a href="#">Digital Library</a></li>
                                <li><a href="#">Online & Virtula</a></li>
                            </ul>
                        </li>

                        <!-- Campus Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-campus')">
                                Colleges
                            </button>
                            <ul id="dropdown-campus" class="hidden absolute dropdown-menu rounded-lg w-[600px] mt-2 left-1/2 transform -translate-x-1/2 grid grid-cols-2 gap-4 p-4">
                                <li>
                                    <a href="#" class="font-semibold">College of Engineering and Technology</a>
                                    <ul class="ml-4">
                                        <li><a href="#">Department of Mechanical Engineering</a></li>
                                        <li><a href="#">Department of Electrical Engineering</a></li>
                                        <li><a href="#">Department of Computer Science</a></li>
                                        <li><a href="#">Department of Civil Engineering</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="font-semibold">College of Health Science</a>
                                    <ul class="ml-4">
                                        <li><a href="#">Department of Nursing</a></li>
                                        <li><a href="#">Department of Public Health</a></li>
                                        <li><a href="#">Department of Pharmacy</a></li>
                                        <li><a href="#">Department of Clinical Medicine</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Policies Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-policies')">
                                Policies
                            </button>
                            <ul id="dropdown-policies" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2">
                                <li><a href="#">Rolling Strategic Plan</a></li>
                                <li><a href="#">ANNUAL ACTION PLAN</a></li>
                            </ul>
                        </li>

                        <!-- Research Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-research')">
                                Research
                            </button>
                            <ul id="dropdown-research" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2">
                                <li><a href="#">Research Projects</a></li>
                                <li><a href="#">Publications</a></li>
                                <li><a href="#">Journals</a></li>
                                <li><a href="#">Students Projects</a></li>
                                <li><a href="#">Projects Exhibition</a></li>
                            </ul>
                        </li>

                        <!-- CSR Dropdown -->
                        <li class="relative">
                            <button class="text-white dropdown-arrow hover:text-gray-900 font-semibold focus:outline-none" onclick="toggleDropdown('dropdown-csr')">
                                CSR
                            </button>
                            <ul id="dropdown-csr" class="hidden absolute dropdown-menu rounded-lg w-[300px] mt-2 left-1/2 transform -translate-x-1/2">
                                <li><a href="#">Prospectus</a></li>
                                <li><a href="#">Students Diary</a></li>
                                <li><a href="#">Students Bylaws</a></li>
                                <li><a href="#">Examination Regulations</a></li>
                                <li><a href="#">Examination Results</a></li>
                                <li><a href="#">Student Almanac</a></li>
                                <li><a href="#">GILT</a></li>
                            </ul>
                        </li>

                        <!-- Gallery Link -->
                        <li><a href="#" class="text-white hover:text-gray-900 font-semibold">Gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- JavaScript to handle dropdown and sticky header -->
    <script>
        // Toggle dropdown menus and close others
        function toggleDropdown(id) {
            const dropdowns = [
                'dropdown-about', 
                'dropdown-academic-units', 
                'dropdown-admission', 
                'dropdown-ict-services', 
                'dropdown-policies', 
                'dropdown-campus', 
                'dropdown-research', 
                'dropdown-csr'
            ];
            dropdowns.forEach(dropdownId => {
                const dropdown = document.getElementById(dropdownId);
                if (dropdownId === id) {
                    dropdown.classList.toggle('hidden');
                } else {
                    dropdown.classList.add('hidden');
                }
            });
        }

        // Close dropdown if clicked outside
        window.addEventListener('click', function(event) {
            const dropdowns = [
                'dropdown-about', 
                'dropdown-academic-units', 
                'dropdown-admission', 
                'dropdown-ict-services', 
                'dropdown-campus', 
                'dropdown-policies', 
                'dropdown-research', 
                'dropdown-csr'
            ];
            dropdowns.forEach(id => {
                const dropdown = document.getElementById(id);
                if (!dropdown.contains(event.target) && !event.target.closest('button')) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>
