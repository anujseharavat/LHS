<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TurboSec™ client login</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="js/core/app.js"></script>
    <script type="text/javascript" src="js/pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Advanced login -->
                <form method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <h5 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h5>
                            @if(isset($error))
                                <small style="color: red; margin-bottom: 15px;">{{$error}}</small>
                            @endif
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group login-options">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        <input id="remember_me" name="remember_me" type="checkbox" class="styled" checked="checked">
                                        Remember
                                    </label>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="reset-password">Forgot password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-circle-right2 position-right"></i></button>
                        </div>
                        <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                    </div>
                </form>
                <!-- /advanced login -->


                <!-- Footer -->
                <div class="footer text-white">&copy; 2016. <a href="https://skarpsinne.com/turbosec" target="_blank" class="text-white">TurboSec™</a> <a href="https://skarpsinne.com/" target="_blank" class="text-white">by Skarpsinne InfoTech</a></div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
