<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="tallstackui_darkTheme()"
    x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-white': !darkTheme }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <tallstackui:setup />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div x-data="{ mobileSidebarOpen: false, desktopSidebarOpen: true, darkMode: false, userDropdownOpen: false }" x-bind:class="{ 'dark': darkMode }">
        <!-- Page Container -->
        <div id="page-container"
            class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-gray-100 transition-all duration-300 ease-out dark:bg-gray-800 dark:text-gray-200 lg:pl-64"
            x-bind:class="{ 'lg:pl-64': desktopSidebarOpen }">
            <!-- Page Sidebar -->
            @include('components.sidebar')
            @yield('content')
            <!-- Page Footer -->
            @include('components.footer')
            <x-toast />
        </div>
        <!-- END Page Container -->
    </div>

    @livewireScripts
    <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>
</body>

</html>
