@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1 align="center">Listado De Reportes</h1>
                @can('reportes.create')
                    <!-- <a href="{{-- route('reportes.create') --}}"
                       class="btn btn-sm btn-primary btn-lg btn-block active">
                        <h5>Añadir Nuevo Reporte</h5>
                    </a>-->
                @endcan
                <br>
                @foreach($reportes as $item)
                    <div class="panel panel-default">

                        <h5><strong>Edificio:</strong> {{ $item->edificio->name }}&nbsp;&nbsp;
                            <strong>Descripción:</strong> {{ $item->descrip_hallazgo }}<br>
                            <strong>Fecha De Hallazgo:</strong> {{ $item->fecha_hallazgo }}&nbsp;&nbsp;
                            <strong>Lugar Específico:</strong> {{ $item->lugar_especifico }}&nbsp;&nbsp;
                            <strong>Riesgo:</strong> {{ $item->riesgo}}
                        </h5>
                        @can('reportes.destroy')
                            <td width="10px">
                                {!! Form::open(['route' => ['reportes.destroy', $item->id],
                                'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>
                                {!! Form::close() !!}
                            </td>
                        @endcan



                            <div class="panel-body">
                                @if($item->file)
                                    <div align="center"><img src="{{ $item->file }}" class="img-responsive" width="300px" ></div>
                                @endif
                                <br>

                            </div>


                    </div>
                @endforeach

                {{ $reportes->render() }}
            </div>
        </div>
    </div>
@endsection
