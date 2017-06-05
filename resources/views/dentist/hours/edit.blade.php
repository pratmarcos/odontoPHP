@extends('layouts.front')

@section('title', 'Modificar horarios')

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

	{!! Form::open(['route' => ['hours.update', $hour], 'method' => 'PUT']) !!}


		<div class="form-group">
			{!! Form::label('day', 'Dia') !!}
			{!! Form::select('day', config('daysofweek'), $hour->day, ['class' => 'form-control'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('start', 'Comienzo') !!}
			{!! Form::text('start', $hour->start,['class' =>'form-control', 'placeholder' => 'Fecha fin', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('end', 'Fin') !!}
			{!! Form::text('end', $hour->end,['class' =>'form-control', 'placeholder' => 'Fecha fin', 'required']) !!}
		</div>

	    <div class="form-group">
			{!! Form::submit('Modificar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection