<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayMovieController extends Controller
{
    public function index($id)
    {

        return view('dashboard.playmovie', [
            'id' => $id,
        ]);
    }
}