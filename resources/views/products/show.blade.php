
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Datos</div>

                <div class="panel-body">
                    <p><strong>Nombre: </strong>     {{ $product->edificio_id }}</p>
                    <p><strong>Descripción: </strong>  {{ $product->description }}</p>
                    <p><strong>Mes: </strong>  {{ $product->mes }}</p>
                    <p><strong>Año: </strong>  {{ $product->anual }}</p>
                    <p><strong>Cantidad De Agua: </strong>     {{ $product->cantidad_agua }} m3</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

