  
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Datos</div>

                <div class="panel-body">                                        
                    <p><strong>Nombre: </strong>     {{ $edificios->name }}</p>
                    <p><strong>Localización: </strong>  {{ $edificios->location }}</p>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                