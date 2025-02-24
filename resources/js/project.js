// 🌸 Cherry Blossom Petals Animation
function createPetal() {
    const petal = document.createElement("div");
    petal.classList.add("petal");

    let size = Math.random() * 20 + 10; /* 10px - 30px */
    petal.style.width = `${size}px`;
    petal.style.height = `${size}px`;
    petal.style.left = Math.random() * window.innerWidth + "px";
    petal.style.backgroundColor =
        `rgba(255, ${Math.random() * 150 + 100}, ${Math.random() * 150 + 150}, 0.8)`; /* Random pink shades */

    let duration = Math.random() * 5 + 5; /* 5s - 10s */
    petal.style.animationDuration = `${duration}s`;

    document.body.appendChild(petal);

    setTimeout(() => {
        petal.remove();
    }, duration * 1000);
}

/* Generate petals every 300ms */
setInterval(createPetal, 300);

// 🌗 Toggle Theme Function
function toggleTheme() {
    const body = document.body;
    const currentTheme = body.classList.contains('dark') ? 'dark' : 'light';
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    body.classList.toggle('dark', newTheme === 'dark');
    localStorage.setItem('theme', newTheme); // Save preference

    // Switch Stylesheets Dynamically
    updateStylesheet(newTheme);
}

// 🎨 Function to Update Stylesheet Based on Theme
function updateStylesheet(theme) {
    const lightCSS = document.querySelector('link[href*="homepage.css"]');
    const darkCSS = document.querySelector('link[href*="homepage-dark.css"]');

    if (theme === 'dark') {
        if (lightCSS) lightCSS.disabled = true;  // Disable light theme
        if (darkCSS) darkCSS.disabled = false;   // Enable dark theme
    } else {
        if (lightCSS) lightCSS.disabled = false; // Enable light theme
        if (darkCSS) darkCSS.disabled = true;    // Disable dark theme
    }
}

// 🔄 Load Saved Theme on Page Load
document.addEventListener("DOMContentLoaded", function () {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.body.classList.toggle('dark', savedTheme === 'dark');

    updateStylesheet(savedTheme);
});

// 🎛 Add Click Event Listener to the Toggle Button
document.querySelector(".theme-toggle").addEventListener("click", toggleTheme);


