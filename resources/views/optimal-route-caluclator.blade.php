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


        <main class="flex-1 grid grid-cols-3 gap-12 items-start p-6 max-w-6xl mx-auto mt-20">
            <!-- Image Container (1/3 width) -->
            <div class="col-span-1 flex justify-start">
                <img src="{{ asset('storage/img/logo.png') }}" class="rounded-lg shadow-lg w-48 md:w-64">
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

</html>
