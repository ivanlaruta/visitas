<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Panel Visitas</title>
    <link href="{{ asset('plugins/sbadmin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/sbadmin/css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/sbadmin/css/plugins/morris.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/sbadmin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
        @include('template.partials.dash_login_nav')    
            
            <div class="container">
                <div class="row">
                <div class="col-lg-11">
                <section>
                @if(!session('mensaje')==null)
                         <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {!! session('flash_notification.message') !!}
                             {{session('mensaje')}}
                         </div>
                     @endif﻿
                </section>
                </div>
                </div>
                 <div class="row">
                <div class="col-lg-6">
                <section>
               {{--  style="background-color:#80c0e0;" --}}
                <section >
					
                    @yield('content')
                </section>
                </div>
                </div>
{{-- 
                @if(Auth::user()->id_rol==1  )
                     @include('admin.template.partials.nav')

                  <section>
                    @yield('content')
                     </section>
                @endif

                @if(Auth::user()->id_rol==0  )
                     @include('admin.template.partials.nav') 

                  <section>
                    @yield('content')
                     </section>
                @endif --}}
            </div>
       
    <!-- jQuery -->
    <script src="{{ asset('plugins/sbadmin/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('plugins/sbadmin/js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('plugins/sbadmin/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{ asset('plugins/sbadmin/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('plugins/sbadmin/js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>
