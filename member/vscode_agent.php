<?php include('include/header.php'); 

	$uui = $_SESSION['customer_id'];
	
	$pay_data_id = $cls_virtual_safe_client->paye_date($uui);

	$pay_data = $pay_data_id->fetch_assoc();
 

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
								<h3 style="padding-left:30px;">Congratulations! </h3>
								<div class="tab-contents" style="padding-left:30px;padding-top:3px;">
								<p>
								<li>Your Virtual Safe code is <?php echo $pay_data['vs_code']; ?></li>
								<li>Provide this code to the beneficiary of your choice to be used to conduct a free search. </li>
								<li>Print this page for your records.</li>
								<?php 
								if($pay_data['status'] == 'Lifetime'){
								?>
								
								<?php
								} else {
								?>
								<li>Virtual Safe code is valid from <?php echo $pay_data['valid_from']; ?> to <?php echo $pay_data['valid_to']; ?></li>
								<?php } ?>
								
									</p><br>
								<h3>Click the "Home Page" to enter The Virtual Safe.</h3>
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