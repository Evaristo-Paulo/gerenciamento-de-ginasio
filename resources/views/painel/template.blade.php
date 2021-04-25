<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vambora! - Está a doer, está a fazer efeito</title>

    <!-- Bootstrap -->
    <link href="{{ url('painel/vendors/bootstrap/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('painel/vendors/font-awesome/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('painel/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{ url('painel/build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ url('painel/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('painel/css/responsive.css') }}" rel="stylesheet">
    @stack('css')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('painel.partials.main-aside')

            <!-- top navigation -->
            @include('painel.partials.navegation')
            <!-- /top navigation -->

            <!-- page content -->
            @yield('main-content')
            <!-- /page content -->

            <!-- footer content -->
            @include('painel.partials.footer')
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('painel/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- FastClick -->
    <script src="{{ url('painel/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('painel/vendors/nprogress/nprogress.js') }}"></script>
    <!-- jQuery custom content scroller -->
    @stack('js')
    <script src="{{ url('painel/build/js/custom.min.js') }}"></script>


</body>

</html>
