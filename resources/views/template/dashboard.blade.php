
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/sbadmin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('plugins/sbadmin/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('plugins/sbadmin/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('plugins/sbadmin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('template.partials.dash_nav')

        <div id="page-wrapper">
            <div class="container">
                

                @if(!session('mensaje')==null)
                         <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {!! session('flash_notification.message') !!}
                             {{session('mensaje')}}
                         </div>
                     @endif﻿


                @if(Auth::user()->id_rol==1  )
                    {{-- @include('admin.template.partials.nav') --}}

                  <section>
                    @yield('content')
                     </section>
                @endif

                @if(Auth::user()->id_rol==0  )
                    {{-- @include('admin.template.partials.nav') --}}

                  <section>
                    @yield('content')
                     </section>
                @endif
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
