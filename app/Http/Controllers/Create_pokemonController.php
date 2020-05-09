<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class Create_pokemonController extends Controller
{
	public function send(Request $request) {
		$pokemon = new Pokemon;
		$pokemon->name = $request->input('name');
		//image
		$pokemon->height = $request->input('height');
		$pokemon->img = $request->input('img');
		$pokemon->weight = $request->input('weight');
		$pokemon->types = $request->input('types');
		$pokemon->abilities = $request->input('abilities');
		$pokemon->speed = $request->input('speed');
		$pokemon->special_defense = $request->input('special-defense');
		$pokemon->special_attack = $request->input('special-attack');
		$pokemon->defense = $request->input('defense');
		$pokemon->attack = $request->input('attack');
		$pokemon->hp = $request->input('hp');
		$pokemon->save();

		return redirect()->route('create_pokemon');
	}

    public function index() {
    	$pokemons = \App\Pokemon::all();
    	return view('create_pokemon', ['custom_pokemons' => $pokemons]);
    }
}
