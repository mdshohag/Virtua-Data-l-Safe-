<?php include('include/header.php'); 

	//$uui = $_SESSION['customer_id'];
	
	//$pay_data_id = $cls_virtual_safe_client->paye_date($uui);

	//$pay_data = $pay_data_id->fetch_assoc();
 

?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							
							<p class="panel-subtitle">
													
							</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<h3 style="padding-left:30px;"> </h3>
								<div class="tab-contents" style="padding-left:30px;padding-top:3px;">
								<h3>Thank you or your payment. A message containing your receipt along with instructions on how to activate your account has been sent to your email. </h3>
								<!--<h3>Thank you for your payment. A message containing your receipt along with instructions on how to activate your account has been sent to your email.</h3>-->
								<!--<p>

								<li>Your Virtual Safe code is <//?php echo $pay_data['vs_code']; ?></li>
								<li>Provide this code to the beneficiary of your choice to be used to conduct a free search. </li>
								<li>Print this page for your records.</li>
								<li>Virtual Safe code is valid from <//?php echo $pay_data['valid_from']; ?> to <//?php echo $pay_data['valid_to']; ?></li>
									</p>-->
								<!--Your information is safely stored in The Virtual Safe.  Your virtual safe code is: <//?php echo $pay_data['vs_code']; ?> u Provide this code to the beneficiary of your choice to be used to conduct a free search. Print this page for your records. <br>
								Issue valid virtual safe code and From <//?php echo $pay_data['valid_from']; ?> and Valid <//?php echo $pay_data['valid_to']; ?>
								</p>-->
								<br>
								<br>
								<br>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('include/footer.php'); ?>