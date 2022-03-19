<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\PokemonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Deleted default root route.
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::resource('/', PokedexController::class);

Route::get('/', [PokedexController::class, 'index']);

Route::get('/{pokemonId}', [PokemonController::class, 'show']);
Route::get('/{pokemonId}/edit', [PokemonController::class, 'edit']);
Route::patch('/{pokemonId}', [PokemonController::class, 'update']);
