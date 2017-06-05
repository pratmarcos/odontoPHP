@extends('layouts.admin')


@section('title', 'Modificar Usuarios')

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

			{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT', 'files' => true]) !!}
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('name', 'Nombre') !!}
						{!! Form::text('name',$user->name,['class' =>'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
						{!! Form::label('username', 'Usuario') !!}
						{!! Form::text('username',$user->username,['class' =>'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
						{!! Form::label('email', 'Correo Electronico') !!}
						{!! Form::email('email',$user->email,['class' =>'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
					</div>
				</div>
				<div class="col-md-4">
				    <div class="form-group">
			            @if(empty($user->path)) 
							<td><img src="{{Storage::url('images/default.gif')}}" class="img-rounded" style="width: 100px;"></td>
						@else
							<td><img src="{{Storage::url('images')}}/{{$user->path}}" class="img-rounded" style="width: 100px;"></td>
						@endif		
					</div>

				    <div class="form-group">
						{!! Form::label('imagen', 'Imagen') !!}
						{!! Form::file('path') !!}
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('phone', 'Telefono') !!}
						{!! Form::text('phone',$user->phone,['class' =>'form-control', 'placeholder' => 'Numero telefonico']) !!}
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('mobile', 'Movil') !!}
						{!! Form::text('mobile',$user->mobile,['class' =>'form-control', 'placeholder' => 'Numero celular']) !!}
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('type', 'Tipo de usuario') !!}
						{!! Form::select('type',config('types'), $user->type, ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="col-md-7"></div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
				    <div class="form-group">
					{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
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