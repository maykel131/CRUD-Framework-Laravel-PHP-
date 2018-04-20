@extends('layouts.menuPrueva')
	@section('content')
   
   @if(Session::has('message'))
         <script type="text/javascript">
	         alertify.success("<?php echo Session::get('message') ?>"); 
		</script>
   @endif
   <?php  ?>
    <div class="row  col-sm-8">
		<h2>Lista usuario
		<a href="{!!URL::to('/prueva/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
		</h2>
    </div>
    	

	<table class="table">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Editar</th>
			<th>Borrar</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->id}}</td>
				<td>{{$user->nombre}}</td>
				<td>{{$user->apellido}}</td>
				<td>
					{!!link_to_route('prueva.edit', $title = 'Actualizar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
			    </td>
			    <td>
					{!!Form::open(['route'=>['prueva.destroy', $user->id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach

	</table>
	<div class="row">
	  <div 	class="col-sm-4"></div>
	  <div 	class="col-sm-4"> {!! $users->render() !!}</div>
	  <div 	class="col-sm-4"></div>
	</div>
	@endsection