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

<div class="form-group">

    {!! Form::select('edificio_id', $edificios,null, ['class' => 'form-control','placeholder' =>'Seleccione Edificio']) !!}

</div>


<div class="form-group">
    {{ Form::label('description', 'Descripción') }}
    {{ Form::textarea ('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('mes', 'Mes') }}
<!--{{Form::selectMonth('mes',null,['class'=>'form-control','required'=>'required'])}}-->

{{ Form::select('mes',['Enero' => 'Enero',
'Febrero' => 'Febrero',
'Marzo' => 'Marzo',
'Abril' => 'Abril',
'Mayo' => 'Mayo',
'Junio' => 'Junio',
'Julio' => 'Julio',
'Agosto' => 'Agosto',
'Septiembre' => 'Septiembre',
'Octubre' => 'Octubre',
'Noviembre' => 'Noviembre',
'Diciembre' => 'Diciembre'],
null,['class' => 'form-control','placeholder' =>'Seleccione Mes'])}}


</div>


<div class="form-group">
{{ Form::label('anual', 'Año') }}
{{ Form::selectYear('anual',2000,2030, null, ['class' => 'form-control','placeholder' =>'Seleccione Año']) }}

</div>

<div class="form-group">
{{ Form::label('cantidad_agua ', 'Cantidad De Agua  m3') }}
{{ Form::number('cantidad_agua', null, ['class' => 'form-control' ,'required'=>'required' ,'step'=>'any','min'=>0  ])  }}

</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
