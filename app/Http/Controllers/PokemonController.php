<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PokemonController extends Controller
{
	public function pokemon($pokemon) {
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/".$pokemon,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  // echo $response;
		}

		$response = json_decode($response);
		$id = $response->id;
		$name = Str::ucfirst($response->name);
		$img = $response->sprites->front_default;
		$height = $response->height / 10;
		$weight = $response->weight / 10;
		$speed = $response->stats[0]->base_stat;
		$special_defense = $response->stats[1]->base_stat;
		$special_attack = $response->stats[2]->base_stat;
		$defense = $response->stats[3]->base_stat;
		$attack = $response->stats[4]->base_stat;
		$hp = $response->stats[5]->base_stat;
		$types = [];
		$abilities = [];

		foreach ($response->types as $key => $value) {
			$types[$key] = $value->type->name;
		}

		foreach ($response->abilities as $key => $value) {
			$abilities[$key] = $value->ability->name;
		}

		return view('pokemon', compact('id', 'name', 'img', 'height', 'weight', 'types', 'abilities', 'speed', 'special_defense', 'special_attack', 'defense', 'attack', 'hp'));
	}
}
