<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samuel Robayo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/home.js', 'resources/css/homepage.css', 'resources/css/homepage-dark.css'])

</head>


<body class="font-sans antialiased bg-gray-100 text-gray-900 dark:bg-black dark:text-white " id="body">
    <div class="petal-container"></div>
    <div class="flex flex-col min-h-screen">
        <header class="py-6 flex flex-col items-center">
            {{-- <h1 class="text-4xl font-semibold">Samuel Robayo</h1> --}}
            <nav class="mt-4 mr-10">
                <ul class="flex space-x-4 ">
                    <button class="theme-toggle" type="button" title="Toggle theme" aria-label="Toggle theme">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="1em" height="1em"
                            class="theme-toggle__dark-side" fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M16 .5C7.4.5.5 7.4.5 16S7.4 31.5 16 31.5 31.5 24.6 31.5 16 24.6.5 16 .5zm0 28.1V3.4C23 3.4 28.6 9 28.6 16S23 28.6 16 28.6z" />
                        </svg>
                    </button>
                    <li><a href="{{ route('home') }}" class="py-2 px-4">Home</a></li>
                    </li>
                    <li><a href="{{ route('experience') }}" class="py-2 px-4">Experience</a>
                    </li>
                    <li><a href="#" class="py-2 px-4  ">About
                            me</a></li>
                    <li><a href="{{ route('contact') }}" class="py-2 px-4 ">Contact
                            me</a></li>
                </ul>
            </nav>
        </header>
        <header class="profile-container ml-16">
            <img src="{{ asset('storage/img/picture.png') }}" alt="Profile Picture" class="profile-img">
            {{-- <span class="profile-name">Samuel Robayo</span> --}}
            <a href="#" class="py-2 px-4">Samuel Robayo</a>

        </header>


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
                <img src="{{ asset('storage/img/picture.png') }}" class="rounded-lg shadow-lg" alt="Profile Image">
            </div>
        </main>

        <h3 class="text-3xl font-semibold mb-4 text-center">My work</h3>


        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-10 max-w-6xl mx-auto">
            <div class="card" data-id="foodieguard">
                <a href="{{ route('foodieguard') }}" class="card-link">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="FoodieGuard Logo" class="card-img">
                </a>
                <div class="card-content">
                    <a href="{{ route('foodieguard') }}">
                        <h5 class="card-title">FoodieGuard</h5>
                    </a>
                    <p class="card-text">An app made for finding restaurants based on your alimentary requirements.</p>
                </div>
            </div>


            <div class="card">
                <a href="{{ route('meteorological-predictor') }}">
                    <img src="{{ asset('storage/img/meteo.png') }}" alt="" />
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

        <footer class="py-6 text-center text-sm text-gray-500 dark:text-gray-400">
            <p>&copy; {{ date('Y') }} Bomboclat - Creado con Laravel</p>
        </footer>
    </div>
</body>

</html>
