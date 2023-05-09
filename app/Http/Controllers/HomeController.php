<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }

}
