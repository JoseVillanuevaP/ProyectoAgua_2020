@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Datos</div>

                <div class="panel-body">                    
                    {!! Form::model($edificios, ['route' => ['edificios.update', $edificios->id],
                    'method' => 'PUT']) !!}

                        @include('edificios.formulario.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection