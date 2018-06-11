<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="{{ URL::asset('admin/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('admin/css/loader-style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/css/signin.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('admin/ico/minus.png') }}">
</head>

<body>
<div id="preloader">
    <div id="status"></div>
</div>

<div class="container">
    <div class="" id="login-wrapper">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div id="logo-login">
                    <h1>后台管理系统
                        <span>v1.0</span>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-box">
                    <form role="form" action="index">
                        <div class="form-group">
                            <!--a href="#" class="pull-right label-forgot">Forgot email?</a-->
                            <label for="inputUsernameEmail">用户名</label>
                            <input type="text" id="inputUsernameEmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <!--a href="#" class="pull-right label-forgot">Forgot password?</a-->
                            <label for="inputPassword">密码</label>
                            <input type="password" id="inputPassword" class="form-control">
                        </div>
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox">记住用户名</label>
                        </div>
                        <button class="btn btn btn-primary pull-right" type="submit">
                            登 录
                        </button>
                    </form>
                    <a class="forgotLnk" href="index"></a>
                    <!--
                        <div class="or-box">
                        <center><span class="text-center login-with">Login or <b>Sign Up</b></span></center>
                        <div class="row">
                            <div class="col-md-6 row-block">
                                <a href="index" class="btn btn-facebook btn-block">
                                    <span class="entypo-facebook space-icon"></span>Facebook</a>
                            </div>
                            <div class="col-md-6 row-block">
                                <a href="index" class="btn btn-twitter btn-block">
                                    <span class="entypo-twitter space-icon"></span>Twitter</a>

                            </div>
                        </div>
                        <div style="margin-top:25px" class="row">
                            <div class="col-md-6 row-block">
                                <a href="index" class="btn btn-google btn-block"><span class="entypo-gplus space-icon"></span>Google +</a>
                            </div>
                            <div class="col-md-6 row-block">
                                <a href="index" class="btn btn-instagram btn-block"><span class="entypo-instagrem space-icon"></span>Instagram</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row-block">
                        <div class="row">
                            <div class="col-md-12 row-block">
                                <a href="index" class="btn btn-primary btn-block">Create New Account</a>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="row-block">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <div style="text-align:center;margin:0 auto;">

    </div>

</div>


<!-- MAIN EFFECT -->
<script type="text/javascript" src="{{ URL::asset('admin/js/preloader.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/load.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/main.js') }}"></script>


</body>

</html>
