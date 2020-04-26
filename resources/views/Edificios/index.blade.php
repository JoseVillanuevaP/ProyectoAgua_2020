@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">


                    @can('edificios.create')
                    <a href="{{ route('edificios.create') }}"
                    class="btn btn-sm btn-primary btn-lg btn-block active">
                        <h5>Registrar Un Nuevo Edificio</h5>
                    </a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>

                                <th>Nombre</th>
                                <th>Localización</th>
                                <th>Acciones</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>


                            @foreach($edificios as $edificio)
                            <tr>

                                <td>{{ $edificio->name }}</td>
                                {{--@can('edificios.show')
                                <td width="10px">
                                    <a href="{{ route('edificios.show', $edificio->id) }}"
                                    class="btn btn-sm btn-outline-primary">
                                        ver
                                    </a>
                                </td>
                                @endcan --}}
                                <td>{{$edificio -> location}}</td>

                                @can('edificios.edit')
                                <td width="10px">
                                    <a href="{{ route('edificios.edit', $edificio->id) }}"
                                    class="btn btn-sm btn-primary">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('edificios.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['edificios.destroy', $edificio->id],
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $edificios->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
