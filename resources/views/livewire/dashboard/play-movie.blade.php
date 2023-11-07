<div class="container mx-auto p-4 lg:p-8 xl:max-w-6xl">
    <div
        class="mb-6 flex items-center justify-between gap-4 border-b border-dashed border-zinc-300 pb-2 dark:border-zinc-700">
        <!-- Page Heading -->
        <h1 class="text-lg font-bold">Assistir</h1>


    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-12 lg:gap-8">
        <!-- Quick Stats -->


        <!-- Pageviews -->
        <div
            class="overflow-hidden rounded-2xl bg-white p-6 shadow shadow-zinc-200 ring-1 ring-zinc-200 ring-opacity-10 dark:bg-gray-900 dark:shadow-zinc-800 sm:col-span-12">
            <div class="mb-6 flex items-center justify-between gap-4">
                <h2 class="text-xl font-extrabold">
                    {{ $movieName }}
                    <small class="font-semibold text-zinc-500 dark:text-zinc-400"></small>
                </h2>
            </div>
            <button @click="$dispatch('post-created',{ tempo: '12' })"> dispacher</button>

            <div class="mb-6">
                <video id="my-video" class="video-js" autoplay controls preload="auto" style="width: 100%;"
                    height="600" poster="{{ $posterMovie }}" data-setup="{}">
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
                <h2 class="text-xl font-extrabold">Descrição</h2>

            </div>
            <p class="text-zinc-500 dark:text-zinc-400">{{ $description }}</p>
        </div>
        <!-- END Popular Pages -->

        <!-- Referrers -->
        <div
            class="overflow-hidden rounded-2xl bg-white p-6 shadow shadow-zinc-200 ring-1 ring-zinc-200 ring-opacity-10 dark:bg-zinc-800 dark:shadow-zinc-800 sm:col-span-6">
            <div class="mb-6 flex items-center justify-between gap-4">
                <h2 class="text-xl font-extrabold">Informações do filmes</h2>

            </div>
            <table class="w-full text-sm">

                <tbody>
                    <tr>
                        <td class="relative p-3">

                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Elenco:</a>
                        </td>
                        <td class="text-right">{{ $cast }}</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">

                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Diretor:</a>
                        </td>
                        <td class="text-right">{{ $director }}</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">

                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Gênero:</a>
                        </td>
                        <td class="text-right">{{ $genre }}</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">

                            <a class="relative font-medium hover:underline" href="javascript:void(0)">Duração:</a>
                        </td>
                        <td class="text-right">{{ $duration }}</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">

                            <a class="relative font-medium hover:underline" href="javascript:void(0)">País: </a>
                        </td>
                        <td class="text-right">{{ $country }}</td>
                    </tr>
                    <tr>
                        <td class="relative p-2">
                            Avaliação:

                        </td>
                        <td class="text-right"> <a class="relative font-medium hover:underline"
                                href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="hi-mini hi-star -mt-px inline-block h-4 w-4 text-amber-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg></a> {{ $rating }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- END Referrers -->
    </div>
    <script>
        var videoElement = document.getElementById('my-video');

        // Verifica se há um tempo de reprodução salvo no localStorage
        var savedTime = localStorage.getItem('videoPlaybackTime');

        // Adiciona um event listener para o evento 'loadedmetadata'
        videoElement.addEventListener('loadedmetadata', function() {
            // Se houver um tempo de reprodução salvo, pergunte ao usuário se deseja continuar de onde parou
            if (savedTime) {
                var continueFromSavedTime = confirm('Deseja continuar de onde parou?');
                if (continueFromSavedTime) {
                    videoElement.currentTime = parseFloat(savedTime);
                }
            }
        });

        // Adiciona um event listener para o evento 'timeupdate'
        videoElement.addEventListener('timeupdate', function() {
            // Obtém o tempo atual de reprodução em segundos
            var currentTime = videoElement.currentTime;

            // Salva o tempo atual no localStorage
            localStorage.setItem('videoPlaybackTime', currentTime);
        });

        // Adicione outro event listener para detectar quando o vídeo é pausado
        videoElement.addEventListener('pause', function() {
            // O código aqui será executado quando o vídeo for pausado.
            console.log('O vídeo foi pausado. Tempo assistido: ' + videoElement.currentTime + ' segundos');
            @this.dispatch('post-created', {
                time: videoElement.currentTime
            });
        });
    </script>
</div>
