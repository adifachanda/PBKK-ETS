<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HotelTrip</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    @push('styles')
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('bootstrap-4-material-admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('bootstrap-4-material-admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('bootstrap-4-material-admin/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('bootstrap-4-material-admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('bootstrap-4-material-admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('bootstrap-4-material-admin/img/favicon.ico')}}">
  </head>
  <body>

    @yield('sidebar')

    @yield ('content')


    <!-- JavaScript files-->
    <script src="{{asset('bootstrap-4-material-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap-4-material-admin/vendor/popper.js/umd/popper.min.js')}}""> </script>
    <script src="{{asset('bootstrap-4-material-admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap-4-material-admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('bootstrap-4-material-admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('bootstrap-4-material-admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('bootstrap-4-material-admin/js/front.js')}}"></script>
    
  </body>
</html>