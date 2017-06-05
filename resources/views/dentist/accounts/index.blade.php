@extends('layouts.front')
@section('title','Listado Deudores')

@section('content')
{!! Form::model(Request::All() ,['route' => 'accounts.index', 'method' => 'GET']) !!}

<p class="navbar-text navbar-right">
		<div class="row">
			<div class="col-md-6"></div>

			<div class="col-md-3">
			</div>
			<div class="col-md-3">
				<div class="input-group">
   {!! Form::select('order',['' =>'Ordenar por', 'created_at' => 'Fecha', 'description' => 'Descripcion' ],
			null, ['class' => 'form-control']) !!}
					<span class="input-group-btn">
					{!! Form::submit('Ordenar', ['class' => 'btn btn-default']) !!}</span>
				</div>
			</div>
		</div>

               
</p>
{{Form::close()}}



{{$var = null}}


<div class="container">
	<table class="table" id="accounts">
		<thead>
		<tr>
			<th>Fecha</th>
			<th>Descripcion</th>
			<th>Debe</th>
			<th>Haber</th>
		</tr>
		</thead>
		<tbody>
				@foreach ($accounts as $account)
				<tr>

					<td>{{$account->created_at}}</td>
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
	
				@endforeach
		</tbody>
	</table>
</div>


@endsection