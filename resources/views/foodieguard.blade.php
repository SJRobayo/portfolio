<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samuel Robayo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/homepage.css'])
    {{-- @bukStyles --}}
</head>
<body class="font-sans antialiased " id="body">
    <div class="petal-container"></div>
    <div class="flex flex-col min-h-screen">
        @include('partials.navigator')

        @include('partials.side-bar')
        <button id="menu-btn" class="menu-btn" onclick="toggleSidebar()">☰</button>
        @livewire('language-selector')
        <main class="flex-1 grid grid-cols-3 gap-12 items-start p-6 max-w-6xl mx-auto mt-20">

            <!-- Image Container (1/3 width) -->

            <div class="col-span-1 flex justify-start">
                <img src="{{ asset('storage/img/foodieguard.png') }}" class="rounded-lg shadow-lg w-48 md:w-64">
            </div>

            <!-- Text Container (2/3 width) -->
            
            <div class="col-span-2 text-left">
                <h2 class="text-6xl font-semibold mb-4">FoodieGuard</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    FoodieGuard is part of my final project in multiplatform application development at STUCOM.

                    It is an application designed to help users search for and categorize nearby restaurants based on
                    their dietary needs, with the goal of offering a set of safe dining options for their health.

                    The idea was born from observing the hospitality sector in Barcelona, where it has been noted that
                    customers rarely have the chance to carefully check the ingredients of the food being offered to
                    them.
                </p>
            </div>
        </main>

    </div>
</body>
<section class="flex justify-center">
    <video width="640" height="360" controls>
        <source src="{{ asset('storage/video/testvideo.mp4') }}" type="video/mp4">
        Tu navegador no soporta el elemento de video.
    </video>

</section>

</html>

<script>
    // Sidebar Toggle Function
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');

        // Trigger Progress Bar Animation When Sidebar Opens
        if (sidebar.classList.contains('active')) {
            document.querySelectorAll('.progress').forEach(progress => {
                let percent = progress.getAttribute('data-percent');
                progress.style.width = percent + "%";
            });
        } else {
            document.querySelectorAll('.progress').forEach(progress => {
                progress.style.width = "0%"; // Reset when closed
            });
        }
    }

    // Preserve Theme & Language on Reload
    document.addEventListener("DOMContentLoaded", function() {
        if (localStorage.getItem("theme") === "dark") {
            document.getElementById("body").classList.add("dark");
        }
        if (localStorage.getItem("lang")) {
            document.documentElement.lang = localStorage.getItem("lang");
        }
    });

    // Sidebar Toggle Function
</script>
