<?php

namespace App\Livewire\Dashboard;

use App\Models\Movie;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class PlayMovie extends Component
{
    #[Reactive]
    public $id;
    public $posterMovie;

    public function mount($id)
    {
        $this->id = $id;
        $movie = Movie::where('stream_id', $id)->first();
        $this->posterMovie = $movie->stream_icon;
    }
    public function render()
    {
        return view('livewire.dashboard.play-movie');
    }
}
