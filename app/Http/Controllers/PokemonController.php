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
		$types = [];

		foreach ($response->types as $key => $value) {
			$types[$key] = $value->type->name;
		}

		return view('pokemon', compact('response', 'id', 'name', 'img', 'height', 'weight', 'types'));
	}
}
