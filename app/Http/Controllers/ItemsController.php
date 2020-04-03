<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function items($id) {
    	$curl = curl_init();

    	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    	$per_page = 9;

        $offset = ($id*$per_page)-$per_page;

    	curl_setopt_array($curl, array(
    	  CURLOPT_URL => "https://pokeapi.co/api/v2/item/?limit=".$per_page."&offset=".$offset,
    	  CURLOPT_RETURNTRANSFER => true,
    	  CURLOPT_ENCODING => "",
    	  CURLOPT_MAXREDIRS => 10,
    	  CURLOPT_TIMEOUT => 30,
    	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    	  CURLOPT_CUSTOMREQUEST => "GET",
    	  CURLOPT_POSTFIELDS => "",
    	  CURLOPT_COOKIE => "__cfduid=dd442dafcd38909abb97f300a6caa67bf1583479956",
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
    	$prev_page = $response->previous;
        $next_page = $response->next;
    	$items_request = $response->results;

    	$item_list = [[]];

    	foreach ($items_request as $key => $the_item_request){
    			$curl = curl_init();

    			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    			curl_setopt_array($curl, array(
    			  CURLOPT_URL => $the_item_request->url,
    			  CURLOPT_RETURNTRANSFER => true,
    			  CURLOPT_ENCODING => "",
    			  CURLOPT_MAXREDIRS => 10,
    			  CURLOPT_TIMEOUT => 30,
    			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    			  CURLOPT_CUSTOMREQUEST => "GET",
    			  CURLOPT_POSTFIELDS => "",
    			  CURLOPT_COOKIE => "__cfduid=dd442dafcd38909abb97f300a6caa67bf1583479956",
    			));

    			$response = curl_exec($curl);
    			$err = curl_error($curl);

    			curl_close($curl);

    			if ($err) {
    			  echo "cURL Error #:" . $err;
    			} else {
    			  // echo $response;
    			}

    			$the_item = json_decode($response);
    			$item_list[$key]['id'] = $the_item->id;
    			$item_list[$key]['name'] = $the_item->name;
    			$item_list[$key]['img'] = $the_item->sprites->default;
    	}

    	return view('items', compact('response', 'item_list', 'prev_page', 'next_page'));
    }
}
