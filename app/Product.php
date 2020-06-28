<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Edificio;
use Jenssegers\Date\Date;

class Product extends Model
{
    protected $fillable = [
        'edificio_id', 'description', 'mes', 'anual', 'cantidad_agua'
    ];

    public function edificio()
    {

        return $this->belongsTo(Edificio::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function getUpdatedAtAttribute($date)
    {
        return new Date($date);
    }


    public function scopeBuscarpor($query, $tipo, $buscar)
    {
        if (($tipo) && ($buscar)) {
            return $query->where($tipo, 'like', "%$buscar%");
        }

    }

    public static function edif_anual($id){
        return Product::where('edificio_id','=',$id)->get();
    }




}
