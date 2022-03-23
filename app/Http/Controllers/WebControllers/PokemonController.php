<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class PokemonController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id): View|Factory|Application
    {
        $pokemon = Pokemon::find($id);
        return view('pokemon.detail')->with('pokemon', $pokemon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id): View|Factory|Application
    {
        $pokemon = Pokemon::find($id);
        return view('pokemon.edit')->with('pokemon', $pokemon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->identifier = $request->input('name');
        $pokemon->species_id = $request->input('species_id');
        $pokemon->height = $request->input('height');
        $pokemon->weight = $request->input('weight');
        $pokemon->base_experience = $request->input('base_experience');
        $pokemon->save();

        Session::flash('message', 'Pokemon has successfully updated.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
