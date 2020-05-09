<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';
    protected $fillable = ['name', 'img', 'height', 'weight', 'types', 'abilities', 'speed', 'special_defense', 'special_attack', 'defense', 'attack', 'hp'];
}
