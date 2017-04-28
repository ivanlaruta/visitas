@extends('template.dashboard')

@section('title','Editar Empleado')

@section('content')
@section('ventana','edicion de empleados')	
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(array('route' => ['empleados.update',$us->ci], 'method' => 'put')) !!}﻿
				
				
				<div class="form-group">
					<div class="form-group">
					{!! Form::label('id','CI')!!}
					</div>
		        			<div class="form-group">
					{!! Form::text('ci',$us->ci,['class'=> 'form-control','placeholder'=>'ci','required'])!!}
					</div>
					<div class="form-group">
						<h6>Expedido</h6>
						{!! Form::select('ex',$expe,$us->ex,['class'=>'form-control','placeholder'=>'Expedido','required'])!!}
					</div>
		      
					<div class="form-group">
					{!! Form::label('nom','Nombre')!!}
					</div>
					<div class="form-group">
					{!! Form::text('nombre',$us->nombre,['class'=> 'form-control','placeholder'=>'Ingrese Nombre','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('pat','Paterno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('paterno',$us->paterno,['class'=> 'form-control','placeholder'=>'Ingrese apellido Paterno','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('materno','Materno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('materno',$us->materno,['class'=> 'form-control','placeholder'=>'ingrese apellido Materno'])!!}
					</div>

					<div class="form-group">
					{!! Form::label('email','Correo')!!}
					</div>
					<div class="form-group">
					{!! Form::email('email',$us->email,['class'=> 'form-control','placeholder'=>'ejemplo@toyosa.com'])!!}
					</div>

					<div class="form-group">
					{!! Form::label('cargo','Cargo')!!}
					{!! Form::select('id_cargo',$cargos,$us->id_cargo,['class'=>'form-control cargos','data-width'=>"100%",'placeholder'=>'seleccione un cargo','required'])!!}
					</div>

					<div class="form-group">
					{!! Form::label('email','Ubicacion')!!}
						{!! Form::select('id_ubicacion',$ubica,$us->id_ubicacion,['class'=>'form-control','placeholder'=>'seleccione una ubicacion','required'])!!}
					</div>


					<div class="form-group">
					{!! Form::label('te','Telefono')!!}
					</div>
					<div class="form-group">
					{!! Form::text('telefono',$us->telefono,['class'=> 'form-control','placeholder'=>'77712345'])!!}
					</div>
				</div>
				
				
				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


@section('scripts')
<script>


$(document).ready(function() {
  $('.cargos').select2({
  	theme: "bootstrap"
  });

});
	
</script> 
@endsection