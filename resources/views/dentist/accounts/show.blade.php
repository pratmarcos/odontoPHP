@extends('layouts.front')
@section('title','Estado de cuenta')

@section('content')


@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	{{Session::get('message')}}
</div>

@endif
{{$var = null}}
<table class="table table-striped">
	<thead>
		<th>Fecha</th>
		<th>Tratamiento</th>
		<th>Descripcion</th>
		<th>Debe</th>
		<th>Haber</th>
		<th>Saldo</th>
	</thead>
	<tbody>
		<tr>
		@foreach ($accounts as $account)
		@if($account->customer_id == $customer->id)
			<td>{{$account->created_at}}</td>
			<td>{{$account->treatment->process}}</td>
			<td>{{$account->description}}</td>
			@if($account->type == 'charge') 
				<td style="color:red">{{$account->amount}}</td>
				<td></td>
				<label class="hidden">{{$var = $var + $account->amount}}</label>
				@if($var >= 0)
					<td style="color:red">{{$var}}</td>
				@else
					<td>{{$var}}</td>
				@endif
			@else 
				<td></td>
				<td>{{$account->amount}}</td>
				<label class="hidden">{{$var = $var - $account->amount}}</label>
				@if($var > 0)
					<td style="color:red">{{$var}}</td>
				@else
					<td>{{$var = ($var*(-1))}}</td>
				@endif

			@endif
		</tr>
		@endif
		@endforeach

	</tbody>
</table>


</div>
{!! $accounts->render() !!}

@endsection