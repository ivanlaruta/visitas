@extends('admin.template.main')

@section('title','Editar cargo')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				
				{!! Form::open(array('route' => ['parametricas.update',$pa->id_parametrica], 'method' => 'put')) !!}﻿
				
				<div class="form-group">
						<h6>Parametrica</h6>
						{!! Form::select('nombre_tabla',['ESTADO'=>'Estado','EXPENDIDO'=>'Expendido','ROL'=>'Rol de usuario','TIPO_DOC'=>'Tipos de documento','CIUDAD'=>'Ciudad','E_VISITA'=>'Estado visita','E_PRESTAMO'=>'Estado prestamo de trajeta'],$pa->nombre_tabla,['class'=>'form-control','placeholder'=>'seleccione categoria','required'])!!}
					</div>

				<div class="form-group">

					{!! Form::label('id','ID')!!}
					{!! Form::text('id',$pa->id,['class'=> 'form-control','0placeholder'=>'ingrese un ID','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('descripcion','Descripcion')!!}
					{!! Form::text('descripcion',$pa->descripcion,['class'=> 'form-control','placeholder'=>'Descripcion','required'])!!}

				</div>

				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


