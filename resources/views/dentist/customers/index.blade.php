@extends('layouts.front')
@section('title','Listado de Clientes')

@section('content')
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">


@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	{{Session::get('message')}}
</div>

@endif
<div class="panel-body">
	{!! Form::model(Request::All() ,['route' => 'customers.index', 'method' => 'GET']) !!}
		<div class="row">
			<div class="col-md-5"></div>
            <div class="col-md-2">
                {!! Form::select('order',['' =>'Ordenar por', 'name' => 'Nombre', 'lastname' => 'Apellido' ],
                    null, ['class' => 'form-control']) !!}
            </div>
			<div class="col-md-2">
					{!! Form::text('dni',null ,['class' =>'form-control', 'placeholder' => 'Cedula']) !!}			
			</div>
			<div class="col-md-3">
				<div class="input-group">
					{!! Form::text('name',null ,['class' =>'form-control', 'placeholder' => 'Apellido']) !!}
					<span class="input-group-btn">
					{!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}</span>
				</div>
			</div>
		</div>
	{!!FORM::close()!!}

				<table class="table table-striped" id="usuarios">
					<thead>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cedula</th>
						<th>Opciones</th>
					</thead>
					<tbody>
						<tr>
						@foreach ($customers as $customer)

							<td>{{$customer->name}}</td>
							<td>{{$customer->lastname}}</td>
							<td>{{$customer->dni}}</td>
							<td>

							<a class="btn btn-success" href="{{route('customers.edit',$customer->id)}}" title="Editar cliente" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a class="btn btn-success" href="{{route('accounts.create',$customer->id)}}" title="Agregar movimiento" role="button"><i class="fa fa-usd" aria-hidden="true"></i></a>
							<a class="btn btn-success" href="{{route('accounts.show',$customer->id)}}" title="Estado de cuenta" role="button"><i class="fa fa-file" aria-hidden="true"></i></a>
							<a class="btn btn-success" href="{{route('histories.index',$customer->id)}}" title="Mostrar historia" role="button"><i class="fa fa-hospital-o" aria-hidden="true"></i></a>
							<a class="btn btn-danger" href="{{route('customers.destroy', $customer->id)}}" title="Eliminar" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

						</tr>
						@endforeach

					</tbody>
				</table>
</div>
{!! $customers->render() !!}

<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){
    $('#usuarios').DataTable({
    	"processing": true,
    	"serverSide": true,
    	"ajax": "/api/customers",
    	"colums":[
    		{data: 'name'},
    		{data: 'lastname'},
    		{data: 'dni'},
    	]
    });

});
</script>

@endsection