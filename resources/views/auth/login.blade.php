@section('content')
@if (Route::has('login'))
                    @auth
                    @include('home')
                    @else
<!DOCTYPE html>
<html>
<head>
	<title> Login page</title>
	<link rel="stylesheet" type="text/css" href="/logincode/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="/logincode/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="/logincode/img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('login') }}">
                @csrf
				<img src="/logincode/img/avatar.svg">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="email" name="email" class="input @error('email') is-invalid @enderror" placeholder="email">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="password" name="password" class="input @error('password') is-invalid @enderror" placeholder="password">
                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            	   </div>
            	</div>


                <div class="mt-5">
                {!! NoCaptcha::renderJs('en', false, 'onloadCallback') !!}
				{!! NoCaptcha::display() !!}
            	</div>


                @if (Route::has('password.request'))
            	<a href="{{ route('password.request') }}">Forgot Password?</a>
                @endif
            	<input type="submit" class="btn" value="Login">
				<a href="{{ route('register') }}">Sign up</a>
            </form>
        </div>
    </div>
    <script type="/logincode/text/javascript" src="js/main.js"></script>
    <script>
        var onloadCallback = function() {
        alert("grecaptcha is ready!");
        };
    </script>
</body>
</html>


@endauth
          
          @endif