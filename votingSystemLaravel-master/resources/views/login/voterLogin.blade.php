<!DOCTYPE html>
<html lang="en">
<head>
	<title>Voter Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ URL::asset('/asset/login/voterLogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/login/voterLogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="get" action="\voterLoginComplete">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="userid" placeholder="User ID" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>

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
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							
						</span>

						<a href="#" class="txt2">
							
						</a>
					</div>

					<div class="w-full text-center">
						<a href="/voterSignUp" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('asset/login/voterLogin/images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>