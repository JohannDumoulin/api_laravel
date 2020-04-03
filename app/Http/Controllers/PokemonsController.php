<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function pokemons($id) {

    	$curl = curl_init();

    	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $per_page = 9;

        $offset = ($id*$per_page)-$per_page;


    	curl_setopt_array($curl, array(
    	  CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/?limit=".$per_page."&offset=".$offset,
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

    	$pokemons = json_decode($response);
        $prev_page = route('PokemonsRoute', ['id' => $id - 1]);
        $next_page = route('PokemonsRoute', ['id' => $id + 1]);
    	$pokemons_request = $pokemons->results;

    	$pokemon_list = [[]];

    	foreach ($pokemons_request as $key => $the_pokemon_request){
    	    $curl = curl_init();

    	        	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    	        	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


    	        	curl_setopt_array($curl, array(
    	        	  CURLOPT_URL => $the_pokemon_request->url,
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

    	        	$the_pokemon = json_decode($response);
    	        	$pokemon_list[$key]['id'] = $the_pokemon->id;
    	        	$pokemon_list[$key]['name'] = $the_pokemon->name;
    	        	$pokemon_list[$key]['img'] = $the_pokemon->sprites->front_default;
    	}

    	return view('pokemons', compact('pokemon_list', 'prev_page', 'next_page'));
    }
}
