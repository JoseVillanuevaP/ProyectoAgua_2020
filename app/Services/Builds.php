<?php

namespace App\Services;

use App\Edificio;

class Builds
{

    public function get(){
        $builds =Edificio::get();
        $build_array['']='seleccione edificio';
        foreach ($builds as $build){
            $build_array[$build->id]=$build->name;
        }
        return $build_array;

    }

}
