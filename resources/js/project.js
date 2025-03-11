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