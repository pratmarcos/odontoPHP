@extends('layouts.front')

@section('title', 'Alta Paciente')

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
	 
	{!! Form::open(['route' => 'customers.store', 'method' => 'POST']) !!}

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('name', 'Nombre') !!}
						{!! Form::text('name',null ,['class' =>'form-control', 'required']) !!}
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('lastname', 'Apellido') !!}
						{!! Form::text('lastname',null ,['class' =>'form-control', 'required']) !!}
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6">			
				    <div class="form-group">
						{!! Form::label('email', 'Mail') !!}
						{!! Form::email('email',null ,['class' =>'form-control', 'required']) !!}
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>


			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">			
					<div class="form-group">
						{!! Form::label('dni', 'Cedula') !!}
						{!! Form::text('dni',null ,['class' =>'form-control', 'required']) !!}
					</div>
				</div>
				<div class="col-md-7"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('phone', 'Telefono') !!}
						{!! Form::text('phone',null ,['class' =>'form-control', 'required']) !!}
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('mobile', 'Movil') !!}
						{!! Form::text('mobile',null ,['class' =>'form-control', 'required']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('address', 'Direccion') !!}
						{!! Form::text('address',null ,['class' =>'form-control', 'required']) !!}
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('birthdate', 'Fecha nacimiento') !!}
						{!! Form::text('birthdate',null ,array('class' =>'form-control', 'required')) !!}
					</div>
				</div>



			<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>

<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>

<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
<script type="text/javascript">
	$('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>






   				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('sex', 'Sexo') !!}
						{!! Form::select('sex',['' =>'Seleccione', 'female' => 'Mujer', 'male' => 'Hombre'],
						null, ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('notes', 'Nota') !!}
						{!! Form::textarea('notes',null ,['class' =>'form-control', 'required']) !!}
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
						 <a class="btn btn-danger" href="{{ route('customers.index') }}"><i class="fa fa-btn fa-bank"></i>Cancel</a>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>

	{!! Form::close() !!}
@endsection