<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('plugins/images/favicon.png') }}">
    <title>Weddingo - Register</title>
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
            <div class="alert alert-info info" style="display: none;">
                <ul></ul>
            </div>
            <form id="register-form" class="form-horizontal form-material" action='' method="POST">
                <a href="javascript:void(0)" class="text-center db"><img src="{{ URL::asset('plugins/images/eliteadmin-logo-dark.png') }}" alt="Home" /><br/><img src="{{ URL::asset('plugins/images/eliteadmin-text-dark.png') }}" alt="Home" /></a>
                <h3 class="box-title m-t-40 m-b-0">הירשם עכשיו</h3>
                <div class="form-group m-t-20">
                    <div class="col-xs-12">
                        <input class="form-control" for="name" type="text" required="" id='name'  name="name" placeholder="שם">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" for="phone_number" type="tel" id="phone_number" required="" name="phone_number" placeholder="מס' טלפון">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" for="email" type="text" id="email" required="" name="email" placeholder="אימייל">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" for="password" type="password" id="password" required="" name="password" placeholder="סיסמה">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" for="confirm_pass" type="password" id="retypepass" required="" placeholder="אישור סיסמה">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary p-t-0">
                            <input id="checkbox-signup" type="checkbox" required>
                            <label for="checkbox-signup"> אני מסכים לכל <a href="#">התנאים</a></label>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="register_token" name="_token" value="{{csrf_token()}}">
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button id="confirm_button" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">הירשם</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>יש לך כבר חשבון?! מה אתה עושה פה??<a href="login" class="text-primary m-l-5"><b>תיכנס!!</b></a></p>
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
        $("#register-form").submit(function(e){
            e.preventDefault();
            var data =  {
                name: $("#name").val(),
                email: $("#email").val(),
                phone_number: $("#phone_number").val(),
                password: $("#password").val(),
                retypepass: $("#retypepass").val(),
                checkbox_signup: $("#checkbox-signup").val(),
                _token:$("#register_token").val(),
            };

            $.post('register/store', data, function(callback) {
                if(callback['success'] == false) {
                    if(callback['errors'].name != undefined) {
                        $("#name").get(0).setCustomValidity(callback['errors'].name[0]);
                    }
                    if(callback['errors'].email != undefined) {
                        $("#email").get(0).setCustomValidity(callback['errors'].email[0]);
                    }
                    if(callback['errors'].phone_number != undefined) {
                        $("#phone_number").get(0).setCustomValidity(callback['errors'].phone_number[0]);
                    }
                    if(callback['errors'].password != undefined) {
                        $("#password").get(0).setCustomValidity(callback['errors'].password[0]);
                    }
                    if(callback['errors'].retypepass != undefined) {
                        $("#retypepass").get(0).setCustomValidity(callback['errors'].retypepass[0]);
                    }
                    $("#confirm_button").click()
                }
                else {
                    window.location = "login";
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#name").change(function (event) {
            $("#name").get(0).setCustomValidity("");
        })
        $("#phone_number").change(function (event) {
            $("#phone_number").get(0).setCustomValidity("");
        })
        $("#email").change(function (event) {
            $("#email").get(0).setCustomValidity("");
        })
        $("#password").change(function (event) {
            $("#password").get(0).setCustomValidity("");
        })
        $("#retypepass").change(function (event) {
            $("#retypepass").get(0).setCustomValidity("");
        })
    });
</script>
</body>
</html>
