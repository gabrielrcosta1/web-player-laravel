<nav id="page-sidebar"
    class="fixed top-0 bottom-0 left-0 z-50 flex h-full w-full flex-col border-r border-gray-200 bg-white transition-transform duration-300 ease-out dark:border-gray-700/75 dark:bg-gray-900 lg:w-64"
    x-bind:class="{
        '-translate-x-full': !mobileSidebarOpen,
        'translate-x-0': mobileSidebarOpen,
        'lg:-translate-x-full': !desktopSidebarOpen,
        'lg:translate-x-0': desktopSidebarOpen,
    }"
    aria-label="Main Sidebar Navigation">
    <!-- Sidebar Header -->
    <div class="flex h-16 w-full flex-none items-center justify-between px-5 shadow-sm">
        <!-- Brand -->
        <a href="javascript:void(0)"
            class="group inline-flex items-center space-x-2 font-semibold text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="hi-outline hi-video-camera inline-block h-6 w-6 text-blue-500 transition group-hover:scale-110">
                <path stroke-linecap="round"
                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <span>GPLAY</span>
        </a>
        <!-- END Brand -->

        <!-- Extra Actions -->
        <div class="flex items-center">
            <!-- Dark Mode Toggle -->
            <button type="button"
                class="inline-flex items-center justify-center leading-5 text-gray-800 hover:text-gray-600 focus:outline-none active:text-gray-800 dark:text-gray-200 dark:hover:text-gray-300 dark:active:text-gray-200"
                x-on:click="darkTheme = !darkTheme">
                <svg x-show="!darkTheme" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="hi-outline hi-moon inline-block h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                </svg>
                <svg x-cloak x-show="darkTheme" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="hi-outline hi-sun inline-block h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                </svg>
            </button>
            <!-- END Dark Mode Toggle -->

            <!-- Close Sidebar on Mobile -->
            <button type="button"
                class="ml-3 inline-flex items-center justify-center leading-5 text-gray-800 hover:text-blue-600 focus:outline-none active:text-blue-800 dark:text-gray-200 dark:hover:text-blue-300 dark:active:text-blue-200 lg:hidden"
                x-on:click="mobileSidebarOpen = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="hi-solid hi-x-mark inline-block h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <!-- END Close Sidebar on Mobile -->
        </div>
        <!-- END Extra Actions -->
    </div>
    <!-- END Sidebar Header -->

    <!-- Sidebar Navigation -->
    <div class="overflow-y-auto">
        <div class="w-full py-4">
            <nav class="space-y-1">
                <a href="{{ route('home') }}" wire:navigate.hover
                    class="group flex items-center space-x-2 border-r-4 border-blue-400 {{ request()->routeIs('home') ? 'bg-blue-800 dark:text-blue-200' : 'text-gray-700' }} px-5 py-0.5 text-sm font-medium dark:hover:bg-blue-800 dark:text-blue-200 dark:hover:text-blue-200 ">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hi-outline hi-home inline-block h-6 w-6 text-blue-600 dark:text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </span>
                    <span class="grow py-2">Home</span>
                </a>
                <a href="{{ route('movies') }}" wire:navigate.hover
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 {{ request()->routeIs('movies') ? 'bg-blue-800 dark:text-blue-200' : 'text-gray-700' }}  dark:hover:bg-blue-800 dark:text-blue-200 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <span
                            class="material-symbols-outlined hi-outline hi-square-2x2 inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            movie
                        </span>
                    </span>
                    <span class="grow py-2">Filmes</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <span
                            class="material-symbols-outlined hi-outline hi-square-2x2 inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            smart_display
                        </span>
                    </span>
                    <span class="grow py-2">Séries</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <span
                            class="material-symbols-outlined hi-outline hi-square-2x2 inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            full_hd
                        </span>
                    </span>
                    <span class="grow py-2">Tv ao vivo</span>
                </a>
                <div class="px-5 pt-6 pb-2 text-xs font-medium uppercase tracking-wider text-gray-400">
                    Categorias
                </div>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hi-outline hi-square-2x2 inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Library</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hi-outline hi-queue-list inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                        </svg>
                    </span>
                    <span class="grow py-2">History</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-play-circle inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Your Videos</span>
                    <span
                        class="rounded-full bg-blue-400/10 px-2 py-1 text-xs font-medium leading-4 text-blue-700 transition dark:bg-blue-400/20 dark:text-blue-200 dark:group-hover:bg-blue-400/30">26</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-clock inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Watch Later</span>
                    <span
                        class="rounded-full bg-blue-400/10 px-2 py-1 text-xs font-medium leading-4 text-blue-700 transition dark:bg-blue-400/20 dark:text-blue-200 dark:group-hover:bg-blue-400/30">12</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-heart inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Liked Videos</span>
                    <span
                        class="rounded-full bg-blue-400/10 px-2 py-1 text-xs font-medium leading-4 text-blue-700 transition dark:bg-blue-400/20 dark:text-blue-200 dark:group-hover:bg-blue-400/30">39</span>
                </a>
                <div class="px-5 pt-6 pb-2 text-xs font-medium uppercase tracking-wider text-gray-400">
                    Subscriptions
                </div>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-at-symbol inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round"
                                d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                        </svg>
                    </span>
                    <span class="grow py-2">Nature Moments</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-at-symbol inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round"
                                d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                        </svg>
                    </span>
                    <span class="grow py-2">Animals Kingdom</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-at-symbol inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round"
                                d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                        </svg>
                    </span>
                    <span class="grow py-2">Inspiration Strike</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center space-x-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-blue-800 dark:hover:text-blue-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-at-symbol inline-block h-6 w-6 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                            <path stroke-linecap="round"
                                d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                        </svg>
                    </span>
                    <span class="grow py-2">Into The Wild</span>
                </a>
            </nav>
        </div>
    </div>
    <!-- END Sidebar Navigation -->
