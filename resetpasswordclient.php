<?php

include('include/header.php');

if(empty($_GET['id_code']))
{
	echo "<script>location.href='index.php';</script>";
}

$idcode = $_GET['id_code'];

if(isset($_GET['id_code']))
{
	 $id = $_GET['id_code'];
	
	
	// $ok = $db->query("update tbl_insurance_agent set active='1' where mail_verify ='$idcode'");
	// return $ok;
}
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
		
	
<div class="container-fluid register-div" style="background-color:;">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	<div style=" margin-left:40px;margin-right:40px;">
		<form role="form" class="up-form" id="clientresetpassword"><br><br>
		
		<h1 class="vv-lg-top hidden-xs">Please Create New Password to Continue with The Virtual Safe Login</h1>
		
			<hr class="colorgraph">

			<!--<div class="form-group">
				<input type="email" name="email" id="email_log" class="form-control input-lg" placeholder="hidden">
			</div>-->
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="New Password">
				<input type="hidden" value="<?php echo $idcode; ?>" name="userdataid">
			</div>
			<div class="form-group">
				<input type="password" name="password_con" id="password_con" class="form-control input-lg" placeholder="Confirm Password">
			</div>
			<div class="form-group">
				<input type="submit" value="Save" class="button logInForm__login-button-container button--fluid button--action" id="login_button">
			</div>

			<!-- upadte then login account -->
			<!--<hr class="colorgraph">-->
			<br>
			<br>
			<br>
			<br>
		</form>
		
	</div>
		
	</div>
</div>

</div>
	</section>
<?php
include('include/footer.php');
?>