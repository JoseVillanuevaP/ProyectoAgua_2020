<?php

namespace App\Http\Controllers;

use App\Product;
use App\Edificio;
use Jenssegers\Date\Date;
use Carbon\Carbon;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Input;


class ProductController extends Controller
{
    /**
     * ProductController constructor.
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$data = Product::
        (DB::raw('mes'))
            ->groupBy('mes')
            ->orderBy('mes','ASC')
            ->get();
        return $data;
        dd($data);*/



        /*$current = new Carbon();
        $date = Carbon::now();

        $date ->month();*/
        $edificios = Edificio::pluck('name', 'id');

        $buscar= $request->get('buscarpor');
        $tipo = $request -> get('tipo');



        //$products = Product::type($request->get('edificio_id'))->orderBy('anual','DESC')->paginate();
        $products = Product::orderBy('anual', 'ASC')->buscarpor($tipo,$buscar)->paginate(20);

        //$products = Product::orderBy('anual','ASC')->paginate();


        return view('products.index', compact('products','edificios'));
    }


    public function create()
    {


        $edificios = Edificio::pluck('name', 'id');


        return view('products.create', compact('edificios'));
    }


    public function store(ProductRequest $request)
    {


        /*$product=new Product();

        $product->edificio_id=request('edificio_id');
        $product->description=request('description');
        $product->mes=request('mes');
        $product->anual=request('anual');
        $product->cantidad_agua=request('cantidad_agua');
        */



        /*$user = $request->get('mes');
        $date1= Product::where('mes', '=',$request->get('mes'))->first();
        $date2= Product::where('anual', '=',$request->get('anual'))->first();

        if ($date1 === null ) {
            echo "no existe mes ";
        }elseif ($date2 == null){
            echo "no existe año :V";
        }else{
            echo "ya existe mes y año carnal";
        }*/

       // $product->save();

        $product= Product::create($request-> all());

        return redirect()->route('products.index', $product->id)
            ->with('info', 'Dato Guardado Con Éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //dd($product->id);
        return view('products.show', compact('product'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $edificios = Edificio::pluck('name', 'id');
        return view('products.edit', compact('product', 'edificios'));


    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());


        return redirect()->route('products.edit', $product->id)
            ->with('info', 'Dato Actualizado Con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $prod   uct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('info', 'Dato Eliminado Correctamente');
    }


}
