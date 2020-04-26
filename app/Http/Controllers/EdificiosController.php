<?php

namespace App\Http\Controllers;
use App\Edificio;
use Illuminate\Http\Request;
use App\Http\Requests\EdificioRequest;

class EdificiosController extends Controller
{
     public function index()
    {
        $edificios = Edificio::paginate();

        return view('edificios.index', compact('edificios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('edificios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EdificioRequest $request)
    {
        $edificio= Edificio::create($request-> all());

        return redirect()->route('edificios.index',$edificio-> id)
            ->with('info','Dato Guardado Con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Edificio $edificios)
    {
        //dd($product->id);
         return view('edificios.show', compact('edificios'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Edificio $edificios)
    {
        return view('edificios.edit', compact('edificios'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(EdificioRequest $request, Edificio $edificios)
    {
        $edificios->update($request->all());


        return redirect()->route('edificios.edit',$edificios-> id)
            ->with('info','Dato Actualizado Con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edificio $edificios)
    {
        $edificios ->delete();

        return back()->with('info','Dato Eliminado Correctamente');
    }
}
