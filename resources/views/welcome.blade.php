@extends('layouts.front')
@section('title', 'Odonto')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-3">
            <h1>Sistema Odonto</h1>
            <div class="thumbnail">
              <img src="{{Storage::url('images/dentadura.jpg')}}" style="width: 300px;">
            </div>
        </div>
        <div class="col-md-5">
        </div>
        <div class="col-md-4">
            <br>
            <br>
            <div class="panel panel-primary">
              <div class="panel-heading">Ultimas novedades</div>
              <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item">Busqueda de usuarios</li>
                    <li class="list-group-item">Envios de confirmacion SMS</li>
                    <li class="list-group-item">Confirmacion por WHATSAPP</li>
                    <li class="list-group-item">Sistema de Facturacion</li>
                  </ul>
              </div>
            </div>          
        </div>
    </div>
</div>
@endsection