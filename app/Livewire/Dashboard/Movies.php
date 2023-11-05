<?php

namespace App\Livewire\Dashboard;

use App\Models\Category;
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

        $categories = Category::all();

        foreach ($categories as $category) {
            $movies = Movie::where('category_id', $category->category_id)->paginate(3);
        }

        return view('livewire.dashboard.movies', compact('categories'));
    }
}
