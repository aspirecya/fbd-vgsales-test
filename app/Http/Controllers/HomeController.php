<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;

class HomeController extends Controller
{
    public function __invoke()
    {
        $totalGames = Game::all()->count();
        $totalGlobalSales = Game::all()->sum('global_sales');
        $totalEuSales = Game::all()->sum('eu_sales');
        $totalNaSales = Game::all()->sum('na_sales');
        $totalJpSales = Game::all()->sum('jp_sales');

        return view('home', compact(['totalGames', 'totalGlobalSales', 'totalEuSales', 'totalNaSales', 'totalJpSales']));
    }

}
