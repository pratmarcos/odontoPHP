@extends('layouts.front')

@section('title', 'Modificar Historia')

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
	 
	{!! Form::open(['route' => ['histories.update', $history], 'method' => 'PUT', 'files' => true]) !!}

		<div class="form-group">
			{!! Form::label('tooth', 'Diente numero') !!}
			{!! Form::label('tooth', $history->tooth) !!}
			{!! Form::hidden('tooth', $history->tooth) !!}

		</div>

		<div class="form-group">
			{!! Form::label('amount', 'Valor $') !!}
			{!! Form::text('amount', $history->amount,null) !!}
		</div>

		<div class="form-group">
			{!! Form::label('status', 'Estado') !!}
			{!! Form::select('status', config('status'), $history->status, ['class' => 'form-control'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('notes', 'Notas') !!}
			{!! Form::textarea('notes',$history->notes ,['class' =>'form-control', 'required']) !!}
		</div>

	    <div class="form-group">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection