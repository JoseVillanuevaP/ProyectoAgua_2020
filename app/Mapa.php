<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    protected $table = "coordenadas_to_map";
    protected $fillable=[
    'longitud','latitud','edificio'
    ];
}
