 
<head>
    ...
 
    {{-- Add this  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
 
<body class="min-h-screen font-sans antialiased">
 
{{-- The navbar with `sticky` and `full-width` --}}
<x-nav sticky full-width>
 
    <x-slot:brand>
        {{-- Drawer toggle for "main-drawer" --}}
        <label for="main-drawer" class="lg:hidden mr-3">
            <x-icon name="o-bars-3" class="cursor-pointer" />
        </label>
 
        {{-- Your logo --}}
        My App
    </x-slot:brand>
 
    {{-- Right side actions --}}
    <x-slot:actions>
        <a href="###">
            <x-icon name="o-envelope" />
            Messages</a>
        <a href="###">
            <x-icon name="o-bell" />
            Notifications</a>
    </x-slot:actions>
</x-nav>
 
{{-- The main content with `full-width` --}}
<x-main full-width>
 
    {{-- This is a sidebar that works also as a drawer on small screens --}}
    {{-- Notice the `main-drawer` reference here --}}
    <x-slot:sidebar drawer="main-drawer" class="bg-slate-200">
 
        {{-- Activates the menu item when a route matches the `link` property --}}
        <x-menu activate-by-route>
            <x-menu-item title="Home" icon="o-home" link="###" />
            <x-menu-item title="Messages" icon="o-envelope" link="###" />
        </x-menu>
    </x-slot:sidebar>
 
    {{-- The `$slot` goes here --}}
    <x-slot:content>
        {{ $slot }} 
    </x-slot:content>
 
    {{-- Footer area --}}
    <x-slot:footer>
        <hr />
        <div class="p-6">
            Footer
        </div>
    </x-slot:footer>
</x-main>
</body>