@extends('layouts.admin')
@section('title','Listado de Tratamientos')

@section('content')


@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	{{Session::get('message')}}
</div>

@endif
<div class="panel-body">

	{!! Form::model(Request::All() ,['route' => 'treatments.index', 'method' => 'GET']) !!}
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-3">
					{!! Form::select('grouptreatment_id', $groupstreatments , null,['class' =>'form-control', 'placeholder' => 'Sin grupo']) !!}
			</div>
			<div class="col-md-3">
				<div class="input-group">
					{!! Form::text('name',null ,['class' =>'form-control', 'placeholder' => 'Tratamiento']) !!}
					<span class="input-group-btn">
					{!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}</span>
				</div>
			</div>
		</div>
	{!!FORM::close()!!}


<table class="table table-striped">
	<thead>
		<th>Tratamiento</th>
		<th>Grupo</th>
		<th>Importe</th>
		<th>Opciones</th>
	</thead>
	<tbody>
		<tr>
		@foreach ($treatments as $treatment)

			<td>{{$treatment->process}}</td>
			<td>{{$treatment->grouptreatment->name}}</td>
			<td>{{$treatment->amount}}</td>
			<td>
			<a class="btn btn-success" href="{{route('treatments.edit',$treatment->id)}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

		</tr>
		@endforeach

	</tbody>
</table>
</div>
{!! $treatments->render() !!}

@endsection