@extends('layouts.admin')

@section('title', 'Edicion de tratamiento')

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

	{!! Form::open(['route' => ['treatments.update', $treatment], 'method' => 'PUT']) !!}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="form-group">
				{!! Form::label('process', 'Tratamiento') !!}
				{!! Form::text('process',$treatment->process,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="form-group">
				{!! Form::label('amount', 'Importe') !!}
				{!! Form::text('amount',$treatment->amount,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="form-group">
				{!! Form::label('process', 'Tratamiento') !!}
				{!! Form::label('group', 'Tipo') !!}
				{!! Form::select('grouptreatment_id', $groupstreatments, $treatment->grouptreatment_id, ['class' =>'form-control']) !!}
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
				 <a class="btn btn-danger" href="{{ route('treatments.index') }}"><i class="fa fa-btn fa-bank"></i>Cancel</a>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>

	{!! Form::close() !!}

@endsection