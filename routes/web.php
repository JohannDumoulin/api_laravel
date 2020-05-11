<?php

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

Route::get('/', 'IndexController@index');

Route::get('/pokemons/page/{id}', 'PokemonsController@pokemons')->name('PokemonsRoute');

Route::get('/pokemon/{pokemon}', 'PokemonController@pokemon');

Route::get('/items/page/{id}', 'ItemsController@items')->name('ItemsRoute');

Route::get('/item/{item}', 'ItemController@item');

//Create Pokemons
Route::get('/create-pokemon', 'Create_pokemonController@index')->name('create_pokemon');

Route::post('/pokemons-send', 'Create_pokemonController@send')->name('pokemons-send');