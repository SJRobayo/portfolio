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

<body class="font-sans antialiased " id="body">
    <div class="petal-container"></div>
    <div class="flex flex-col min-h-screen">
        @include('partials.navigator')

        @include('partials.side-bar')

        <!-- Sidebar Toggle Button -->
        <button id="menu-btn" class="menu-btn" onclick="toggleSidebar()">☰</button>

        <!-- Theme & Language Buttons (Top Right) -->
        <div class="top-buttons">
            <button id="theme-toggle" onclick="toggleTheme()">🌙</button>
            <button id="lang-toggle" onclick="toggleLanguage()">🌍</button>
        </div>

        <section class="max-w-6xl mx-auto mt-12 p-6">
            <h2 class="text-4xl font-semibold text-center mb-12 project text-gold">My Background</h2>

            <!-- Labels for Columns -->
            <div class="grid grid-cols-2 gap-8 text-center mb-6">
                <h3 class="column-label text-burgundy">🎓 Formation</h3>
                <h3 class="column-label text-burgundy">💼 Experience</h3>
            </div>

            <div class="relative grid grid-cols-2 gap-8">
                <!-- Vertical Timeline Line -->
                <div class="absolute left-1/2 top-0 w-1 bg-gold h-full transform -translate-x-1/2"></div>

                <!-- Left Column - Formation -->
                <div class="space-y-8">
                    <div class="relative gothic-card p-6">
                        <span class="absolute -right-5 top-5 w-4 h-4 bg-gold rounded-full shadow-lg"></span>
                        <p class="text-gray-400">SEP 2022 - MAY 2024</p>
                        <h3 class="card-title">Cross-platform App Development</h3>
                        <ul class="list-disc pl-5 mt-2 card-text">
                            <li>Creation of desktop, web, and mobile applications</li>
                            <li>Development of APIs with databases</li>
                            <li>Use of version control such as GitHub</li>
                        </ul>
                        <div class="tech-stack">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Kotlin</span>
                            <span class="tech-tag">Springboot</span>
                            <span class="tech-tag">Git</span>
                        </div>
                    </div>

                    <div class="relative gothic-card p-6">
                        <span class="absolute -right-5 top-5 w-4 h-4 bg-gold rounded-full shadow-lg"></span>
                        <p class="text-gray-400">OCT 2024 - MAY 2025</p>
                        <h3 class="card-title">Master in AI & Big Data</h3>
                        <ul class="list-disc pl-5 mt-2 card-text">
                            <li>Learning AI models and their applications</li>
                            <li>Developing web apps with ML models</li>
                            <li>Programming in Python & R</li>
                        </ul>
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
                    <div class="relative gothic-card p-6">
                        <span class="absolute -left-5 top-5 w-4 h-4 bg-gold rounded-full shadow-lg"></span>
                        <p class="text-gray-400">NOV 2023 - PRESENT</p>
                        <h3 class="card-title">Laravel Developer</h3>
                        <ul class="list-disc pl-5 mt-2 card-text">
                            <li>Business management solutions development</li>
                            <li>Frontend design using Tailwind CSS & Bootstrap</li>
                            <li>Backend architecture with Eloquent ORM & MVC</li>
                        </ul>
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

