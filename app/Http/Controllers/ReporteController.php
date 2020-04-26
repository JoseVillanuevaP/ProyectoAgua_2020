<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Product;
use App\Edificio;
use App\User;
use App\Reporte;
use DB;

use App\Http\Requests\ReporteRequest;

class ReporteController extends Controller
{

    /*public function index()
    {
        return view('layouts.Reporte');
    }*/

    public function index()
    {


        $reportes = Reporte::paginate();


        return view('reportes.index', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        $edificios = Edificio::orderBy('id','ASC')->pluck('name','id');

        return view('reportes.create',compact('edificios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(ReporteRequest $request)
    {

        $reporte= Reporte::create($request-> all());

        if($request->hasFile('file')){
            $path = Storage::disk('public')->put('fotos_reporte',$request->file('file'));
            $reporte->fill(['file'=> asset($path)])->save();


        }
        /*return redirect()->route('reportes.index',$reporte-> id)
            ->with('info','Dato Guardado Con Éxito');*/
        return redirect()->Route('welcome')->with('Dato Guardado Con Éxito');

    }


    public function show(Reporte $reporte)
    {
        //dd($product->id);
        return view('reportes.show', compact('reporte'));


    }


    public function edit(Reporte $reporte)
    {
        $edificios = Edificio::pluck('name','id');
        return view('products.edit', compact('product','edificios'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        $reporte->update($request->all());


        return redirect()->route('products.edit',$reporte-> id)
            ->with('info','Dato Actualizado Con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        $reporte ->delete();

        return back()->with('info','Dato Eliminado Correctamente');
    }
}
