<?php

namespace App\Http\Controllers;
//use App\Mapa;
use App\Product;
use App\Edificio;
use Illuminate\Http\Request;

class MapaController extends Controller
{
      public function index()
    {
        $chale = Product::all();

        $categorias=Product::where('edificio_id', 1) ->sum('cantidad_agua');
        $categorias2=Product::where('edificio_id', 3) ->sum('cantidad_agua');
        $categorias3=Product::where('edificio_id', 7) ->sum('cantidad_agua');
        $categorias4=Product::where('edificio_id', 8) ->sum('cantidad_agua');
        $categorias5=Product::where('edificio_id', 9) ->sum('cantidad_agua');
        $categorias6=Product::where('edificio_id', 10) ->sum('cantidad_agua');

        //dd($chale);
        //dd($categorias);

        return view('layouts.mapa',compact('chale','categorias','categorias2','categorias3','categorias4'
            ,'categorias5','categorias6'));
    }


}
