<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index() {
    	$car = new Car;
    	$car->brand = 'Renault';
    	$car->model = 'Clio';
    	$car->color = 'Rouge';
    	$car->price = 10000;
    	$car->speed = 200;

    	$car->save();
    }

    public function update() {
    	$car = \App\Car::find(1);
    	$car->color = 'Bleue';
    	$car->save();
    }

    public function delete() {
    	$car = \App\Car::find(3);
    	$car->delete();
    }

    public function send(Request $request) {
    	$car = new Car;
    	$car->brand = $request->input('brand');
    	$car->model = $request->input('model');
    	$car->color = $request->input('color');
    	$car->price = $request->input('price');
    	$car->speed = $request->input('speed');
    	$car->save();
    }

    public function insert() {
    	return view('car');
    }
}
