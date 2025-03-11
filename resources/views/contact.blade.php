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

        <!-- Sidebar -->
        @include('partials.side-bar')

        <!-- Sidebar Toggle Button -->
        <button id="menu-btn" class="menu-btn" onclick="toggleSidebar()">☰</button>

        <!-- Theme & Language Buttons (Top Right) -->
        <div class="top-buttons">
            {{-- <button id="theme-toggle" onclick="toggleTheme()">🌙</button> --}}
            <button id="lang-toggle" onclick="toggleLanguage()">🌍</button>
        </div>
        <div>
            <section class="max-w-4xl mx-auto mt-12 p-6">
                <h2 class="text-4xl font-semibold text-center mb-6 text-gold">Contact Me</h2>

                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Write your message..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                    <p id="form-response" class="text-center mt-4"></p>
                </form>
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
    document.addEventListener("DOMContentLoaded", function() {
        const themeToggle = document.getElementById("theme-toggle");

        // Check Local Storage for Theme Preference
        if (localStorage.getItem("theme") === "light") {
            document.body.classList.add("light-mode");
        }

        themeToggle.addEventListener("click", function() {
            document.body.classList.toggle("light-mode");

            // Store preference in Local Storage
            if (document.body.classList.contains("light-mode")) {
                localStorage.setItem("theme", "light");
            } else {
                localStorage.setItem("theme", "dark");
            }
        });
    });

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
