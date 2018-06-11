<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登录</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('admin/login/css/roboto.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('admin/login/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('admin/login/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('admin/login/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('admin/login/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('admin/login/css/login.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{ URL::asset('admin/login/js/html5shiv.js') }}"></script>
            <script src="{{ URL::asset('admin/login/js/respond.min.js') }}"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ URL::asset('admin/login/ico/favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('admin/login/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('admin/login/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('admin/login/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('admin/login/ico/apple-touch-icon-57-precomposed.png') }}">
    </head>

    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row" style="margin-bottom: 100px;">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            {{--<h1><strong>Bootstrap</strong> Login </h1>--}}
                            {{--<div class="description">--}}
                            	{{--<p>--}}
	                            	{{--This is a free responsive login form made with Bootstrap.--}}
	                            	{{--Download it on <a href="#"><strong>AZMIND</strong></a>, customize and use it as you like!--}}
                            	{{--</p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">用户名</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">密码</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">登录</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-6 col-sm-offset-3 social-login">--}}
                        	{{--<h3>...or login with:</h3>--}}
                        	{{--<div class="social-login-buttons">--}}
	                        	{{--<a class="btn btn-link-1 btn-link-1-facebook" href="#">--}}
	                        		{{--<i class="fa fa-facebook"></i> Facebook--}}
	                        	{{--</a>--}}
	                        	{{--<a class="btn btn-link-1 btn-link-1-twitter" href="#">--}}
	                        		{{--<i class="fa fa-twitter"></i> Twitter--}}
	                        	{{--</a>--}}
	                        	{{--<a class="btn btn-link-1 btn-link-1-google-plus" href="#">--}}
	                        		{{--<i class="fa fa-google-plus"></i> Google Plus--}}
	                        	{{--</a>--}}
                        	{{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        {{--<div class="copyrights">Collect from </div>--}}

        <!-- Javascript -->
        <script src="{{ URL::asset('admin/login/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ URL::asset('admin/login/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('admin/login/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ URL::asset('admin/login/js/scripts.js') }}"></script>
        
        <!--[if lt IE 10]>
            <script src="{{ URL::asset('admin/login/js/placeholder.js') }}"></script>
        <![endif]-->
    </body>

</html>