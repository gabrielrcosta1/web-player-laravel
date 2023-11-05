<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div x-data="{ mobileSidebarOpen: false, desktopSidebarOpen: true, darkMode: false, userDropdownOpen: false }" x-bind:class="{ 'dark': darkMode }">
        <!-- Page Container -->
        <div id="page-container"
            class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-gray-100 transition-all duration-300 ease-out dark:bg-gray-800 dark:text-gray-200 lg:pl-64"
            x-bind:class="{ 'lg:pl-64': desktopSidebarOpen }">
            {{ $slot }}
            <x-toast />
        </div>
        <!-- END Page Container -->
    </div>
    <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>
</body>

</html>
