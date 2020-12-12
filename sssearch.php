<?php include('include/header.php');



?>
	<section id="content">
		
		<div class="container">
		<div class="row">
			 <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form id="contact" action="javascript:void(0)" method="post" onsubmit="submit_form()">
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<span class="err captcha-err_f"></span>
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<span class="err captcha-err_l"></span>
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" >
					</div>
				</div>
			</div>
			<div class="row" >
				<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2" >
				<span class="err captcha-err"></span>
				<div class="row">
				
				<div class="col-xs-12 col-sm-5 col-md-5">
					<div class="form-group">
                        <input placeholder="Captcha" type="text" tabindex="2" id="captcha_code">
					
					</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7">
					<div class="form-group" >
						 <img src="captcha.php?rand=<?php echo rand(); ?>" id="captchaimg" height="50" width="350"><br>
						   Can't read the above code? <a class="ccc" href="javascript:void(0);" onClick="refresh_captcha();">Refresh</a>
					</div>
					</div>
				</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2"> <button class="btn btn-success btn-lg" name="submit" type="submit" id="contact-submit">Search</button></div>
				
			</div>
			</form>
			</div>
		</div>
		</div>
		
		<!-- divider -->
		<!--  <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
			
	</section>
	
<?php
include('include/footer.php');

?>
