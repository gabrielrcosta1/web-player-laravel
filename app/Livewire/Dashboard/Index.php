<?php

namespace App\Livewire\Dashboard;

use App\Models\Movie;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Models\Serie;
use Illuminate\Support\Facades\DB;

class Index extends Component
{

    public function render()
    {
        $series = cache()->remember('series:category_622', now()->addMinutes(60), function () {
            return Serie::where('category_id', 622)
                ->inRandomOrder()
                ->paginate(12);
        });

        $movies = cache()->remember('movies:category_32', now()->addMinutes(60), function () {
            return Movie::where('category_id', 32)
                ->inRandomOrder()
                ->paginate(12);
        });
        return view('livewire.dashboard.index', ['movies' => $movies, 'series' => $series]);
    }
}