<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up For Voter</title>

    <link href="{{ URL::asset('/asset/home/assets/img/favicon.png')}}" rel="icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('/asset/signup/voterSignUp/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('/asset/signup/voterSignUp/css/style.css')}}">
</head>
<body>

    <div class="main">

        

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="GET" id="signup-form" class="signup-form" action="voterSignUpComplete">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="userid" id="userid" placeholder="Your UserId" required/>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                           
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        </div>

                        
                       
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="/voterLogin" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ URL::asset('/asset/signup/voterSignUp/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/signup/voterSignUp/js/main.js')}}"></script>
</body>
</html>