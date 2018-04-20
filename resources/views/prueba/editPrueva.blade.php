  @extends('layouts.menuPrueva')
  @section('content')
      @include('alert.request')
		{!!Form::model($user,['route'=>['prueva.update',$user],'method'=>'PUT'])!!}
			<div class="form-group">
				{!!Form::label('nombre','Nombre:')!!}
				{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('apellido','apellido:')!!}
				{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
			</div>
				{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	@endsection