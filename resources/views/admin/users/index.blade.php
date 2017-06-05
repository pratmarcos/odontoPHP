@extends('layouts.admin')
@section('title','Listado Usuarios')

@section('content')
{!! Form::model(Request::All() ,['route' => 'users.index', 'method' => 'GET']) !!}

<p class="navbar-text navbar-right">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-3">
                {!! Form::text('name',null ,['class' =>'form-control', 'placeholder' => 'Nombre']) !!}
            </div>
            <div class="col-md-3">
                <div class="input-group">
                   {!! Form::select('order',['' =>'Ordenar por', 'id' => 'ID', 'name' => 'Nombre' ],
                    null, ['class' => 'form-control']) !!}
                    <span class="input-group-btn">
                    {!! Form::submit('Ordenar', ['class' => 'btn btn-default']) !!}</span>
                </div>
            </div>
        </div>
</p>
{{Form::close()}}

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Opciones</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($users as $user)

                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('users.edit',$user->id)}}" title="Editar usuario" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-danger" href="{{route('users.destroy', $user->id)}}" title="Eliminar" onclick="return confirm('Quiere borrar el usuario?')" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
            </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection