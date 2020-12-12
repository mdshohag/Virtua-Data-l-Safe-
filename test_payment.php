<?php 
include('include/header.php');

  $acodee = $_GET['acodee']; 
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
			 <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="tab-content">
			
				<!--<form class="form-horizontal" id="test_pay" method="post" enctype="multipart/form-data" >
				 <br>
				  <div class="form-group">
					<label class="col-sm-4 col-xs-12 control-label" for="Remark">Access Fees : </label>
					<div class="col-sm-6 col-xs-10">
						 <input class="form-control" name="amt" id="amt" placeholder="Enter amount $19.95" >
						  <input type="hidden" name="access_id" id="access_id" value="<?php //echo $acodee; ?>">
						  <input type="hidden" name="vsc_id" id="vsc_id" value="<?php// echo $vs; ?>">
					 </div>
				 </div>
				  <div class="form-group">
					<div class="col-sm-2 col-sm-offset-5">
					  <button type="submit"  class="button logInForm__login-button-container button--fluid button--action">Pay</button>
					 
					</div>
				  </div>
				</form>-->
				<div class="payment">
					<div class="row display-tr" >
						<h3 class="panel-title display-td" >Payment Details  <span style="padding-left:360px;">$<?php echo $data_view['amount_fees']; ?>
							</span></h3>
						<div class="display-td" >                            
							<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
						</div>
					</div> 
				<form action="confirm_page.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-xs-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">First Name</span></label>
							<input type="text" class="form-control" name="finame" placeholder="First Name" autocomplete="first_name" required />
						</div>
						</div>
						<div class="col-xs-6 pull-right">
							<div class="form-group">
								<label for="cardCVC">Last name</label>
								<input type="text" class="form-control" name="lname" placeholder="Last Name" autocomplete="last_name" required />
							</div>
						</div>
					
						<div class="col-xs-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">City</span></label>
							<input type="text" class="form-control" name="city" placeholder="city" autocomplete="city" required />
						</div>
						</div>
						<div class="col-xs-6 pull-right">
							<div class="form-group">
								<label for="cardCVC">State</label>
								<input type="text" class="form-control" name="state" placeholder="state" autocomplete="state" required />
							</div>
						</div>
					
						<div class="col-xs-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">Zip Code</span></label>
							<input type="text" class="form-control" name="zip" placeholder="zip" autocomplete="zip" required />
						</div>
						</div>
						<div class="col-xs-6 pull-right">
							<div class="form-group">
								<label for="cardCVC">Country</label>
								<input type="text" class="form-control" name="country" placeholder="country" autocomplete="country" required />
							</div>
						</div>
					
						<div class="col-xs-12">
						<div class="form-group">
							<label for="cardNumber">Address</label>
							<div class="input-group">
								
								<textarea class="form-control" name="address" rows="3" required> </textarea>
								<span class="input-group-addon"><i class="fa fa-crsedit-card"></i></span>
							</div>
						</div>                            
						</div>
					
						<div class="col-xs-12">
						<div class="form-group">
							<label for="cardNumber">CARD NUMBER</label>
						<div class="input-group">
							<input type="hidden" id="x_amount" name="x_amount" value="<?php echo $data_view['amount_fees']; ?>">
							
							<input type="hidden" name="clint_id" id="clint_id" value="<?php echo $acodee; ?>">
						  <input type="hidden" name="vsc_id" id="vsc_id" value="<?php echo $vs; ?>">
							<input type="text" class="form-control" name="cardNumbers" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
							<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
						</div>
						</div>                            
						</div>
						
						<div class="col-xs-6">
						<div class="form-group">
						<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
							<input type="text" class="form-control" name="cardExpiry" placeholder="yyyy-mm" autocomplete="cc-exp" required autofocus />
						</div>
						</div>
						<div class="col-xs-6 pull-right">
							<div class="form-group">
								<label for="cardCVC">CV CODE</label>
								<input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />
							</div>
						</div>
						
						<div class="col-xs-12">
							<button class="btn btn-success btn-lg btn-block" name="submit" type="submit">Pay</button>
						</div>
						</div>
						
					</form>	
				</div>
				
			</div>
		</div>
		</div>
		
	</section>
	</section>
	
<?php
include('include/footer.php');

?>
