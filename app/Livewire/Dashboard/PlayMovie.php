<?php

namespace App\Livewire\Dashboard;

use App\Models\Movie;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\On;

class PlayMovie extends Component
{
    #[Reactive]
    public $id;
    public $cast;
    public $director;
    public $country;
    public $genre;
    public $duration;
    public $rating;

    public $movieName;
    public $description;
    public $posterMovie;


    public $tempoAssistido = 0;
    #[On('post-created')]
    public function atualizarTempoAssistido($time)
    {
        dd($time);
    }
    public function getMoviesInformations($id): array
    {
        $request = Http::get('http://4cdn.cc/player_api.php?username=gbrbrasil&password=305528091&action=get_vod_info&vod_id=' . $id);
        $response = json_decode($request->body(), true);
        return $response;

    }

    public function mount($id)
    {

        $this->id = $id;

        $data = $this->getMoviesInformations($this->id);
        $this->movieName = $data['movie_data']['name'];
        $this->description = $data['info']['description'];
        $this->cast = $data['info']['cast'];
        $this->director = $data['info']['director'];
        $this->country = $data['info']['country'];
        $this->genre = $data['info']['genre'];
        $this->duration = $data['info']['duration'];
        $this->rating = $data['info']['rating'];
        $movie = Movie::where('stream_id', $id)->first();
        $this->posterMovie = $movie->stream_icon;
    }
    public function render()
    {
        return view('livewire.dashboard.play-movie');
    }
}