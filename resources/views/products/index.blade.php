@extends('layouts.app')

@section('content')

    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 align="center">
                        Listado De Registros Bitácora De Consumo De Agua <br/><br/>

                    </h1>

                </div>
            </div>


            <div class="col-md-8 col-md-offset-2">
                @can('products.create')
                    <a href="{{ route('products.create') }}"
                       class="btn btn-sm btn-primary btn-lg btn-block active">
                        <h5>Añadir Un Nuevo Registro</h5>
                    </a><br/>
                @endcan
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>

                    <div class="panel-body">


                        <form class="form-inline my-2 my-lg-0">
                            {{ Form::select('tipo',[
                            'anual' => 'Año',
                            'mes' => 'Mes',
                            'cantidad_agua '=>'Consumo'],
                            null,['class' => 'form-control','placeholder' =>'Seleccione Opción'])}}

                            <input name="buscarpor" class="form-control mr-sm-2" type="search"
                                   placeholder="Buscar por " aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>


                        </form>

                        <br/><br/>



                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>

                                <th>Ubicación</th>
                                <th>Mes</th>
                                <th>Año</th>
                                <th>Consumo</th>
                                <th>Acciones</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $sum = 0; $num_registros=0;  ?>

                            @foreach($products as $product)

                                <tr>

                                    <td> {{$product -> edificio->name}}</td>


                                <!--  <td>{{-- date("F", mktime(0, 0, 0, $product->mes, 1)) --}}</td>-->

                                    <td>{{$product->mes}}
                                    <td>{{$product->anual}} </td>
                                    <td>{{$product->cantidad_agua}} m<sup>3</sup></td>
                                <!--
                                        <td width="10px">
                                            <a href="{{ route('products.show', $product->id) }}"
                                            class="btn btn-sm btn-default">
                                                ver
                                            </a>
                                        </td>-->

                                    @can('products.edit')
                                        <td width="10px">
                                            <a href="{{ route('products.edit', $product->id) }}"
                                               class="btn btn-sm btn-primary">
                                                editar
                                            </a>
                                        </td>
                                    @endcan
                                    @can('products.destroy')
                                        <td width="10px">
                                            {!! Form::open(['route' => ['products.destroy', $product->id],
                                            'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    @endcan
                                </tr>
                                @php
                                    $sum += $product->cantidad_agua;
                                    $num_registros = $product->count();
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                        {!!  $products->render() !!}
                    </div>
                </div>
            </div>

        </div>


        <strong>Cantidad total De Agua Consumida: </strong>{{ $sum }} m<sup>3</sup> <br/>
        <strong>Número De Registros: </strong>{{ $num_registros }}
    </div>
    </body>
@endsection
