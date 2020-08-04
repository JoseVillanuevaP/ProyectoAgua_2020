@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="d-flex flex-wrap justify-content-between align-items-start">
            @foreach($reportes as $item)



                <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem;">

                    @if($item->file)
                        <img class="card-img-top" height="250px" src="{{ $item->file }}">
                    @endif

                    <div class="card-body">
                        <h4 class="card-title" align="center"><strong> {{ $item->edificio->name }}</strong></h4>
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



            @endforeach
        </div>

        <div class="mt-4">

            {{ $reportes->render() }}
        </div>


    </div>
@endsection
