@extends('template.dashboard')
@section('title','visitas')
@section('content')
	
<h4><p class="text-center">Nueva Visita, {{ Auth::user()->empleado->ubicacion->nombre }} , 
	<?php
		$time = time();
		echo date("d-m-Y ", $time);
	?>
</p></h4>
<hr>

<div class="row">
  	<div class="col-md-12 col-md-offset-1">
		

		<div class="col-md-6">
			<div class="col-md-12">
				{!! Form::open (['route' => 'visitas.create','method' => 'GET','class' => 'navbar-form pull-left'])!!}
					<div class ="input-group">	
						{!! Form::text('ci', $recuperado -> ci ,['class'=> 'form-control','placeholder'=>'Ingrese CI para la busqueda','aria-describedby'=>'seacrch'])!!}
						<span class="input-group-addon" id="seach">
						<span class="glyphicon glyphicon-search" aria-hidden="true">		 
				      </span>
				      </span>
					</div>
				{!! Form::close()!!}
			</div>
			<hr>
			<div class="row">
					<table class="table table-hover">
					<thead>
						<th><h6>CI</h6></th>
						<th><h6>Nombre </h6></th>
						<th><h6>Seleccionar </h6></th>
					</thead>
					<tbody>
						@foreach($vis as $visi)
							<tr>								
								<td>{{ $visi-> ci }}</td>
								<td>{{ $visi -> nombre }} {{ $visi -> paterno }} </td>
								<td><a href="{{ route('visitas.edit', $visi -> ci )}}" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a> 
								
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{ $vis->links() }} 
		</div>

		<div class="col-md-6">
			{!! Form::open(['route'=>'visitas.store','method'=>'POST'])!!}
				<div class="col-md-6">
					<div class="form-group">
						<h6>CI</h6>
						{!! Form::text('ci',  $recuperado -> ci ,['class'=> 'form-control','placeholder'=>'Ingrese Nro de documento para registrar'])!!}
					</div>
		      
		      	</div>
		      	<div class="col-md-3">
					<div class="form-group">
						<h6>Expendido</h6>
						{!! Form::select('ex',$expe,null,['class'=>'form-control','placeholder'=>'seleccione un tipo','required'])!!}
						{{-- {!! Form::select('ex',['LP'=>'La Paz','OR'=>'Oruro','PT'=>'Potosi','CH'=>'Chuquisaca','CB'=>'Cochabamba','TJ'=>'Tarija','BN'=>'Beni','PA'=>'Pando','SC'=>'Santa Cruz'],null,['class'=>'form-control','placeholder'=>'seleccione una expedicion','required'])!!} --}}
					</div>
		      
		      	</div>
		      	<div class="col-md-3">
					<div class="form-group">
					<h6>Tipo Documento</h6>
					{!! Form::select('tipo_doc',$tipoDoc,null,['class'=>'form-control','placeholder'=>'seleccione un tipo','required'])!!}
{{-- 						{!! Form::select('tipo_doc',['CI'=>'Cedula de identidad','LIC'=>'Licencia de conducir'],null,['class'=>'form-control'])!!}
 --}}					</div>
		      	</div>
	   		
		
		<div class="col-md-6">
			
			<div class="form-group">
				<h6>Nombre:</h4>
				{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese nombre de visitante','required'])!!}
			</div>
			<div class="form-group">
				<h6>Paterno:</h4>
				{!! Form::text('paterno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido paterno','required'])!!}
			</div>
			<div class="form-group">
				<h6>Materno:</h4>
				{!! Form::text('materno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido materno'])!!}
			</div>
			<div class="form-group">
				<h6>Telefono:</h4>
				{!! Form::text('telefono',null,['class'=> 'form-control','placeholder'=>'Ingrese telefono','required'])!!}
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
					<h6>Motivo:</h4>
					{!! Form::select('id_motivo',$motivos,null,['class'=>'form-control','placeholder'=>'motivo de la visita','required'])!!}
			</div>
			<div class="form-group">
					<h6>Empleado:</h4>
					<select class="form-control" name="ci_empleado">
						<option value="">Selecione un empleado</option>
					    @foreach($empleados as $emp)
					      <option value="{{$emp->ci}}">{{$emp->paterno}} {{$emp->nombre}}</option>
					    @endforeach
				  	</select>
					{{-- {!! Form::select('ci_empleado',$empleados,null,['class'=>'form-control','placeholder'=>'Empleado visitado','required'])!!} --}}
			</div>
			<div class="form-group">
					<h6>Codigo de Tarjeta :</h4>
					{!! Form::select('id_tarjeta',$tarjetas,null,['class'=>'form-control','placeholder'=>'Tarjeta para el visitante','required'])!!}
			</div>

			<div class="form-group">
				<h6>Obervaciones:</h4>
				{!! Form::text('observaciones',null,['class'=> 'form-control','placeholder'=>'observacion'])!!}
			</div>

				<input id="ubicacion" name="ubicacion" type="hidden" value="{{ Auth::user()->empleado->ubicacion->id_ubicacion }}">
			
			
		     </div>	 
		</div>	
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				{!! Form::submit('Marcar Ingreso visita',['class'=>'btn btn-primary'])!!}
			
				<a href="{{ route('visitas.index')}}" onclick ="return confirm('Los datos no guardados se perderan al salir de esta pagina. ¿Desea continuar?')" class="btn btn-warning">Ver visitas en Curso</a> 
			</div>

	


{!! Form::close()!!}
		</div>	
	</div>	
</div>
</div>
@endsection

