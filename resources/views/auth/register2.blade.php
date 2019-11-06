<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <!-- Bootstrap -->
    <link href="{{ asset('template/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('template/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('template/assets/styles.css') }}" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="{{ asset('template/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
  </head>
  <body id="login">
    <div class="container">

	    <form class="form-signin" method="POST" action="{{ route('register') }}">
	      	@csrf
	        <h2 class="form-signin-heading">Register</h2>

	        <!-- nama -->
	        <input id="name" type="text" class="input-block-level @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

			@error('name')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror

	        <!-- email -->
	        <input id="email" type="email" class="input-block-level @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email">

			@error('email')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror

	        <!-- password -->
	        <input id="password" type="password" class="input-block-level @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

			@error('password')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror

	        <!-- confirm password -->
	        <input id="password-confirm" type="password" class="input-block-level" name="password_confirmation" placeholder="Password" required autocomplete="new-password">

	        <button class="btn btn-large btn-primary" type="submit">Register</button>

	    </form>

    </div> <!-- /container -->

    <script src="{{ asset('template/vendors/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('template/bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>