</nav>
<!-- Page Sidebar -->

<!-- Page Header -->
<header id="page-header"
    class="fixed top-0 left-0 right-0 z-30 flex h-16 flex-none items-center bg-white shadow-sm transition-all duration-300 ease-out dark:bg-gray-900 lg:pl-64"
    x-bind:class="{ 'lg:pl-64': desktopSidebarOpen }">
    <div class="mx-auto flex w-full max-w-7xl justify-between px-4 lg:px-8">
        <!-- Left Section -->
        <div class="flex items-center">
            <!-- Toggle Sidebar on Mobile -->
            <div class="mr-2 lg:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center space-x-2 rounded border border-gray-300 bg-white px-3 py-2 font-semibold leading-6 text-gray-800 shadow-sm hover:border-gray-300 hover:bg-gray-100 hover:text-gray-800 hover:shadow focus:outline-none focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:border-white active:bg-white active:shadow-none dark:border-gray-700/75 dark:bg-gray-900 dark:text-gray-200 dark:hover:border-gray-700 dark:hover:bg-gray-800 dark:hover:text-gray-200 dark:focus:ring-gray-700 dark:active:border-gray-900 dark:active:bg-gray-900"
                    x-on:click="mobileSidebarOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-menu-alt-1 inline-block h-5 w-5">
                        <path fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Mobile -->

            <!-- Toggle Sidebar on Desktop -->
            <div class="hidden lg:block">
                <button type="button"
                    class="inline-flex items-center justify-center space-x-2 rounded border border-gray-300 bg-white px-3 py-2 font-semibold leading-6 text-gray-800 shadow-sm hover:border-gray-300 hover:bg-gray-100 hover:text-gray-800 hover:shadow focus:outline-none focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:border-white active:bg-white active:shadow-none dark:border-gray-700/75 dark:bg-gray-900 dark:text-gray-200 dark:hover:border-gray-700 dark:hover:bg-gray-800 dark:hover:text-gray-200 dark:focus:ring-gray-700 dark:active:border-gray-900 dark:active:bg-gray-900"
                    x-on:click="desktopSidebarOpen = !desktopSidebarOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-menu-alt-1 inline-block h-5 w-5">
                        <path fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Desktop -->
        </div>
        <!-- END Left Section -->

        <!-- Main Section -->
        <div class="flex items-center">
            <!-- Search -->

            <!-- END Search -->

            <!-- Brand -->
            <a href="javascript:void(0)"
                class="group inline-flex items-center space-x-2 font-semibold text-gray-800 hover:text-gray-600 sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="hi-outline hi-video-camera inline-block h-6 w-6 text-blue-500 transition group-hover:scale-110">
                    <path stroke-linecap="round"
                        d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </a>
            <!-- END Brand -->
        </div>
        <!-- END Main Section -->

        <!-- Right Section -->
        <div class="flex items-center space-x-2">
            <!-- User Dropdown -->
            <div class="relative inline-block">
                <!-- Dropdown Toggle Button -->
                <button type="button"
                    class="inline-flex items-center justify-center rounded border border-gray-300 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 shadow-sm hover:border-gray-300 hover:bg-gray-100 hover:text-gray-800 hover:shadow focus:outline-none focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:border-white active:bg-white active:shadow-none dark:border-gray-700/75 dark:bg-gray-900 dark:text-gray-200 dark:hover:border-gray-700 dark:hover:bg-gray-800 dark:hover:text-gray-200 dark:focus:ring-gray-700 dark:active:border-gray-900 dark:active:bg-gray-900"
                    id="tk-dropdown-layouts-user" aria-haspopup="true" x-bind:aria-expanded="userDropdownOpen"
                    x-on:click="userDropdownOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-user-circle inline-block h-5 w-5 sm:hidden">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="hidden sm:inline">John</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-chevron-down ml-1 hidden h-5 w-5 opacity-50 sm:inline-block">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- END Dropdown Toggle Button -->

                <!-- Dropdown -->
                <div x-cloak x-show="userDropdownOpen" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="transform opacity-0 scale-75"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-75"
                    x-on:click.outside="userDropdownOpen = false" role="menu"
                    aria-labelledby="tk-dropdown-layouts-user"
                    class="z-1 absolute right-0 mt-2 w-48 origin-top-right rounded shadow-xl">
                    <div
                        class="divide-y divide-gray-100 rounded bg-white ring-1 ring-black ring-opacity-5 dark:divide-gray-700 dark:bg-gray-900 dark:ring-gray-700">
                        <div class="space-y-1 p-2">
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center space-x-2 rounded px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100 dark:focus:bg-gray-800 dark:focus:text-gray-100">
                                <span>Your Channel</span>
                            </a>
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center space-x-2 rounded px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100 dark:focus:bg-gray-800 dark:focus:text-gray-100">
                                <span>Video Studio</span>
                            </a>
                        </div>
                        <div class="space-y-1 p-2">
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center space-x-2 rounded px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100 dark:focus:bg-gray-800 dark:focus:text-gray-100">
                                <span>Settings</span>
                            </a>
                        </div>
                        <div class="space-y-1 p-2">
                            <form onsubmit="return false;">
                                <button type="submit" role="menuitem"
                                    class="flex w-full items-center space-x-2 rounded px-3 py-2 text-left text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100 dark:focus:bg-gray-800 dark:focus:text-gray-100">
                                    <span>Sign out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Dropdown -->
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
</header>
<!-- END Page Header -->
