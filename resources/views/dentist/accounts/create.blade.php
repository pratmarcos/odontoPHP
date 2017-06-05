@extends('layouts.front')

@section('title', 'Cuenta de clientes')

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

	{!! Form::open(['route' => ['accounts.store', $customer], 'method' => 'POST']) !!}

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::hidden('customer_id', $customer->id) !!}
						{!! Form::label('lastname', 'Paciente:  ') !!}			
						{!! Form::label('name', $customer->name) !!}
						{!! Form::label('lastname', $customer->lastname) !!}
						{!! Form::hidden('date', Date::now()->format('j \d\e F \d\e Y')) !!}
					</div>
				</div>
				<div class="col-md-4">
						<div class="form-group">
						{!! Form::label('description', 'Descripcion') !!}
						{!! Form::text('description', null,['class' =>'form-control', 'placeholder' => 'A cuenta de...', 'required']) !!}
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-4">
					{!! Form::label('lastname', 'CI: ') !!}
					{!! Form::label('lastname', $customer->dni) !!}
				</div>
				<div class="col-md-4">	
					<div class="form-group">
						{!! Form::label('amount', 'Importe') !!}
						{!! Form::text('amount',null,['class' =>'form-control', 'placeholder' => 'Importe de la transaccion', 'required']) !!}
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">			
			        <div class="form-group">
						{!! Form::label('type', 'Tipo') !!}
						{!! Form::select('type', ['' =>'Seleccione tipo de movimiento', 'pay' => 'Pago', 'charge' => 'Cargo'], null, ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-2">
				    <div class="form-group">
						{!! Form::submit('Facturar', ['class' => 'btn btn-primary']) !!}
					</div>
				</div>
				<div class="col-md-2">	
			    	<div class="form-group">
						 <a class="btn btn-danger" href="{{ route('customers.index') }}"><i class="fa fa-btn fa-bank"></i>Cancel</a>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>


	{!! Form::close() !!}

@endsection