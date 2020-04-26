<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $fillable=[

        'name','location'

    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function reportes(){
        return $this->hasMany(Reporte::class);
    }
}
