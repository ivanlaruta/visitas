<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Administracion')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	
</head>
<body>
	<div class="container">

		@include('admin.template.partials.nav')
		
		@if(!session('mensaje')==null)
		 	<div class="alert alert-success">
			  	 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {!! session('flash_notification.message') !!}
			 	{{session('mensaje')}}
		 	</div>
		@endif﻿


		<section>
			@yield('content')
		</section>
		
	</div>

	<script src="{{asset('plugins/jquery/js/jquery-3.2.0.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>