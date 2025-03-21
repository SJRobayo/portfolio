
@props(['route', 'image', 'title', 'description'])

<div class="card bg:blue-500" data-id="{{ $title }}">
    <a href="{{ route($route) }}">
        <img src="{{ asset($image) }}" alt="" class="card-img " />
    </a>
    <div class="card-content">
        <a href="{{ route($route) }}">
            <h5 class="card-title">{{ $title }}</h5>
        </a>
        <p class="card-text">{{ $description }}</p>
    </div>
</div>

