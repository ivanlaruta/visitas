<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Administracion')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
	@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>
	
	<script src="{{asset('plugins/jquery/js/jquery-3.2.0.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>