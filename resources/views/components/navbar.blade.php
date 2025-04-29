@php
    $whitePages = ['/', 'about']; // Halaman dengan teks putih
    $grayPages = ['posts', 'project', 'contact']; // Halaman dengan teks abu-abu
    $isWhite = in_array(request()->path(), $whitePages);
    $isGray = in_array(request()->path(), $grayPages);
@endphp
<nav class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ Vite::asset('resources/img/lightning.svg') }}" class="h-8 w-8">
                <span class="ml-2 text-xl font-bold {{ $isWhite ? 'text-white' : 'text-gray-800'}}">Forenexis</span>
            </a>

            {{-- Menu Desktop --}}
            <nav class="hidden md:flex space-x-6">
                @php
                    $textColor = $isWhite ? 'text-white' : ($isGray ? 'text-gray-800' : 'text-gray-700');
                    $activeColor = 'text-blue-500 font-semibold'; // Warna menu aktif
                @endphp

                <x-navlink href="{{ url('/') }}" :active="request()->is('/')">
                    <img src="{{ Vite::asset('resources/img/home.svg') }}" class="h-5 w-5 fill-current">
                    <span class="{{ request()->is('/') ? $activeColor : $textColor }} hover:text-blue-400">Home</span>
                </x-navlink>
                <x-navlink href="{{ url('/about') }}" :active="request()->is('about')">
                    <img src="{{ Vite::asset('resources/img/info.svg') }}" class="h-5 w-5 fill-current">
                    <span class="{{ request()->is('about') ? $activeColor : $textColor }} hover:text-blue-400">About</span>
                </x-navlink>
                <x-navlink href="{{ url('/posts') }}" :active="request()->is('posts')">
                    <img src="{{ Vite::asset('resources/img/blog.svg') }}" class="h-5 w-5 fill-current">
                    <span class="{{ request()->is('posts') ? $activeColor : $textColor }} hover:text-blue-400">Blog</span>
                </x-navlink>
                <x-navlink href="{{ url('/project') }}" :active="request()->is('project')">
                    <img src="{{ Vite::asset('resources/img/project.svg') }}" class="h-5 w-5 fill-current">
                    <span class="{{ request()->is('project') ? $activeColor : $textColor }} hover:text-blue-400">Project</span>
                </x-navlink>
                <x-navlink href="{{ url('/contact') }}" :active="request()->is('contact')">
                    <img src="{{ Vite::asset('resources/img/contact.svg') }}" class="h-5 w-5 fill-current">
                    <span class="{{ request()->is('contact') ? $activeColor : $textColor }} hover:text-blue-400">Contact</span>
                </x-navlink>
            </nav>

            {{-- Menu Mobile --}}
            <button class="md:hidden" onclick="toggleMenu()">
                <img src="{{ Vite::asset('resources/img/menu.svg') }}" class="h-6 w-6">
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden bg-transparent">
        <div class="container mx-auto px-4 py-3">
            <nav class="flex flex-col space-y-3">
                <x-navlink href="{{ url('/') }}" :active="request()->is('/')">
                    <img src="{{ Vite::asset('resources/img/home.svg') }}" class="h-4 w-4 fill-current">
                    <span class="{{ request()->is('/') ? $activeColor : $textColor }} hover:text-blue-400">Home</span>
                </x-navlink>
                <x-navlink href="{{ url('/about') }}" :active="request()->is('about')">
                    <img src="{{ Vite::asset('resources/img/info.svg') }}" class="h-4 w-4 fill-current">
                    <span class="{{ request()->is('about') ? $activeColor : $textColor }} hover:text-blue-400">About</span>
                </x-navlink>
                <x-navlink href="{{ url('/posts') }}" :active="request()->is('posts')">
                    <img src="{{ Vite::asset('resources/img/blog.svg') }}" class="h-4 w-4 fill-current">
                    <span class="{{ request()->is('posts') ? $activeColor : $textColor }} hover:text-blue-400">Blog</span>
                </x-navlink>
                <x-navlink href="{{ url('/project') }}" :active="request()->is('project')">
                    <img src="{{ Vite::asset('resources/img/project.svg') }}" class="h-5 w-5 fill-current">
                    <span class="{{ request()->is('project') ? $activeColor : $textColor }} hover:text-blue-400">Project</span>
                </x-navlink>
                <x-navlink href="{{ url('/contact') }}" :active="request()->is('contact')">
                    <img src="{{ Vite::asset('resources/img/contact.svg') }}" class="h-4 w-4 fill-current">
                    <span class="{{ request()->is('contact') ? $activeColor : $textColor }} hover:text-blue-400">Contact</span>
                </x-navlink>
            </nav>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    }
</script>
