<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Edificio;


class Reporte extends Model
{
    protected $fillable = [
        'descripcion_opc','file','descrip_hallazgo','fecha_hallazgo','edificio_id','lugar_especifico', 'riesgo','sugerencia_soluc'
    ];

    public function edificio (){

        return $this->belongsTo(Edificio::class);
    }
}
