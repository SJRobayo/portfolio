<div class="flex justify-center">

    <header class="py-6 flex flex-col items-center">
        {{-- <h1 class="text-4xl font-semibold">Samuel Robayo</h1> --}}
        <nav class="mt-4 mr-10">
            <ul class="flex space-x-4 ">
                <li><a href="{{ route('home') }}" class="py-2 px-4">@lang('portfolio.navigator.home')</a></li>
                </li>
                <li><a href="{{ route('experience') }}" class="py-2 px-4">@lang('portfolio.navigator.experience')</a>
                </li>
                <li><a href="{{ route('about') }}" class="py-2 px-4  ">@lang('portfolio.navigator.about')
                    </a></li>
                <li><a href="{{ route('contact') }}" class="py-2 px-4 ">@lang('portfolio.navigator.contact')
                    </a></li>
            </ul>
        </nav>
    </header>
</div>
