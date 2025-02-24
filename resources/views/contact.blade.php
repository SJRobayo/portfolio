<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Me - Samuel Robayo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/home.js', 'resources/css/homepage.css', 'resources/css/homepage-dark.css'])
</head>

<body class="font-sans antialiased bg-gray-100 text-gray-900 dark:bg-black dark:text-white" id="body">
    <div class="petal-container"></div>
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="py-6 flex flex-col items-center">
            <nav class="mt-4 mr-10">
                <ul class="flex space-x-4">
                    <button class="theme-toggle" type="button" title="Toggle theme" aria-label="Toggle theme">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="1em" height="1em"
                            class="theme-toggle__dark-side" fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M16 .5C7.4.5.5 7.4.5 16S7.4 31.5 16 31.5 31.5 24.6 31.5 16 24.6.5 16 .5zm0 28.1V3.4C23 3.4 28.6 9 28.6 16S23 28.6 16 28.6z" />
                        </svg>
                    </button>
                    <li><a href="{{ route('home') }}" class="py-2 px-4">Home</a></li>
                    <li><a href="#" class="py-2 px-4">Experience</a></li>
                    <li><a href="#" class="py-2 px-4">About Me</a></li>
                    <li><a href="#" class="py-2 px-4 project">Contact Me</a></li>
                </ul>
            </nav>
        </header>

        <header class="profile-container ml-16">
            <img src="{{ asset('storage/img/picture.png') }}" alt="Profile Picture" class="profile-img">
            <a href="#" class="py-2 px-4">Samuel Robayo</a>
        </header>

        <!-- Contact Form Section -->
        <section class="max-w-4xl mx-auto mt-12 p-6">
            <h2 class="text-4xl font-semibold text-center mb-8 project">Get in Touch</h2>
            <p class="text-lg text-center text-gray-700 dark:text-gray-300 mb-6">
                Feel free to reach out! Fill the form below or connect with me on social media.
            </p>

            <form class="contact-form bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
                <label class="block mb-4">
                    <span class="text-gray-700 dark:text-gray-300">Your Name</span>
                    <input type="text" class="input-field" placeholder="Enter your name">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700 dark:text-gray-300">Your Email</span>
                    <input type="email" class="input-field" placeholder="Enter your email">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700 dark:text-gray-300">Message</span>
                    <textarea class="input-field h-32 resize-none" placeholder="Write your message"></textarea>
                </label>

                <button type="submit" class="contact-button">Send Message</button>
            </form>
        </section>   
    </div>
</body>

</html>
