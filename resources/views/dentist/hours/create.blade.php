@extends('layouts.front')

@section('title', 'Agregar horarios')

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

	{!! Form::open(['route' => 'hours.store', 'method' => 'POST']) !!}


		<div class="form-group">
			{!! Form::label('day', 'Dia') !!}
			{!! Form::select('day', config('daysofweek'), null, ['class' => 'form-control'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('start', 'Comienzo') !!}
			{!! Form::text('start', null,['class' =>'form-control', 'placeholder' => 'Fecha fin', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('end', 'Fin') !!}
			{!! Form::text('end',null,['class' =>'form-control', 'placeholder' => 'Fecha fin', 'required']) !!}
		</div>

	    <div class="form-group">
			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection