<!-- Contenedor del Selector de Idioma -->
<div class="top-buttons">
    <div class="language-selector">
        <button id="lang-toggle" class="lang-btn">🌍</button>

        <!-- Menú Desplegable de Idiomas -->
        <div id="lang-menu" class="lang-menu">
            <button class="lang-option" data-lang="en" wire:click="changeLocale(en)">
                <x-flag-language-en class="flag" />
            </button>

            <button class="lang-option" wire:click="changeLocale('es')">
                <x-flag-language-es class="flag" />
            </button>
            <button class="lang-option" wire:click="changeLocale('fr')">
                <x-flag-language-fr class="flag" />
            </button>


        </div>

    </div>


    <style>
        .flag {
            display: inline-block;
            width: 20px;
            height: 20px;
            /* Ensure the flag is visible */
            z-index: 10;
        }

        .language-selector {
            position: relative;
            display: inline-block;
        }

        .lang-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            transition: transform 0.2s;
            color: white;
        }

        .lang-btn:hover {
            transform: scale(1.1);
        }

        .lang-menu {
            position: absolute;
            top: 50%;
            right: 110%;
            transform: translateY(-50%) translateX(-20px);
            background: #1c1c1c;
            border-radius: 8px;
            /* padding: 8px 8px; */
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: transform 0.3s ease-out, opacity 0.3s ease-out, visibility 0.3s;
        }

        /* Mostrar menú con animación */
        .lang-menu.active {
            transform: translateY(-50%) translateX(-20%);
            opacity: 1;
            visibility: visible;
        }

        /* Opciones del Menú */
        .lang-option {
            background: none;
            border: none;
            color: #c4a35a;
            font-size: 1rem;
            cursor: pointer;
            transition: color 0.2s, background 0.2s;
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .lang-option:hover {
            color: #ffcc70;
            background: rgba(115, 34, 34, 0.3);
            border-radius: 4px;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const langToggle = document.getElementById("lang-toggle");
            const langMenu = document.getElementById("lang-menu");

            // Mostrar u ocultar el menú con animación
            langToggle.addEventListener("click", function() {
                langMenu.classList.toggle("active");
            });

            // Cerrar el menú si se hace clic fuera de él
            document.addEventListener("click", function(event) {
                if (!langToggle.contains(event.target) && !langMenu.contains(event.target)) {
                    langMenu.classList.remove("active");
                }
            });

        });
    </script>
</div>
