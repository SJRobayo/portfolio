<div x-data="{ open: false }">
    <div class="top-buttons">
        <button id="lang-toggle" x-on:click="open = ! open">🌍</button>
        <div x-show="open" class="dropdown">
            <ul>
                <li><a href="{{ route('setLanguage', ['lang' => 'en']) }}">English</a></li>
                <li><a href="{{ route('setLanguage', ['lang' => 'es']) }}">Español</a></li>
                <li><a href="{{ route('setLanguage', ['lang' => 'fr']) }}">Français</a></li>
                <!-- Add more languages as needed -->
            </ul>
        </div>
    </div>
</div>
