@extends('layouts.admin')
@section('title','Tipos de tratamiento')

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
	{!! Form::model(Request::All() ,['route' => 'groupstreatments.index', 'method' => 'GET']) !!}
		<div class="row">
			<div class="col-md-8">
			</div>
			<div class="col-md-4">
				<div class="input-group">
					{!! Form::text('name',null ,['class' =>'form-control', 'placeholder' => 'Tipo']) !!}
					<span class="input-group-btn">
					{!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}</span>
				</div>
			</div>
		</div>
	{!!FORM::close()!!}

<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Acciones</th>
	</thead>
	<tbody>
		<tr>
		@foreach ($groupstreatments as $grouptreatment)

			<td>{{$grouptreatment->name}}</td>
			<td>
			<a class="btn btn-success" href="{{route('groupstreatments.edit',$grouptreatment->id)}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
		</tr>
		@endforeach

	</tbody>
</table>
</div>
{!! $groupstreatments->render() !!}

@endsection