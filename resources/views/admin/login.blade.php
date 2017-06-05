<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

</head>
<body>
<br>
<br>
	<div class="div container">
	@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{{Session::get('message')}}
	</div>
	@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Ingreso</h3>
			</div>
			<div class="panel-body">
				{!! Form::open(['route' => 'login.store', 'method' => 'POST']) !!}

				    <div class="form-group">
						{!! Form::label('email', 'Correo Electronico') !!}
						{!! Form::email('email',null,['class' =>'form-control', 'placeholder' => 'Ingresa tu correo', 'required']) !!}
					</div>

				    <div class="form-group">
						{!! Form::label('password', 'Contrasena') !!}
						{!! Form::password('password',['class' =>'form-control', 'placeholder' => 'Ingresa tu contrasena', 'required']) !!}
					</div>

				    <div class="form-group">
						{!! Form::submit('Iniciar Sesion', ['class' => 'btn btn-primary']) !!}
					</div>


				{!! Form::close() !!}
			</div>
		</div>
	</div>
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
</body>
</html>

