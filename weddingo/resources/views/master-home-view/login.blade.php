<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('plugins/images/favicon.png') }}">
    <title>Weddingo - Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="" method="POST">
                <a href="javascript:void(0)" class="text-center db"><img src="{{ URL::asset('plugins/images/eliteadmin-logo-dark.png') }}" alt="Home" /><br/><img src="{{ URL::asset('plugins/images/eliteadmin-text-dark.png') }}" alt="Home" /></a>

                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input id="email" class="form-control" name="email" type="text" required="" placeholder="אימייל">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="password" class="form-control" name="password" type="password" required="" placeholder="סיסמה">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> שכחת סיסמה?</a>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="register_token" name="_token" value="{{csrf_token()}}">
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button id="confirm_button" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">התחבר</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social">
                            <a href="redirect/facebook" class="btn  btn-facebook" data-toggle="tooltip"  title="התחבר באמצעות פייסבוק"> <i aria-hidden="true" class="fa fa-facebook"></i></a>
                            <a href="redirect/google" class="btn btn-googleplus" data-toggle="tooltip"  title="התחבר באמצעות גוגל"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>לא יצרת עדיין משתמש?!?!?<a href="register" class="text-primary m-l-5"><b>הירשם!</b></a></p>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="http://eliteadmin.themedesigner.in/demos/eliteadmin-rtl/index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>אפס סיסמה</h3>
                        <p class="text-muted">הכנס את האימייל שלך וסיסמה חדשה תשלח אלייך </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="אימייל">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">אפס סיסמה</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

<!--slimscroll JavaScript -->
<script src="{{ URL::asset('js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ URL::asset('js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/custom.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{ URL::asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>


<!-- ajax -->
<script>
    $(document).ready(function(){
        $("#loginform").submit(function(e){
            e.preventDefault();
            var data =  {
                email: $("#email").val(),
                password: $("#password").val(),
                _token:$("#register_token").val(),
            };

            $.post('login/login', data, function(callback) {
                if(callback['success'] == false) {
                        $("#email").get(0).setCustomValidity(callback['errors']);
                    $("#confirm_button").click()
                }
                else {
                    window.location = "pricing";
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#email").change(function (event) {
            $("#email").get(0).setCustomValidity("");
        })
        $("#password").change(function (event) {
            $("#email").get(0).setCustomValidity("");
        })
    });
</script>
</body>
</html>
