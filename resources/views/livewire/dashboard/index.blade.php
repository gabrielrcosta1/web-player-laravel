<div class="container mx-auto space-y-10 px-4 py-8 lg:space-y-16 lg:px-8 lg:py-16 xl:max-w-7xl">
    <!-- Latest Movies -->
    <section class="space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                Lançamentos
            </h2>
            <a href="javascript:void(0)"
                class="group flex items-center space-x-1 text-sm text-gray-900 dark:text-white transition hover:text-white active:text-slate-400">
                <span>Ver todos</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="h-5 w-5 opacity-50 transition ease-out group-hover:opacity-100 group-active:translate-x-2">
                    <path fill-rule="evenodd"
                        d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <nav class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <!-- Movie -->
            @foreach ($movies as $result)
                <a href="javascript:void(0)"
                    class="aspect-w-16 aspect-h-10 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25">
                    <img class="object-cover" src="{{ $result['stream_icon'] }}" />
                    <div
                        class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-black/75 to-black">
                        <div class="flex items-center justify-start space-x-2 p-4">
                            <div
                                class="flex items-center space-x-1 rounded-lg bg-slate-800/50 px-1.5 py-1 font-medium text-slate-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="hi-mini hi-star -mt-px inline-block h-4 w-4 text-amber-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $result['rating'] }}</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between space-x-2 px-4 py-5">
                            <div class="space-y-1">
                                <h3 class="text-xl font-semibold text-white">
                                    {{ $result['name'] }}
                                </h3>
                                <p class="text-sm font-semibold text-slate-500">{{ $result['year'] }}</p>
                            </div>
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-500/25 text-slate-400 transition group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white group-active:scale-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="hi-mini hi-play h-5 w-5 translate-x-0.5">
                                    <path
                                        d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            <!-- END Movie -->
        </nav>
    </section>
    <!-- END Latest Movies -->

    <!-- Continue Watching -->
    <section class="space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                Continue assistindo
            </h2>
            <a href="javascript:void(0)"
                class="group flex items-center space-x-1 text-sm gray transition hover:text-white active:text-slate-400">
                <span>Ver todos</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="h-5 w-5 opacity-50 transition ease-out group-hover:opacity-100 group-active:translate-x-2">
                    <path fill-rule="evenodd"
                        d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <nav class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <!-- Movie -->
            <a href="javascript:void(0)"
                class="aspect-w-16 aspect-h-9 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25">
                <img class="object-cover"
                    src="https://images.unsplash.com/photo-1601513445506-2ab0d4fb4229?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=500&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2Njc3NjQ2Mg&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=800" />
                <div
                    class="absolute inset-0 flex flex-col justify-end bg-gradient-to-b from-transparent via-black/75 to-black">
                    <div class="space-y-2 px-4 pb-5">
                        <div class="flex items-start justify-between space-x-2">
                            <div class="space-y-1">
                                <h3 class="text-xl font-semibold text-white">
                                    Hidden but here
                                </h3>
                                <p class="text-sm font-semibold text-slate-500">
                                    2017
                                </p>
                            </div>
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-500/25 text-slate-400 transition-all group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white group-active:scale-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="hi-mini hi-play h-5 w-5 translate-x-0.5">
                                    <path
                                        d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 text-xs font-medium text-white">
                            <div>10:23</div>
                            <div class="flex h-1 w-full grow items-center overflow-hidden rounded-lg bg-white/25">
                                <div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                    class="flex items-center justify-center self-stretch bg-indigo-500 transition-all duration-500 ease-out"
                                    style="width: 10%"></div>
                            </div>
                            <div>1:40:00</div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Movie -->

            <!-- Movie -->
            <a href="javascript:void(0)"
                class="aspect-w-4 aspect-h-3 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25">
                <img class="object-cover"
                    src="https://images.unsplash.com/photo-1517488629431-6427e0ee1e5f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2Njc3NjczOA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=800" />
                <div
                    class="absolute inset-0 flex flex-col justify-end bg-gradient-to-b from-transparent via-black/75 to-black">
                    <div class="space-y-2 px-4 pb-5">
                        <div class="flex items-start justify-between space-x-2">
                            <div class="space-y-1">
                                <h3 class="text-xl font-semibold text-white">
                                    The Happy Team
                                </h3>
                                <p class="text-sm font-semibold text-slate-500">
                                    2006
                                </p>
                            </div>
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-500/25 text-slate-400 transition-all group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white group-active:scale-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="hi-mini hi-play h-5 w-5 translate-x-0.5">
                                    <path
                                        d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 text-xs font-medium text-white">
                            <div>30:25</div>
                            <div class="flex h-1 w-full grow items-center overflow-hidden rounded-lg bg-white/25">
                                <div role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"
                                    class="flex items-center justify-center self-stretch bg-indigo-500 transition-all duration-500 ease-out"
                                    style="width: 32%"></div>
                            </div>
                            <div>1:25:00</div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Movie -->

            <!-- Movie -->
            <a href="javascript:void(0)"
                class="aspect-w-4 aspect-h-3 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25">
                <img class="object-cover"
                    src="https://images.unsplash.com/photo-1486525546686-3cd5484691f4?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2Njc3Njg0Mw&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=800" />
                <div
                    class="absolute inset-0 flex flex-col justify-end bg-gradient-to-b from-transparent via-black/75 to-black">
                    <div class="space-y-2 px-4 pb-5">
                        <div class="flex items-start justify-between space-x-2">
                            <div class="space-y-1">
                                <h3 class="text-xl font-semibold text-white">
                                    Everest: The Real Story
                                </h3>
                                <p class="text-sm font-semibold text-slate-500">
                                    2021
                                </p>
                            </div>
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-500/25 text-slate-400 transition-all group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white group-active:scale-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="hi-mini hi-play h-5 w-5 translate-x-0.5">
                                    <path
                                        d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 text-xs font-medium text-white">
                            <div>1:45:30</div>
                            <div class="flex h-1 w-full grow items-center overflow-hidden rounded-lg bg-white/25">
                                <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                    class="flex items-center justify-center self-stretch bg-indigo-500 transition-all duration-500 ease-out"
                                    style="width: 80%"></div>
                            </div>
                            <div>2:08:00</div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Movie -->
        </nav>
    </section>
    <!-- END Continue Watching -->

    <!-- Top Rated -->
    <section class="space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Top séries</h2>
            <a href="javascript:void(0)"
                class="group flex items-center space-x-1 text-sm text-gray-900 dark:text-white transition hover:text-white active:text-slate-400">
                <span>Ver todas</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="h-5 w-5 opacity-50 transition ease-out group-hover:opacity-100 group-active:translate-x-2">
                    <path fill-rule="evenodd"
                        d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <nav class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8">

            <!-- Movie -->
            @foreach ($series as $serie)
                <a href="javascript:void(0)"
                    class="aspect-w-3 aspect-h-4 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75">
                    <img class="object-cover" src="{{ $serie['cover'] }}" />
                    <div
                        class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-black/75 to-black">
                        <div class="flex items-center justify-start space-x-2 p-4">
                            <div
                                class="flex items-center space-x-1 rounded-lg bg-slate-800/50 px-1.5 py-1 font-medium text-slate-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="hi-mini hi-star -mt-px inline-block h-4 w-4 text-amber-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $serie['rating'] }}</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between space-x-2 px-4 py-5">
                            <div class="space-y-1">
                                <h3 class="text-xl font-semibold text-white">
                                    {{ $serie['name'] }}
                                </h3>
                                <p class="text-sm font-semibold text-slate-500">{{ $serie['year'] }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END Movie -->
            @endforeach

        </nav>
    </section>
    <!-- END Top Rated -->
</div>
