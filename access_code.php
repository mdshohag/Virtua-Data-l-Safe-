<?php 
include('include/header.php');

	$acodee = $_GET['access_code']; 
	$amount_dolors =  $cls_virtual_safe_client->access_code_invalid();
	$amountss = $amount_dolors->fetch_assoc();
	$annualss = $amountss['amount_fees'];
	//$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
	//$paypalID = 'shohagcse2-facilitator@gmail.com'; //Business Email
	
// ai khane judi payment na hoi tobe delete

//$acodee = $_GET['acodee']; 
  $vscd = $cls_virtual_safe_client->get_vscode($acodee);
  $data = $vscd->fetch_assoc();
  $vs = $data['vs_code'];
  
  
  $view_payment = $cls_payment_type->view_payment_search();
  
  $data_view = $view_payment->fetch_assoc();
	
?>
<section id="featured" class="bg slid">	
	<section id="content">
		
		<div class="container">
		<div class="row" style="padding-bottom:95px">
			 <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6" style="padding-right:7px">
					<div class="position" style="padding-left:10px">
					<center><h2 style="color:#56a02c;">BENEFICIARIES</h2></center>
						<!--<h4>Enter Code or Pay</h4>-->
							<p><b>Enter in the field below the Unique Access code provided to you by The Virtual Safe Member. </b></p><br>
							  <form id="vscaccess"  method="post">
								<div class="row">
								<div class="col-xs-12 col-sm-1 col-md-1">
								</div>
								<div class="col-xs-12 col-sm-8 col-md-8">
									<div class="form-group">
									
										<input type="text" name="vsc" id="vsc" class="form-control" placeholder="Enter virtual safe code">
										
										<input type="hidden" name="cod" id="cod" value="<?php echo $acodee; ?>">
									   
										
									</div>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2">
									<div class="form-group">
									<button type="submit" class="button logInForm__login-button-container button--fluid button--action" id="login_button">Submit</button>
									</div>
								</div>
								
							<!--<div class="row">
								<div class="col-xs-12 col-md-8 col-md-offset-2"> <button class="btn btn-success btn-lg" name="submit" type="submit">Search</button></div>
								
							</div>-->
							</div>
						</form>
						
						<p><b>If the beneficiary does not have the unique access code, please enter name in the Authorized Representative section to gain access  to The Virtual Safe. </b></p>
						<p><b>You will be charged a non refundable fee of 19.95 to retrieve members information</b></p>
						
					</div>
					</div>
				
					
					<div class="col-xs-12 col-sm-6 col-md-6 code" style="padding-left:30px">
						<center><h2 style="color:#56a02c;">AUTHORIZED REPRESENTATIVE</h2></center>
						<p><strong>A non-refundable fee of $19.95 will be charged to access the member’s Virtual Safe. Only authorized representatives will be granted access to The Virtual Safe. Please enter your name and credit card information below.</strong></p><br>
							 <form action="confirm_page.php" method="post" enctype="multipart/form-data">
								<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
									
									<input type="text" class="form-control" name="firstnames" placeholder="Authorized Represent.. First Name" required />
										
										
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
									
											<input type="text" class="form-control" name="lastnames" placeholder="Authorized Represent.. Last Name" required />
																				
									</div>
								</div>
								<div class="payment">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<!--<h3 class="panel-title display-td"> BILLING INFORMATION  </h3>-->
						<div class="display-td" >                            
						<center><img class="img-responsive" src="http://i76.imgup.net/accepted_c22e0.png"> </center>
						</div>
					</div> 
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">Card Holder First Name</span></label>
							<input type="text" class="form-control" name="finame" placeholder="First Name" autocomplete="first_name" required />
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<label for="cardCVC">Card Holder Last name</label>
								<input type="text" class="form-control" name="lname" placeholder="Last Name" autocomplete="last_name" required />
							</div>
						</div>
						<div class="col-xs-12">
						<div class="form-group">
							<label for="cardNumber">CARD NUMBER</label>
						<div class="input-group">
							<input type="hidden" id="x_amount" name="x_amount" value="<?php echo $data_view['amount_fees']; ?>">
							
							<input type="hidden" name="clint_id" id="clint_id" value="<?php echo $acodee; ?>">
						  <input type="hidden" name="vsc_id" id="vsc_id" value="<?php echo $vs; ?>">
							<input type="text" class="form-control" name="cardNumbers" placeholder="Valid Card Number" autocomplete="cc-number" required />
							<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
						</div>
						</div>                            
						</div>
						
						<div class="col-xs-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
							<input type="text" class="form-control" name="cardExpiry" placeholder="yyyy-mm" autocomplete="cc-exp" required />
						</div>
						</div>
						<div class="col-xs-6 pull-right">
							<div class="form-group">
								<label for="cardCVC">CV CODE</label>
								<input type="tel" class="form-control" name="cardCVC" placeholder="CVV" autocomplete="cc-csc" required />
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="cardNumber">Billing Address</label>
							<div class="input-group">
								
								<textarea class="form-control" name="address" rows="3" required> </textarea>
								<span class="input-group-addon"><i class="fa fa-crsedit-card"></i></span>
							</div>
						</div>                            
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">City</span></label>
							<input type="text" class="form-control" name="city" placeholder="city" autocomplete="city" required />
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<label for="cardCVC">State</label>
								<input type="text" class="form-control" name="state" placeholder="state" autocomplete="state" required />
							</div>
						</div>
					
						<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">Zip Code</span></label>
							<input type="text" class="form-control" name="zip" placeholder="zip" autocomplete="zip" required />
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<label for="cardCVC">Country</label>
								<input type="text" class="form-control" name="country" placeholder="country" autocomplete="country" required />
							</div>
						</div>
					
						<div class="col-xs-12 col-sm-6 col-md-6">
							<button  class="button logInForm__login-button-container button--fluid button--action" id="login_button" name="submit" type="submit">Submit </button>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								
								<input class="form-control" value="$<?php echo $data_view['amount_fees']; ?>"  readonly >
							</div>
							
						</div>
						
						</div>
						
					</form>	
				
							</div>
						
					
						
					</div>
				</div>
				
			</div>
		</div>
		</div>
		
	</section>
	</section>
	
<?php
include('include/footer.php');

?>
