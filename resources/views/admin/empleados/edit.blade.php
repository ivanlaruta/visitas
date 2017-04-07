@extends('admin.template.main')

@section('title','Editar Visitante')

@section('content')
	
    	<div class="row">

  			<div class="col-md-6 col-md-offset-3">
				Editando Visitante
				{!! Form::open(array('route' => ['visitantes.update',$us->ci], 'method' => 'put')) !!}﻿
				
				<div class="form-group">
					<div class="form-group">{!! Form::label('id','CI')!!}</div>
					<div class="form-group">{!! Form::text('ci',$us->ci,['class'=> 'form-control','placeholder'=>'ci','required'])!!}</div>
					<div class="form-group">
						<h6>Expendido</h6>
						{!! Form::select('ex',['LP'=>'LP','OR'=>'OR','PT'=>'PT','CH'=>'CH','CB'=>'CB','TJ'=>'TJ','BN'=>'BN','PA'=>'PA','SC'=>'SC'],$us->ex,['class'=>'form-control','placeholder'=>'seleccione una expedicion','required'])!!}
					</div>
					<div class="form-group">{!! Form::label('nom','Nombre')!!}</div>
					<div class="form-group">{!! Form::text('nombre',$us->nombre,['class'=> 'form-control','placeholder'=>'nombre','required'])!!}</div>
					<div class="form-group">{!! Form::label('pat','Paterno')!!}</div>
					<div class="form-group">{!! Form::text('paterno',$us->paterno,['class'=> 'form-control','placeholder'=>'paterno','required'])!!}</div>
					<div class="form-group">{!! Form::label('materno','Materno')!!}</div>
					<div class="form-group">{!! Form::text('materno',$us->materno,['class'=> 'form-control','placeholder'=>'materno','required'])!!}</div>
					<div class="form-group">{!! Form::label('te','Telefono')!!}</div>
					<div class="form-group">{!! Form::text('telefono',$us->telefono,['class'=> 'form-control','telefono'=>'ci','required'])!!}</div>

				</div>

				

				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


