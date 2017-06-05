@extends('layouts.admin')

@section('title', 'Crear Usuarios')

@section('content')

@if(count($errors) > 0)

	<div class="alert alert-danger" role="alert">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>	


@endif

	{!! Form::open(['route' => 'users.store', 'method' => 'POST', 'files' => true]) !!}
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">
			<div class="form-group">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name',null,['class' =>'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				{!! Form::label('username', 'Usuario') !!}
				{!! Form::text('username',null,['class' =>'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
		    <div class="form-group">
				{!! Form::label('email', 'Correo Electronico') !!}
				{!! Form::email('email',null,['class' =>'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">	
			<div class="form-group">
				{!! Form::label('phone', 'Telefono') !!}
				{!! Form::text('phone',null,['class' =>'form-control', 'placeholder' => 'Numero telefonico']) !!}
			</div>
		</div>
		<div class="col-md-3">	
			<div class="form-group">
				{!! Form::label('mobile', 'Movil') !!}
				{!! Form::text('mobile',null,['class' =>'form-control', 'placeholder' => 'Numero celular']) !!}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">	
		    <div class="form-group">
				{!! Form::label('password', 'Contrasena') !!}
				{!! Form::password('password',['class' =>'form-control', 'placeholder' => '', 'required']) !!}
			</div>
		</div>
		<div class="col-md-3">	
		    <div class="form-group">
				{!! Form::label('repitpassword', 'Contrasena') !!}
				{!! Form::password('repitpassword',['class' =>'form-control', 'placeholder' => '', 'required']) !!}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">	
	        <div class="form-group">
				{!! Form::label('type', 'Tipo de usuario') !!}
				{!! Form::select('type', config('types'), null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="col-md-3">
		    <div class="form-group">
				{!! Form::label('imagen', 'Imagen') !!}
				{!! Form::file('path') !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">	
		    <div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
		<div class="col-md-3">	
		    <div class="form-group">
				 <a class="btn btn-danger" href="{{ route('administrador') }}"><i class="fa fa-btn fa-bank"></i>Cancel</a>
			</div>
		</div>
	</div>

	{!! Form::close() !!}

@endsection