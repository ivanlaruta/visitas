@extends('template.dashboard')

@section('ventana','Editar Ubicaciones')

@section('content')

    	<div class="row">
    	  			
  			<div class="col-md-6 col-md-offset-3">
				
				{!! Form::open(array('route' => ['ubicaciones.update',$ub->id_ubicacion], 'method' => 'put')) !!}﻿
				
				<div class="form-group">

					{!! Form::label('id','ID')!!}
					{!! Form::text('id_ubicacion',$ub->id_ubicacion,['class'=> 'form-control','readonly','placeholder'=>'Ingrese un Identificador','required'])!!}
					{!! Form::label('nombre','Nombre del lugar')!!}
					{!! Form::text('nombre',$ub->nombre,['class'=> 'form-control','placeholder'=>'Ingrese el nombre del lugar','required'])!!}
					
					<div class="form-group">
					{!! Form::label('ciudad','Ciudad')!!}
						{!! Form::select('ciudad',$ciudad,$ub->ciudad,['class'=>'form-control','placeholder'=>'seleccione una ciudad','required'])!!}
					</div>

					
				</div>
				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


