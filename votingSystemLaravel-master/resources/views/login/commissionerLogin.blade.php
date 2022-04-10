<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Commissioner</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link href="{{ URL::asset('/asset/home/assets/img/favicon.png')}}" rel="icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/commissionerLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/commissionerLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/commissionerLogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/commissionerLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/commissionerLogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/commissionerLogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/commissionerLogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ URL::asset('/asset/login/commissionerLogin/images/img-01.png')}}" alt="IMG">
				</div>

				<form class="login100-form validate-form"  method="get" action="\commissionerLoginComplete">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="#">
							
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/commissionerSignUp">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ URL::asset('/asset/login/commissionerLogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('/asset/login/commissionerLogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ URL::asset('/asset/login/commissionerLogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('/asset/login/commissionerLogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('/asset/login/commissionerLogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('/asset/login/commissionerLogin/js/main.js')}}"></script>

</body>
</html>