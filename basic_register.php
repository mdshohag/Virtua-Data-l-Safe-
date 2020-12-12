<?php
include('include/header.php');
$country = $cls_virtual_safe_client->view_country();
?>
<!-- end header -->
	<section id="featured" class="bg slid">
	<!-- start slider -->

			
	<!-- start slider -->
	<div class="container-fluid bdgckx" style="margin-bottom:-28px;">
		<div class="row">
			<div class="col-lg-12">
	
			</div>
			
		</div>
	</div>	



	</section>
<section id="main-contain">
		
	
<div class="container-fluid login-divs" style="background-color:;">

<div class="row">
   <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
		<div>
		<form id="basic_customer">
		<h1 class="text-center a-lg-top hidden-xs"> Virtual Safe Client Sign Up</h1>
			<hr class="colorgraph">
				<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name">
					</div>
				<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" >
					</div>
				<!--<div class="form-group">
					<select class="form-control" name="country_name">
					  <option value="" >Select Country</option>
					 
					   </*?php 
						while($row = $country->fetch_assoc()){
							
							$country_name = $row['name'];
							?*/>
							
				   <option value="<//?php echo $country_name; ?>"></?php echo $country_name;  ?></option>									
						
						</?php
						}
						?>
					</select>
				</div>
			<div class="form-group">
					<select class="form-control" id="xyz" name="city">
					<option value="" >Select City</option>
		
					</select>
			</div>-->
			<!--<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
			</div>-->
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address As User Id" >
			</div>
			<div class="form-group">
				<input type="hidden" name="password" id="password" class="form-control input-lg" value="testpass" placeholder="Password" >
			</div>
				
					<div class="form-group">
						<input type="hidden" name="password_confirmation" id="password_confirmation" value="testpass" class="form-control input-lg" placeholder="Confirm Password" >
					</div>
					<div class="form-group">
						<input type="submit" value="Register" class="button logInForm__login-button-container button--fluid button--action" id="login_button" >
					</div>
					<div class="form-group">
						<div class="logInForm__signUp"><b>Already have an account? <a href="client_login">Sign In</a></b></div>
					</div>
				
			
			
		</form>
	
	</div>
	</div>
</div>

 </div> 
	</section>

<?php
include('include/footer.php');
?>