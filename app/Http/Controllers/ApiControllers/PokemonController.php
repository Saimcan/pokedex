<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Pokemon;

class PokemonController extends ApiBaseController
{
    protected function getAllData(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Pokemon::all());
    }

    protected function getDataById($id): \Illuminate\Http\JsonResponse
    {
        return response()->json(Pokemon::find($id));
    }
}
