@extends('layouts.admin')
@section('title','Inicio')

@section('content')

@if(Session::has('message-error'))
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	{{Session::get('message')}}
</div>

@endif

<h2>Bienvenidos a la zona de administracion</h2>

@endsection