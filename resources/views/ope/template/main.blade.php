<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Administracion')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	
</head>
<body>
	<div class="container">
		@if(Auth::user()->id_rol==0 || Auth::user()->id_rol==2 )
		@include('ope.template.partials.nav')
		@if(!session('mensaje')==null)
		 	<div class="alert alert-success">
			  	 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {!! session('flash_notification.message') !!}
			 	{{session('mensaje')}}
		 	</div>
		@endif﻿
		<section>
			@yield('content')
		</section>
		@else
			@include('admin.template.partials.nav')
			Si desea ver las operaciones porfavor dirijase a los reportes de administracion.
		@endif	
	</div>

	<script src="{{asset('plugins/jquery/js/jquery-3.2.0.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>