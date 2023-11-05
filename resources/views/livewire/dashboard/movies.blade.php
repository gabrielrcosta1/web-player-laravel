<div class="container mx-auto space-y-10 px-4 py-8 lg:space-y-16 lg:px-8 lg:py-16 xl:max-w-7xl">
    @foreach ($categories as $category)
        <section class="space-y-6">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ $category->category_name }}
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
            @php
                $movies = App\Models\Movie::where('category_id', $category->category_id)
                    ->inRandomOrder()
                    ->paginate(3);

            @endphp
            <nav class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                @foreach ($movies as $movie)
                    <a href="javascript:void(0)"
                        class="aspect-w-16 aspect-h-9 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25">
                        <img class="object-cover" src="{{ $movie->stream_icon }}" />
                        <div
                            class="absolute inset-0 flex flex-col justify-end bg-gradient-to-b from-transparent via-black/75 to-black">
                            <div class="space-y-2 px-4 pb-5">
                                <div class="flex items-start justify-between space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-xl font-semibold text-white">
                                            {{ $movie->title }}
                                        </h3>
                                        <p class="text-sm font-semibold text-slate-500">
                                            {{ $movie->year }}
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

                            </div>
                        </div>
                    </a>
                @endforeach
            </nav>
        </section>
    @endforeach
</div>
