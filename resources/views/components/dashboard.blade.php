<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/dmi.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        header {
            background-color: #34D399; /* Adjusted color for visibility */
        }

        header .header-title {
            margin-left: 0.75rem;
        }

        .stepper {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 4rem;
            z-index: 10;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            text-align: center;
            padding: 0 5px;
        }

        .step-number {
            width: 1.5rem;
            height: 1.5rem;
            background-color: #e0e0e0;
            color: #000;
            border-radius: 50%;
            display: flex;
            font-weight: 600;
            font-size: 0.875rem;
            align-items: center;
            justify-content: center;
        }

        .step::before {
            content: '';
            position: absolute;
            top: 1.75rem;
            left: 50%;
            width: 50%;
            height: 2px;
            background-color: #e0e0e0;
            z-index: -1;
        }

        .step:first-child::before {
            display: none;
        }

        .step.completed .step-number {
            background-color: #4caf50;
            color: #fff;
        }

        .step.completed .step-number::before {
            content: '\f00c'; /* Font Awesome check mark */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: #fff;
            font-size: 1.25rem;
        }

        .step.active {
            color: #2196f3;
        }

        .step.active .step-number {
            background-color: #2196f3;
            color: #fff;
        }

        .step.locked {
            color: #b0b0b0;
        }

        .step.locked .step-number {
            background-color: #b0b0b0;
            color: #fff;
        }

        aside {
            position: fixed;
            top: 4rem;
            left: 0;
            width: 16rem;
            height: calc(100vh - 4rem);
            background-color: #2d3748;
            color: #edf2f7;
            padding: 1rem;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            overflow-y: auto;
            box-shadow: 2px 0 4px rgba(0,0,0,0.1);
        }

        aside.open {
            transform: translateX(0);
        }

        aside .closeSidebar {
            display: none;
        }

        @media (min-width: 640px) {
            aside {
                transform: translateX(0);
                position: static;
                height: auto;
            }
            aside .closeSidebar {
                display: none;
            }
        }

        aside nav a, aside nav button {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            color: #edf2f7;
            font-size: 0.875rem;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        aside nav a:hover, aside nav button:hover {
            background-color: #4a5568;
            color: #edf2f7;
        }

        aside nav a i, aside nav button i {
            margin-right: 0.5rem;
        }

        aside nav .active {
            background-color: #4a5568;
            color: #edf2f7;
        }

        .main-content {
            padding: 1rem;
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            flex: 1;
        }

    </style>

</head>
<body>

    <!-- Header -->
    <header class="bg-green-500 shadow-sm sticky top-0 z-50 w-full">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo and Home Link -->
                <div class="flex items-center">
                    <button id="menuToggle" aria-label="Toggle menu" class="text-white sm:hidden">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                    <img class="h-8 w-8 ml-3 bg-white rounded-full" src="{{ asset('images/dmi.png') }}" alt="Logo">
                    <span class="ml-3 text-lg font-semibold text-white header-title">SJUIT</span>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('home') }}" class="text-white inline-flex items-center px-1 pt-1 text-sm font-medium hover:text-gray-300 transition">Home</a>
                    </div>
                </div>

                <!-- Right Side Contact and Deadline -->
                <div class="hidden sm:flex items-center space-x-4">
                    <div class="flex flex-col text-sm text-white">
                        <span>Admission Contact: +255755089545</span>
                    </div>
                    <div class="bg-red-600 text-white text-sm px-3 py-1 rounded-md">
                        <span>DIPLOMA DEADLINE:</span>
                        <span>18/09/2024 00:00</span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Container -->
    <div class="flex flex-col md:flex-row flex-1">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar">
            <div class="flex justify-between items-center mb-6">
                <!-- User Info -->
                <div class="flex items-center">
                    <img src="{{ asset('images/rehema.jpg') }}" alt="User Image" class="h-10 w-10 rounded-full">
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">{{ auth()->user()->full_name }}</p>
                    </div>
                </div>
                <!-- Close Sidebar Button -->
                <button id="closeSidebar" class="closeSidebar text-gray-400">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="flex flex-col space-y-2">
                <a href="{{ route('profile') }}" class="block py-2.5 px-4 rounded bg-blue-500 text-white hover:bg-blue-600 transition duration-200">
                    <i class="fas fa-user"></i> My Application
                </a>
                <button class="block py-2.5 px-4 rounded bg-blue-500 text-white hover:bg-blue-600 transition duration-200">
                    <i class="fas fa-level-up-alt"></i> {{ auth()->user()->level_applying }}
                </button>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="block py-2.5 px-4 rounded hover:bg-red-500 hover:text-white transition duration-200">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="main-content">
            @if (Route::currentRouteName() !== 'home')  <!-- Check if the current route is NOT 'home' -->
                <div class="stepper">
                    <div class="step" data-step="1">
                        <div class="step-number bg-gray-300 text-gray-900"></div>
                        <div class="step-label">Personal Information</div>
                    </div>
                    <div class="step" data-step="2">
                        <div class="step-number bg-gray-300 text-gray-900"></div>
                        <div class="step-label">Education</div>
                    </div>
                    <div class="step" data-step="3">
                        <div class="step-number bg-gray-300 text-gray-900"></div>
                        <div class="step-label">Program Selection</div>
                    </div>
                    <div class="step" data-step="4">
                        <div class="step-number bg-gray-300 text-gray-900"></div>
                        <div class="step-label">Submission</div>
                    </div>
                </div>
            @endif

            <!-- Content -->
            @yield('content')
        </div>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        let currentStep = 1;

        if (window.location.href.includes('education')) {
            currentStep = 2;
        } else if (window.location.href.includes('program')) {
            currentStep = 3;
        } else if (window.location.href.includes('confirmation')) {
            currentStep = 4;
        }

        document.querySelectorAll('.step').forEach(step => {
            const stepNumber = parseInt(step.dataset.step);
            step.classList.remove('active', 'completed', 'locked');
            
            if (stepNumber < currentStep) {
                step.classList.add('completed');
            } else if (stepNumber === currentStep) {
                step.classList.add('active');
            } else {
                step.classList.add('locked');
            }
        });

        // Sidebar Toggle
        document.getElementById('menuToggle').addEventListener('click', () => {
            document.getElementById('sidebar').classList.toggle('open');
        });

        document.getElementById('closeSidebar').addEventListener('click', () => {
            document.getElementById('sidebar').classList.remove('open');
        });
    </script>
</body>
</html>
