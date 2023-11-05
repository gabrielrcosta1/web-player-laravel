<div class="container mx-auto p-4 lg:p-8 xl:max-w-6xl">
    <div
        class="mb-6 flex items-center justify-between gap-4 border-b border-dashed border-zinc-300 pb-2 dark:border-zinc-700">
        <!-- Page Heading -->
        <h1 class="text-lg font-bold">Dashboard</h1>


    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-12 lg:gap-8">
        <!-- Quick Stats -->


        <!-- Pageviews -->
        <div
            class="overflow-hidden rounded-2xl bg-white p-6 shadow shadow-zinc-200 ring-1 ring-zinc-200 ring-opacity-10 dark:bg-gray-900 dark:shadow-zinc-800 sm:col-span-12">
            <div class="mb-6 flex items-center justify-between gap-4">
                <h2 class="text-xl font-extrabold">
                    Pageviews
                    <small class="font-semibold text-zinc-500 dark:text-zinc-400"></small>
                </h2>
            </div>
            <div class="mb-6">
                <video id="my-video" class="video-js" controls preload="auto"
                    style="width: 100%; height: 500px; border-radius: 20px;" poster="{{ $posterMovie }}"
                    data-setup="{}">
                    <source src="http://c4n.fun:80/movie/gbrbrasil/305528091/{{ $id }}.mp4"
                        type="video/mp4" />
                    <source src="http://c4n.fun:80/movie/gbrbrasil/305528091/{{ $id }}.mp4"
                        type="video/webm" />
                    <p class="vjs-no-js">
                        Assita de filmes de qualidade na Gplay
                    </p>
                </video>
            </div>
        </div>

        <!-- END Pageviews -->

        <!-- Popular Pages -->
        <div
            class="overflow-hidden rounded-2xl bg-white p-6 shadow shadow-zinc-200 ring-1 ring-zinc-200 ring-opacity-10 dark:bg-zinc-800 dark:shadow-zinc-800 sm:col-span-6">
            <div class="mb-6 flex items-center justify-between gap-4">
                <h2 class="text-xl font-extrabold">Popular Pages</h2>
                <button type="button"
                    class="flex items-center justify-between gap-1.5 rounded-xl px-2 py-2 text-sm font-semibold text-zinc-400 hover:bg-zinc-100 hover:text-zinc-600 active:bg-zinc-200 active:text-zinc-800 dark:hover:bg-zinc-700 dark:hover:text-zinc-400 dark:active:bg-zinc-600 dark:active:text-zinc-300">
                    <svg class="hi-mini hi-cog-6-tooth inline-block h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <table class="w-full text-sm">
                <thead>
                    <tr>
                        <th class="py-2 pr-2 text-left font-medium text-zinc-500 dark:text-zinc-400">
                            Path
                        </th>
                        <th class="py-2 pl-2 text-right font-medium text-zinc-500 dark:text-zinc-400">
                            Pageviews
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 42%"></div>
                            <a class="relative font-medium hover:underline"
                                href="javascript:void(0)">/blog/how-to-build-a-laravel-app</a>
                        </td>
                        <td class="text-right">6849</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 30%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">/</a>
                        </td>
                        <td class="text-right">4216</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 28%"></div>
                            <a class="relative font-medium hover:underline"
                                href="javascript:void(0)">/blog/working-from-home-has-never-been-easier</a>
                        </td>
                        <td class="text-right">3895</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 25%"></div>
                            <a class="relative font-medium hover:underline"
                                href="javascript:void(0)">/products/dark-tailwind-dashboard</a>
                        </td>
                        <td class="text-right">2863</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 22%"></div>
                            <a class="relative font-medium hover:underline"
                                href="javascript:void(0)">/freebies/landing-page</a>
                        </td>
                        <td class="text-right">2552</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 12%"></div>
                            <a class="relative font-medium hover:underline"
                                href="javascript:void(0)">/blog/bootstrap-5-new-features</a>
                        </td>
                        <td class="text-right">1236</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 10%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">/about</a>
                        </td>
                        <td class="text-right">1054</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 8%"></div>
                            <a class="relative font-medium hover:underline"
                                href="javascript:void(0)">/blog/inspiring-results-marketing</a>
                        </td>
                        <td class="text-right">869</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Popular Pages -->

        <!-- Referrers -->
        <div
            class="overflow-hidden rounded-2xl bg-white p-6 shadow shadow-zinc-200 ring-1 ring-zinc-200 ring-opacity-10 dark:bg-zinc-800 dark:shadow-zinc-800 sm:col-span-6">
            <div class="mb-6 flex items-center justify-between gap-4">
                <h2 class="text-xl font-extrabold">Referrers</h2>
                <button type="button"
                    class="flex items-center justify-between gap-1.5 rounded-xl px-2 py-2 text-sm font-semibold text-zinc-400 hover:bg-zinc-100 hover:text-zinc-600 active:bg-zinc-200 active:text-zinc-800 dark:hover:bg-zinc-700 dark:hover:text-zinc-400 dark:active:bg-zinc-600 dark:active:text-zinc-300">
                    <svg class="hi-mini hi-cog-6-tooth inline-block h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <table class="w-full text-sm">
                <thead>
                    <tr>
                        <th class="py-2 pr-2 text-left font-medium text-zinc-500 dark:text-zinc-400">
                            Referrers
                        </th>
                        <th class="py-2 pl-2 text-right font-medium text-zinc-500 dark:text-zinc-400">
                            Pageviews
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 76%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Google</a>
                        </td>
                        <td class="text-right">25630</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 14%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Bing</a>
                        </td>
                        <td class="text-right">3260</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 13%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Facebook</a>
                        </td>
                        <td class="text-right">3158</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 12%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">X (Twitter)</a>
                        </td>
                        <td class="text-right">2800</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 8%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">DuckDuckGo</a>
                        </td>
                        <td class="text-right">2769</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 8%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Yahoo</a>
                        </td>
                        <td class="text-right">2200</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 6%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">example.com</a>
                        </td>
                        <td class="text-right">856</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            <div class="absolute bottom-0 left-0 top-0 my-px w-3/4 bg-zinc-100 dark:bg-zinc-700"
                                style="width: 6%"></div>
                            <a class="relative font-medium hover:underline" href="javascript:void(0)">example.io</a>
                        </td>
                        <td class="text-right">736</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Referrers -->
    </div>
</div>
