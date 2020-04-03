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

Route::get('/items/page/{id}', 'ItemsController@items');

Route::get('/item/{item}', 'ItemController@item');








Route::get('/cars', 'CarsController@index')->name('cars');

Route::get('/cars-update', 'CarsController@update')->name('cars-update');

Route::get('/cars-delete', 'CarsController@delete')->name('cars-delete');

Route::get('/cars-insert', 'CarsController@insert')->name('cars-insert');

Route::post('/cars-send', 'CarsController@send')->name('cars-send');