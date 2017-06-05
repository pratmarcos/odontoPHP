@extends('layouts.front')
@section('title','Listado de horas')

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

				<table class="table table-striped" id="usuarios">
					<thead>
						<th>Nombre</th>
					</thead>
					<tbody>
						@foreach ($hours as $hour)
						<tr>

							<td>{{$hour->day}}</td>
							<td><a class="btn btn-success" href="{{route('hours.edit',$hour->id)}}" title="Editar Hora" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a class="btn btn-danger" href="{{route('hours.destroy', $hour->id)}}" title="Eliminar" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
							</td>

						</tr>
						@endforeach

					</tbody>
				</table>
</div>
{!! $hours->render() !!}

@endsection