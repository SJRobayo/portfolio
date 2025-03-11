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
document.addEventListener("DOMContentLoaded", function () {
    if (localStorage.getItem("theme") === "dark") {
        document.getElementById("body").classList.add("dark");
    }
    if (localStorage.getItem("lang")) {
        document.documentElement.lang = localStorage.getItem("lang");
    }
});