<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJUIT ADMISSION</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Link to the favicon -->
    <link rel="icon" href="{{ asset('images/dmi.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (Using only the latest version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100 text-gray-800 font-poppins">

    <!-- Top Header Section -->
    <div class="bg-green-500 p-2 shadow-md sticky top-0 z-50">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <img src="{{ asset('images/dmi.png') }}" alt="SJUIT Admission Logo" class="h-16 mr-4 bg-gray-900 rounded-lg">
                <div>
                    <h1 class="text-xl md:text-2xl font-semibold text-blue-600">SJUIT Admission</h1>
                    <nav class="flex space-x-2 md:space-x-4 mt-2">
                        <a href="{{ route('register_home') }}" class="text-gray-900 font-medium hover:text-blue-700">Home</a>
                        <a href="#" class="text-gray-900 font-medium hover:text-blue-700">Instructions</a>
                    </nav>
                </div>
            </div>

            <!-- Application Windows -->
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                <div class="bg-white p-4 md:p-2 rounded-lg shadow-md text-center w-full md:w-44 transform transition-transform hover:-translate-y-2 hover:shadow-lg">
                    <h2 class="text-sm font-semibold text-blue-600">Diploma Application</h2>
                    <p class="text-xs text-gray-600 mt-2">Deadline: 10/09/2024</p>
                </div>
                <div class="bg-white p-4 md:p-2 rounded-lg shadow-md text-center w-full md:w-44 transform transition-transform hover:-translate-y-2 hover:shadow-lg">
                    <h2 class="text-sm font-semibold text-blue-600">Degree Application</h2>
                    <p class="text-xs text-gray-600 mt-2">Deadline: 18/09/2024</p>
                </div>
                <div class="bg-white p-4 md:p-2 rounded-lg shadow-md text-center w-full md:w-44 transform transition-transform hover:-translate-y-2 hover:shadow-lg">
                    <h2 class="text-sm font-semibold text-blue-600">Master's Application</h2>
                    <p class="text-xs text-gray-600 mt-2">Deadline: 25/09/2024</p>
                </div>
            </div>
        </div>
    </div>

    {{$slot}}

</body>

</html>
