<!DOCTYPE HTML>
<html>
<head>
<title>Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="/backstage/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/backstage/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/backstage/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="/backstage/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="/backstage/css/jquery-ui.css"> 
<!-- jQuery -->
<script src="/backstage/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="/backstage/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
		<div class="container">
			<div class="sin-w3-agile">
				<h2>Sign In</h2>
				<form method="post">
					<div class="username">
						<span class="username">Username:</span>
						<input type="text" name="name" class="name" placeholder="" required="">
						<div class="clearfix"></div>
					</div>
					<div class="password-agileits">
						<span class="username">Password:</span>
						<input type="password" name="password" class="password" placeholder="" required="">
						<div class="clearfix"></div>
                        <ul class="mws-form-list inline list-unstyled">
                            <li> 
                                <label for="remember">
                                    @if(session('info'))
                                        {{session('info')}}
                                    @endif

                                    @if(session('error'))
                                        {{session('error')}}
                                    @endif
                                    @if(session('alert'))
                                        {{session('alert')}}
                                    @endif
                                </label>
                            </li>
                        </ul>
					</div>
					<div class="rem-for-agile disabled">
						<input type="checkbox" name="remember" class="remember disabled">Remember me<br>
						<!-- <a href="#">Forgot Password</a><br> -->
					</div>
					<div class="login-w3">
						{{csrf_field()}}
						<input type="submit" class="login" value="Sign In">
					</div>
					<div class="clearfix"></div>
				</form>
				<div class="back">
					<a href="/">Back to home</a>
				</div>
				<div class="footer">
					<!-- <p>&copy; 2016-2019 AlbinWong.com All Rights Reserved </p> -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>