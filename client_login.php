<?php
include('include/header.php');
?>
<section id="featured" class="bg slid">
	<section id="contents">
<div class="container-fluid login-div conts">
<section id="contss">
<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<div class="login-divdd">
		
		<div style=" margin-left:40px;margin-right:40px;">
		
		
		<div class="log-in-app-container">
		<!-- react-empty: 14 -->
		
		<div class="logInForm"><br>
		<div class="logInForm__headerText"></div>
		<h1 class="text-center m-lg-top hidden-xs">Virtual Safe Client Login</h1>
		<form role="form" class="register-form" id="client_login">
		<div class="text-box">
		<input id="username" class="text-box__input" type="email" placeholder="User Email" name="email" value=""><label id="text-box__label" class="text-box__label" for="username" title="Username">User Email</label>
		<div class="text-box__addon"><div class="tooltip-container"><!--<i class="tooltip__icon icon-info-stroke"></i>--></div></div>
		<div class="text-box__hr-container"><hr><hr></div>
		<!-- react-empty: 27 --></div><div class="text-box"><input id="pas" class="text-box__input" placeholder="Password" name="password" value="" type="password"><label class="text-box__label" id="ppp" title="Password">Password</label><div class="text-box__hr-container"><hr><hr></div><!-- react-empty: 34 --></div>
		<span class="logInForm__forgetPassword"><a href="clientforgotpassword"><!-- react-text: 37 --> <!-- /react-text --><!-- react-text: 38 -->Forgot password?<!-- /react-text --><!-- react-text: 39 -->  <!-- /react-text --></a></span>
		<div class="logInForm__captcha"><!-- react-empty: 41 --></div>
		<button type="submit" class="button logInForm__login-button-container button--fluid button--action" id="login_button">Sign in</button>
		<div class="logInForm__signUp">New to The Virtual Safe? <a href="basic_register">Sign up!</a></div></form>
		</div>
		</div>
		
	</div>
	
	</div>
	</div>
	
</div>	

</section>

</div>
	</section>
	</section>
<?php
include('include/footer.php');
?>