@extends('template.dashboard')

@section('title','Editar cargo')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  			<p class="text-center">Edicion de Cargos.</p>
  			<hr>				
				{!! Form::open(array('route' => ['cargos.update',$ca->id_cargo], 'method' => 'put')) !!}﻿
				
				<div class="form-group">

					{!! Form::label('descripcion','Descripcion')!!}
					{!! Form::text('descripcion',$ca->descripcion,['class'=> 'form-control','placeholder'=>'Descripcion','required'])!!}
					
				</div>
				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


