<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $allPokemons = Pokemon::select(['id', 'identifier'])->get();
        return view('pokedex.index')->with([
            'pokemons' => $allPokemons
        ]);
    }
}
