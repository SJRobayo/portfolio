<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samuel Robayo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/project.js', 'resources/css/homepage.css', 'resources/css/homepage-dark.css'])




</head>


<body class="font-sans antialiased bg-gray-100 text-gray-900 dark:bg-black dark:text-white" id="body">
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
                    <li><a href="#" class="py-2 px-4">Experience</a>
                    </li>
                    <li><a href="#" class="py-2 px-4  ">About
                            me</a></li>
                    <li><a href="#" class="py-2 px-4 ">Contact
                            me</a></li>
                </ul>
            </nav>
        </header>
        <header class="profile-container ml-16">
            <img src="{{ asset('storage/img/picture.png') }}" alt="Profile Picture" class="profile-img">
            {{-- <span class="profile-name">Samuel Robayo</span> --}}
            <a href="#" class="py-2 px-4">Samuel Robayo</a>

        </header>


        <section class="max-w-6xl mx-auto mt-12 p-6">
            <h2 class="text-4xl font-semibold text-center mb-12 project">My Background</h2>

            <!-- Labels for Columns -->
            <div class="grid grid-cols-2 gap-8 text-center mb-6">
                <h3 class="column-label">🎓 Formation</h3>
                <h3 class="column-label">💼 Experience</h3>
            </div>

            <div class="relative grid grid-cols-2 gap-8">
                <!-- Vertical Timeline Line -->
                <div class="absolute left-1/2 top-0 w-1 bg-pink-400 dark:bg-pink-600 h-full transform -translate-x-1/2">
                </div>

                <!-- Left Column - Formation -->
                <div class="space-y-8">
                    <div class="relative card p-6">
                        <span class="absolute -right-5 top-5 w-4 h-4 bg-pink-500 rounded-full shadow-lg"></span>
                        <p class="text-gray-600 dark:text-pink-300">SEP 2022 - MAY 2024</p>
                        <h3 class="card-title">Crossplatform App Development</h3>
                        <ul class="list-disc pl-5 mt-2 card-text">
                            <li>Creation of desktop, web, and mobile applications</li>
                            <li>Development of APIs with databases</li>
                            <li>Use of version control such as GitHub</li>
                        </ul>
                        <!-- Tech Stack -->
                        <div class="tech-stack">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Kotlin</span>
                            <span class="tech-tag">Springboot</span>
                            <span class="tech-tag">Git</span>
                        </div>
                    </div>

                    <div class="relative card p-6">
                        <span class="absolute -right-5 top-5 w-4 h-4 bg-pink-500 rounded-full shadow-lg"></span>
                        <p class="text-gray-600 dark:text-pink-300">OCT 2024 - MAY 2025</p>
                        <h3 class="card-title">Master in AI & Big Data</h3>
                        <ul class="list-disc pl-5 mt-2 card-text">
                            <li>Learning AI models and their applications</li>
                            <li>Developing web apps with ML models</li>
                            <li>Programming in Python & R</li>
                        </ul>
                        <!-- Tech Stack -->
                        <div class="tech-stack">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">TensorFlow</span>
                            <span class="tech-tag">Pandas</span>
                            <span class="tech-tag">R</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Experience -->
                <div class="space-y-8">
                    <div class="relative card p-6">
                        <span class="absolute -left-5 top-5 w-4 h-4 bg-pink-500 rounded-full shadow-lg"></span>
                        <p class="text-gray-600 dark:text-pink-300">NOV 2023 - PRESENT</p>
                        <h3 class="card-title">Laravel Developer</h3>
                        <ul class="list-disc pl-5 mt-2 card-text">
                            <li>Business management solutions development</li>
                            <li>Frontend design using Tailwind CSS & Bootstrap</li>
                            <li>Backend architecture with Eloquent ORM & MVC</li>
                        </ul>
                        <!-- Tech Stack -->
                        <div class="tech-stack">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Tailwind CSS</span>
                            <span class="tech-tag">Bootstrap</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</body>

</html>
