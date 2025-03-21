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

        <section>
            {{ $slot }}
        </section>

</body>

</html>
