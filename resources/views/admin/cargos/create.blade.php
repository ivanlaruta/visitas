@extends('template.dashboard')

@section('title','crear Cargo')

@section('content')
@section('ventana','Creacion de cargo')
    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route'=>'cargos.store','method'=>'POST'])!!}				
				<div class="form-group">
					{!! Form::label('descripcion','Descripcion')!!}
					{!! Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Descripcion','required'])!!}
				</div>
				<div class="form-group">
					{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				</div>
				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection

