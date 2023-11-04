<?php

namespace App\Livewire\Dashboard;

use App\Models\Channel;
use App\Models\Movie;
use App\Models\Serie;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use TallStackUi\Traits\Interactions;

class Movies extends Component
{
    use Interactions;

    public function render()
    {
        return view('livewire.dashboard.movies');
    }
}