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

        <!-- Sidebar -->
        @include('partials.side-bar')


        <!-- Sidebar Toggle Button -->
        <button id="menu-btn" class="menu-btn" onclick="toggleSidebar()">☰</button>

        <!-- Theme & Language Buttons (Top Right) -->
        @livewire('language-selector')


        <main class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-12 items-center p-6 max-w-4xl mx-auto">
            <div class="text-left">
                <h3 class="text-3xl font-semibold mb-4">Hello, I'm Samuel</h3>
                <h2 class="text-6xl font-semibold mb-4">I MAKE APPS</h2>
                <p class="max-w-4xl text-lg text-gray-600 dark:text-gray-400">
                    I'm a cross-platform application developer currently studying AI and Big Data.
                </p>
                <p class="max-w-4xl text-lg text-gray-600 dark:text-gray-400">
                    Additionally, i work on bussiness management softwares through laravel
                </p>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('storage/img/shiba.png') }}" class="rounded-lg shadow-lg" alt="Profile Image">
            </div>
        </main>

        <h3 class="text-3xl font-semibold mb-4 text-center">My work</h3>


        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-6 max-w-5xl mx-auto">
            <div class="card" data-id="foodieguard">
                <a href="{{ route('optimal-route-caluclator') }}">
                    <img src="https://nationwidetraining.com.au/wp-content/uploads/2023/06/Understanding-Transport-Logistics.jpg"
                        alt="" class="project-picture" />
                </a>
                <div class="card-content">
                    <a href="{{ route('foodieguard') }}">
                        <h5 class="card-title">FoodieGuard</h5>
                    </a>
                    <p class="card-text">An app made for finding restaurants based on your alimentary requirements.</p>
                </div>
            </div>


            <div class="card">
                <a href="{{ route('optimal-route-caluclator') }}">
                    <img src="https://nationwidetraining.com.au/wp-content/uploads/2023/06/Understanding-Transport-Logistics.jpg"
                        alt="" class="project-picture" />
                </a>
                <div class="card-content">
                    <a href="{{ route('meteorological-predictor') }}">
                        <h5 class="card-title">Meteorological predictor model</h5>
                    </a>
                    <p class="card-text">An application to classify the Meteorological status based on an SVM model</p>

                </div>
            </div>

            <div class="card">
                <a href="{{ route('optimal-route-caluclator') }}">
                    <img src="https://nationwidetraining.com.au/wp-content/uploads/2023/06/Understanding-Transport-Logistics.jpg"
                        alt="" class="project-picture" />
                </a>
                <div class="card-content">
                    <a href="{{ route('optimal-route-caluclator') }}">
                        <h5 class="card-title">Optimal route calculator</h5>
                    </a>
                    <p class="card-text">An application to optimize routes for expiring products implemented through AI
                        and Dijkstra algorithm</p>

                </div>
            </div>
        </section>
    </div>
</body>

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
