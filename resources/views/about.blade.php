<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samuel Robayo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/homepage.css'])

</head>


<body class="font-sans antialiased bg-black text-white" id="body">
    <div class="flex flex-col min-h-screen">
        @include('partials.navigator')

        <!-- Sidebar -->
        @include('partials.side-bar')

        <!-- Sidebar Toggle Button -->
        <button id="menu-btn" class="menu-btn" onclick="toggleSidebar()">☰</button>

        <!-- Theme & Language Buttons (Top Right) -->
        <div class="top-buttons">
            <button id="theme-toggle" onclick="toggleTheme()">🌙</button>
            <button id="lang-toggle" onclick="toggleLanguage()">🌍</button>
        </div>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="text-5xl font-bold text-gold">About Me</h1>
                <p class="hero-text">A passionate software developer specializing in cross-platform applications, AI,
                    and business management solutions.</p>
            </div>
            <div class="hero-image">
                <img src="{{ asset('storage/img/shiba.jpg') }}" alt="Samuel Robayo" class="rounded-lg shadow-lg">
            </div>
        </section>

        <!-- Biography Section -->
        <section class="bio-section">
            <h2 class="text-4xl font-semibold text-center text-gold">My Journey</h2>
            <div class="bio-content">
                <p>
                    My journey into software development started with a curiosity about technology. I specialize in
                    <strong>AI, Big Data, and Web Development</strong>, constantly exploring new technologies to improve
                    businesses and optimize processes.
                </p>
                <p>
                    With a background in <strong>Cross-platform App Development</strong>, I have worked with
                    technologies like Laravel, Flutter, and Python to build scalable applications.
                </p>
            </div>
        </section>

        <!-- Values & Skills Section -->
        <section class="values-section">
            <h2 class="text-4xl font-semibold text-center text-gold">Core Values & Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 p-6">
                <div class="value-card">
                    <i class="fas fa-brain"></i>
                    <h3>Critical Thinking</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-code"></i>
                    <h3>Clean Code</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-users"></i>
                    <h3>Team Collaboration</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Business Growth</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-database"></i>
                    <h3>Data Management</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Problem Solving</h3>
                </div>
            </div>
        </section>

        <!-- Hobbies Section -->
        <section class="hobbies-section">
            <h2 class="text-4xl font-semibold text-center text-gold">Hobbies & Interests</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
                <div class="hobby-card">
                    <i class="fas fa-gamepad"></i>
                    <h3>Gaming</h3>
                    <p>Exploring new game mechanics & tech.</p>
                </div>
                <div class="hobby-card">
                    <i class="fas fa-music"></i>
                    <h3>Music</h3>
                    <p>Enjoying symphonic metal & synthwave.</p>
                </div>
                <div class="hobby-card">
                    <i class="fas fa-book"></i>
                    <h3>Reading</h3>
                    <p>Delving into AI & sci-fi literature.</p>
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

    // Theme Toggle Function
    function toggleTheme() {
        const body = document.getElementById('body');
        body.classList.toggle('dark');
        localStorage.setItem("theme", body.classList.contains("dark") ? "dark" : "light");
    }

    // Language Toggle Function (English <-> Spanish)
    function toggleLanguage() {
        const currentLang = document.documentElement.lang;
        document.documentElement.lang = currentLang === "en" ? "es" : "en";
        localStorage.setItem("lang", document.documentElement.lang);
        alert("Language switched to: " + (document.documentElement.lang === "en" ? "English" : "Español"));
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
