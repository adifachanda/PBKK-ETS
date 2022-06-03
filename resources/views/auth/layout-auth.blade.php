<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HotelTrip</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/css/fontastic.css">

    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="/img/favicon.ico"> -->
    <link rel="shortcut icon" href="<?php echo url('/img/hoteltrip.png'); ?>">

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>

    <div class="page login-page">

        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">

                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo text-center">
                                    <img class="img-fluid" style="width: calc(100% - 40%); height: 50%"
                                        src="/img/hoteltrip.png">
                                    <h1 style="margin-top: 10px;">  Hotel Trip </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <form id="login-form" method="post" action="{{ route('auth.login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="login-email" type="text" name="loginEmail" required=""
                                            class="input-material">
                                        <label for="login-email" class="label-material">Email</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="login-password" type="password" name="loginPassword" required=""
                                            class="input-material">
                                        <label for="login-password" class="label-material">Password</label>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" id="login" class="btn btn-primary" value="Login">
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" id="Signup" class="btn btn-primary" value="Sign Up">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyrights text-center">
            <p>HotelTrip &copy; <?php echo date('Y'); ?></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </div>
    </div>



    <!-- JavaScript files-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/vendor/jquery-validation/jquery.validate.min.js"></script>

    <!-- Main File-->
    <script src="/js/front.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
</body>

</html>