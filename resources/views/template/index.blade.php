<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Administracion')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
	<div class="container">
		@if (Auth::guest())
			@include('template.partials.nav')
                @else               
                        @if(Auth::user()->id_rol==1 )
                         	@include('admin.template.partials.nav')
                         	Bienvenido  {{ Auth::user()->empleado->nombre }}
                         	Usted se encuentra en: {{ Auth::user()->empleado->ubicacion->nombre }}
                        @endif
                        @if(Auth::user()->id_rol==0 )
                        	
                        	 @include('ope.template.partials.nav')
                        	Bienvenido  {{ Auth::user()->empleado->nombre }}
                         	Usted se encuentra en: {{ Auth::user()->empleado->ubicacion->nombre }}
                        @endif		
		@endif
	</div>


	<script src="{{asset('plugins/jquery/js/jquery-3.2.0.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>