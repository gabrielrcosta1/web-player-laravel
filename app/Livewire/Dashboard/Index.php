<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Index extends Component
{

    public function getMovies()
    {
        // Verificar se os resultados estão no cache
        if (Cache::has('cached_movies')) {
            return Cache::get('cached_movies');
        }

        $response = Http::get("http://4cdn.cc/player_api.php?username=gbrbrasil&password=305528091&action=get_vod_streams&category_id=32");

        if ($response->successful()) {
            $data = $response->json();

            // Embaralhe o array de resultados
            shuffle($data);

            $resultsToShow = array_slice($data, 0, 3);

            // Armazene os resultados no cache com um tempo de vida (em minutos), por exemplo, 60 minutos
            Cache::put('cached_movies', $resultsToShow, 60);
        } else {
            $resultsToShow = [];
        }

        return $resultsToShow;
    }

    public function getSeries()
    {
        // Verificar se os resultados estão no cache
        if (Cache::has('cached_series')) {
            return Cache::get('cached_series');
        }

        $responseSeries = Http::get("http://4cdn.cc/player_api.php?username=gbrbrasil&password=305528091&action=get_series&category_id=622");

        if ($responseSeries->successful()) {
            $dataseries = $responseSeries->json();
            shuffle($dataseries);
            $resultsSeries = array_slice($dataseries, 0, 8);

            // Armazene os resultados no cache com um tempo de vida (em minutos), por exemplo, 60 minutos
            Cache::put('cached_series', $resultsSeries, 60);
        } else {
            $resultsSeries = [];
        }

        return $resultsSeries;
    }

    public function render()
    {
        return view('livewire.dashboard.index', ['results' => $this->getMovies(), 'series' => $this->getSeries()]);
    }
}
