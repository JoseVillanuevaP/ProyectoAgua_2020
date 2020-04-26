@if(count($errors) >0)
    <div class="alert alert-danger" role="alert">
        <strong>¡Por favor verifique los siguientes errores!</strong>
        <ul>
            @foreach($errors-> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="container">
    <br>

    <div class="form-group">
        {{ Form::label('descripcion_opc', 'Descripción (Opcional)') }}
        {{ Form::textarea('descripcion_opc', null, ['class' => 'form-control', 'id' => 'descripcion_opc']) }}
    </div>
    <div class="form-group">
        {{ Form::label('file', 'Evidencia Fotográfica') }}
        {{ Form::file('file', null, ['class' => 'form-control', 'id' => 'file']) }}
    </div>
    <div class="form-group">
        {{ Form::label('descrip_hallazgo', 'Descripción Del Hallazgo') }}
        {{ Form::text('descrip_hallazgo', null, ['class' => 'form-control', 'id' => 'descrip_hallazgo','required'=>'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('fecha_hallazgo', 'Fecha Del Hallazgo') }}
        {{ Form::date('fecha_hallazgo', null, ['class' => 'form-control', 'id' => 'fecha_hallazgo','required'=>'required']) }}
    </div>
    <div class="form-group">

        {!! Form::select('edificio_id', $edificios,null, ['class' => 'form-control','required'=>'required']) !!}

    </div>
    <div class="form-group">
        {{ Form::label('lugar_especifico ', 'Lugar Específico Del Hallazgo') }}
        {{ Form::text('lugar_especifico', null, ['class' => 'form-control', 'id' => 'lugar_especifico','required'=>'required'])  }}
    </div>

    <div class="form-group">
        <select class="form-control" name="riesgo" required="required">

            <option value="Ambiental">Ambiental</option>
            <option value="Humano">Humano</option>
            <option value="Otro">Otro</option>
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('sugerencia_soluc ', 'Sugerencias De Acciones Para La Solución') }}
        {{ Form::text('sugerencia_soluc', null, ['class' => 'form-control' ,'id' => 'sugerencia_soluc' ,'required'=>'required'])}}
    </div>

    <div class="form-group">
        {{ Form::submit('Enviar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>

</div>
