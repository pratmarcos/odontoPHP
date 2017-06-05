@extends('layouts.admin')

@section('title', 'Edicion Tipo de tratamiento')

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

	{!! Form::open(['route' => ['groupstreatments.update', $grouptreatment], 'method' => 'PUT']) !!}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="form-group">
				{!! Form::label('name', 'Grupo') !!}
				{!! Form::text('name',$grouptreatment->name,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3">	
		    <div class="form-group">
				{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
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