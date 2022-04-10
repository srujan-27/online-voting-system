<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SignUp - Commissioner</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ URL::asset('/asset/signup/commissionerSignUp/css/style.css')}}"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="{{ URL::asset('/asset/signup/commissionerSignUp/images/form-v6.jpg')}}" alt="form">
			</div>
			<form class="form-detail" action="commissionerSignUpComplete" method="get">
				<h2>Register Form</h2>
				<div class="form-row">
					<input type="text" name="name" id="name" class="input-text" placeholder="Your Name" required>
				</div>
				<div class="form-row">
					<input type="text" name="email" id="email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
				</div>
				<div class="form-row">
					<input type="password" name="password_confirmation" id="password_confirmation" class="input-text" placeholder="Comfirm Password" required>
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
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>

               <a href="/commissionerLogin"> <p class="text-right text-primary">SignIn Commission</p></a>
			</form>
		</div>
	</div>
</body>
</html>