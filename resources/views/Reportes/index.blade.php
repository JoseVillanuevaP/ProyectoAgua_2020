@extends('layouts.app')

@section('content')
    <div class="container">




            @foreach($reportes as $item)
                <div class="d-flex flex-wrap justify-content-between align-items-start">


                    <div class="card" style="width: 18rem;">

                        @if($item->file)
                            <img class="card-img-top" src="{{ $item->file }}">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title"><strong> {{ $item->edificio->name }}</strong></h5>
                            <p class="card-text"><strong>Descripción:</strong> {{ $item->descrip_hallazgo }}<br></p>
                            <p class="card-text"><strong>Fecha De Hallazgo:</strong> {{ $item->fecha_hallazgo }}</p>
                            <p class="card-text"><strong>Lugar Específico:</strong> {{ $item->lugar_especifico }}</p>
                            <p class="card-text"><strong>Riesgo:</strong> {{ $item->riesgo}}</p>

                            @can('reportes.destroy')
                                {!! Form::open(['route' => ['reportes.destroy', $item->id],
                            'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>
                                {!! Form::close() !!}
                            @endcan
                        </div>
                    </div>


                </div>
            @endforeach

            {{ $reportes->render() }}



    </div>
@endsection
