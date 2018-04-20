@extends('layouts.menuPrueva')
  @section('content')
  <h1>este es el create</h1>
        @include('alert.request')
		{!!Form::open(['route'=>'prueva.store', 'method'=>'POST'])!!}
			<div class="form-group">
				{!!Form::label('nombre','Nombre:')!!}
				{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('apellido','Apellido:')!!}
				{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido del Usuario'])!!}
			</div>
				{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	
	@endsection