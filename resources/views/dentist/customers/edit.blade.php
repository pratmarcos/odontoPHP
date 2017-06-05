@extends('layouts.front')

@section('title', 'Modificar Cliente')

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
	 
	{!! Form::model($customer,['route' => ['customers.update', $customer], 'method' => 'PUT']) !!}

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">
			<div class="form-group">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name',$customer->name ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				{!! Form::label('lastname', 'Apellido') !!}
				{!! Form::text('lastname',$customer->lastname ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">	
			<div class="form-group">
				{!! Form::label('dni', 'Cedula') !!}
				{!! Form::text('dni',$customer->dni ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-7"></div>
	</div>


	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">	
			<div class="form-group">
				{!! Form::label('phone', 'Telefono') !!}
				{!! Form::text('phone',$customer->phone ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-3">	
			<div class="form-group">
				{!! Form::label('mobile', 'Movil') !!}
				{!! Form::text('mobile',$customer->mobile ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>	
	</div>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">	
		    <div class="form-group">
				{!! Form::label('email', 'Mail') !!}
				{!! Form::email('email',$customer->email ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>	
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">		
			<div class="form-group">
				{!! Form::label('address', 'Direccion') !!}
				{!! Form::text('address',$customer->address ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-4"></div>	
	</div>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3">		
			<div class="form-group">
				{!! Form::label('birthdate', 'Fecha Nacimiento') !!}
				{!! Form::date('birthdate',$customer->birthdate ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-3">		
			<div class="form-group">
				{!! Form::label('sex', 'Sexo') !!}
				{!! Form::select('sex',['' =>'Seleccione', 'female' => 'Mujer', 'male' => 'Hombre'],
				null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">		
			<div class="form-group">
				{!! Form::label('notes', 'Nota') !!}
				{!! Form::textarea('notes',$customer->notes ,['class' =>'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-md-6"></div>
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
				 <a class="btn btn-danger" href="{{ route('customers.index') }}"><i class="fa fa-btn fa-bank"></i>Cancel</a>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>


	{!! Form::close() !!}
</div>
    <div class="col-md-4">
	</div>

</div>
	</div>
</div>
@endsection