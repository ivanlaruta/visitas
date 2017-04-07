@extends('ope.template.main')
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
		<div class="col-md-5">
			
			
			 <div class="col-md-10">
				{!! Form::open (['route' => 'visitas.create','method' => 'GET','class' => 'navbar-form pull-left'])!!}
					<div class ="input-group">	
						{!! Form::text('ci', null ,['class'=> 'form-control','placeholder'=>'Ingrese CI para la busqueda','aria-describedby'=>'seacrch'])!!}
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
					{{-- <tbody>
						@foreach($vis as $visi)
							<tr>								
								<td>{{ $visi-> ci }}</td>
								<td>{{ $visi -> nombre }} {{ $visi -> paterno }} </td>
								<td><a href="{{ route('visitas.edit', $visi -> ci )}}" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a> 
								
								</td>
							</tr>
						@endforeach
					</tbody> --}}
				</table>
			</div>


		</div>
		<div class="col-md-7">
			{!! Form::open(['route'=>'visitas.ingreso','method'=>'POST'])!!}
				<div class="col-md-6">
					<div class="form-group">
						<h6>CI</h6>
						{!! Form::text('ci',  $dato->ci ,['class'=> 'form-control', 'readonly'])!!}
					</div>
		      
		      	</div>
		      	<div class="col-md-3">
					<div class="form-group">
						<h6>Expendido</h6>
						{!! Form::text('ex',$dato->ex,['class'=>'form-control', 'readonly'])!!}
					</div>
		      
		      	</div>
		      	<div class="col-md-3">
					<div class="form-group">
					<h6>Tipo Documento</h6>
						{!! Form::select('tipo_doc',['ci'=>'Cedula de identidad','lic'=>'Licencia de conducir'],null,['class'=>'form-control'])!!}
					</div>
		      	</div>
	   		
		
		<div class="col-md-6">
			
			<div class="form-group">
				<h6>Nombre:</h4>
				{!! Form::text('nombre', $dato->nombre,['class'=> 'form-control', 'readonly'])!!}
			</div>
			<div class="form-group">
				<h6>Paterno:</h4>
				{!! Form::text('paterno', $dato->paterno,['class'=> 'form-control', 'readonly'])!!}
			</div>
			<div class="form-group">
				<h6>Materno:</h4>
				{!! Form::text('materno', $dato->materno,['class'=> 'form-control', 'readonly'])!!}
			</div>
			<div class="form-group">
				<h6>Telefono:</h4>
				{!! Form::text('telefono', $dato->telefono,['class'=> 'form-control','placeholder'=>' 77712345 ','required'])!!}
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
					<h6>Motivo:</h4>
					{!! Form::select('id_motivo',$motivos,null,['class'=>'form-control','placeholder'=>'motivo de la visita','required'])!!}
			</div>
			<div class="form-group">
					<h6>Empleado:</h4>
					{!! Form::select('ci_empleado',$empleados,null,['class'=>'form-control','placeholder'=>'Empleado visitado','required'])!!}
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
	
@endsection

