@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1 align="center">Listado De Reportes</h1>
                @can('reportes.create')
                    <a href="{{ route('reportes.create') }}"
                       class="btn btn-sm btn-primary btn-lg btn-block active">
                        <h5>Añadir Nuevo Reporte</h5>
                    </a>
                @endcan
                <br>
                @foreach($reportes as $item)
                    <div class="panel panel-default">

                        <h5><strong>Edificio:</strong> {{ $item->edificio->name }}</h5></h1><br>
                        <h5><strong>Descripción:</strong> {{ $item->descrip_hallazgo }}</h5></h1><br>
                        <h5><strong>Fecha De Hallazgo:</strong> {{ $item->fecha_hallazgo }}</h5></h1><br>
                        <h5><strong>Lugar Específico:</strong> {{ $item->lugar_especifico }}</h5></h1><br>
                        <h5><strong>Riesgo:</strong> {{ $item->riesgo}}</h5></h1><br>

                        <div class="panel-body">
                            @if($item->file)
                                <img src="{{ $item->file }}" class="img-responsive" width="500px">
                            @endif
                            <br>

                        </div>

                        @can('reportes.edit')
                            <td width="10px">
                                <a href="{{ route('reportes.edit', $item->id) }}"
                                   class="btn btn-sm btn-primary">
                                    editar
                                </a>
                            </td>
                        @endcan

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
                    </div>
                @endforeach

                {{ $reportes->render() }}
            </div>
        </div>
    </div>
@endsection
