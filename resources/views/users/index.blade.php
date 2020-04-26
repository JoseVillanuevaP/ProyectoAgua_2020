@extends('layouts.app')

@section('content')

<body>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        Usuarios <br/>


                        <form action=" {{ route('users.index')}}" method="GET" class="form-inline pull-right">
                            <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{request('name')}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Correro Electrónico" value="{{request('email')}}">
                            </div>

                           <div class="form-group">
                               <input type="submit" class="btn btn-primary " value="buscar">

                            </div>

                        </form>
                    </h1>
                </div>
            </div>


        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>

                                <th>Nombre</th>
                                <th colspan="2">&nbsp;Correo Electrónico</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr>

                                <td>{{ $user->name }}</td>
                                {{--@can('users.show')
                                <td width="10px">
                                    <a href="{{ route('users.show', $user->id) }}"
                                    class="btn btn-sm btn-outline-success">
                                        ver
                                    </a>
                                </td>
                                @endcan--}}
                                <td>{{$user->email}}</td>
                                @can('users.edit')
                                <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                    class="btn btn-sm btn-primary">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('users.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['users.destroy', $user->id],
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
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
