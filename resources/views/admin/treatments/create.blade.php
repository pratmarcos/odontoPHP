@extends('layouts.admin')

@section('title', 'Crear Tipo de tratamiento')

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

	{!! Form::open(['route' => 'treatments.store', 'method' => 'POST']) !!}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="form-group">
				{!! Form::label('process', 'Tratamiento') !!}
				{!! Form::text('process',null,['class' =>'form-control', 'placeholder' => 'Nombre del tratamiento', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="form-group">
				{!! Form::label('group', 'Tipo') !!}
				{!! Form::select('grouptreatment_id', $groupstreatments, null, ['class' =>'form-control', 'placeholder' => 'Seleccione tipo']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="form-group">
				{!! Form::label('amount', 'Importe') !!}
				{!! Form::text('amount',null,['class' =>'form-control', 'placeholder' => 'Importe a cobrar', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3">	
		    <div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
		<div class="col-md-3">	
		    <div class="form-group">
				 <a class="btn btn-danger" href="{{ route('groupstreatments.index') }}"><i class="fa fa-btn fa-bank"></i>Cancel</a>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>

	{!! Form::close() !!}

@endsection