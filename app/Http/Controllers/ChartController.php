<?php

namespace App\Http\Controllers;

use App\Edificio;
use App\Product;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function index()
    {
        $data['year_list'] = $this->fetch_year();

        $ed = Edificio::pluck('name', 'id');

        $data2['edifi_list'] = $this->fetch_edificio();


        return view('grafica.charts', compact('ed', 'data', 'data2'))->with($data)->with($data2);
    }

    public function getEdif(Request $request, $id)
    {
        if($request->ajax()){
            $edific = Product::edif_anual($id);
            return response()->json($edific);
        }

    }

    public function fetch_year()
    {
        $data = DB::table('products')->select(DB::raw('anual'))->groupBy('anual')->orderBy('anual', 'DESC')->get();
        return $data;
    }

    public function fetch_edificio()
    {

        $data2 = DB::table('edificios')->select(DB::raw('name'))->groupBy('name')->orderBy('name', 'ASC')->get();
        return $data2;
    }

    public function fetch_data(Request $request)
    {
        if ($request->input('anual')) {

            $chart_data = $this->fetch_chart_data($request->input('anual'));

            foreach ($chart_data->toArray() as $row) {

                $output[] = array(
                    'mes' => $row->mes,
                    'cantidad_agua' => floatval($row->cantidad_agua)
                );
            }

            echo json_encode($output);
        }
    }

    function fetch_chart_data($anual)
    {
        $data = DB::table('products')->orderBy('anual', 'ASC')->where('anual', $anual)->get();
        return $data;
    }
}
