<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/main.tsx'])
    <link rel="icon" href="{{ Vite::asset('resources/img/Lightning.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title ?? 'Home' }}</title>
</head>
<body>
    <div class="min-h-screen flex flex-col">
        <div class="min-h-full" x-data="{ isOpen: false }">
            <x-navbar></x-navbar>
            <main>
                <div class="mx-auto">
                    {{ $slot }}
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
            });
        </script>
    </body>
</body>
</html>
