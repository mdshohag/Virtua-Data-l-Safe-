<?php 
include('include/header.php');

   //$fname = $_GET['firstname']; 
  // $lname = $_GET['lastname'];
	$accessid = htmlspecialchars($_GET['accessid'], ENT_QUOTES, 'UTF-8');
	$vscid = htmlspecialchars($_GET['vscid'], ENT_QUOTES, 'UTF-8');
	
?>
<section id="featured" class="bg slid">	
	<section id="content">
		
		<div class="container">
		<div class="row" style="padding-bottom:180px">
			 <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1"><br><br>
			<center> <h1>Congratulations! </h1></center>
			<center> <p> You have been granted access to The Virtual Safe. </p></center>
			
			<!--<center> <h3>Your access code: <?php// echo $vscid; ?> </h3></center>-->
			<!-- old id vscaccess -->
			<form id="vsc_pay_login"  method="post">
				<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
					
                        <input type="hidden" name="vsc" id="vsc" class="form-control input-lg" value="<?php echo $vscid; ?>">
						
                        <input type="hidden" name="cod" id="cod" value="<?php echo $accessid; ?>">
                       
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
					<button type="submit" class="button logInForm__login-button-container button--fluid button--action" id="login_button"> Click to Access</button>
					</div>
				</div>
				
			<!--<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2"> <button class="btn btn-success btn-lg" name="submit" type="submit">Search</button></div>
				
			</div>-->
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
	<section id="featured" class="bg slid">	
<?php
include('include/footer.php');

?>
