<div id="sidebar" class="sidebar">
    <button class="close-btn" onclick="toggleSidebar()">X</button>

    <!-- Contact Info Section -->
    <div class="sidebar-section">
        <h3 class="sidebar-title">Contact Info</h3>
        <div class="contact-info">
            <p><i class="fas fa-envelope"></i> <a href="mailto:samuel@example.com">samuel.jrobayo@gmail.com</a></p>
            <p><i class="fas fa-phone"></i> <a href="tel:+1234567890">+34 640 22 82 60</a></p>
            <p><i class="fas fa-map-marker-alt"></i> Barcelona, Spain</p>
        </div>
    </div>

    <div class="sidebar-section">
        <h3 class="sidebar-title">Tech Stack</h3>
        <div class="skills">
            @foreach ([
                ['name' => 'Laravel', 'percent' => 90],
                ['name' => 'Flutter', 'percent' => 85],
                ['name' => 'Python', 'percent' => 80],
                ['name' => 'SQL', 'percent' => 75],
                ['name' => 'Kotlin', 'percent' => 85],
            ] as $skill)
                <div class="skill">
                    <span>{{ $skill['name'] }}</span>
                    <div class="progress-bar">
                        <div class="progress" data-percent="{{ $skill['percent'] }}"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
