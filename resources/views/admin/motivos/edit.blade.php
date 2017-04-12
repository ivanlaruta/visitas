@extends('template.dashboard')

@section('ventana','Editar motivos')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				  			<p class="text-center">Edicion de motivos.</p>
  			<hr>
				{!! Form::open(array('route' => ['motivos.update',$mo->id_motivo], 'method' => 'put')) !!}﻿
				
				<div class="form-group">

					{!! Form::label('nombre','Descripcion')!!}
					{!! Form::text('descripcion',$mo->descripcion,['class'=> 'form-control','placeholder'=>'Ingrese descripcion','required'])!!}
					

					
				</div>
				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


