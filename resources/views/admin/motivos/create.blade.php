@extends('template.dashboard')

@section('ventana','crear motivo')

@section('content')
	
    	<div class="row">
  			{!! Form::open(['route'=>'motivos.store','method'=>'POST'])!!}
				<div class="form-group">

					{!! Form::label('des','Descripcion del motivo ')!!}
					{!! Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Ingrese la descripcion','required'])!!}						
				</div>
				<div class="form-group">
					{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				</div>
				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection

