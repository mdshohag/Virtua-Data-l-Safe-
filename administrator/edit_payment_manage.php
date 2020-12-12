<?php include('include/header.php'); 

 $amount_id = $_GET['pay_id'];
 $payment = $cls_payment_type->edit_payment_view($amount_id);
 $payment_row = $payment->fetch_assoc();

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Manage Payment Amount</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="edit_payment" method="post" enctype="multipart/form-data">
							
							<fieldset>
							
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Bank_Name">  Type Payment <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input class="form-control" title="Type Payment" value="<?php echo $payment_row['type_payment']; ?>" type="text" readonly>
										<input type="hidden" value="<?php echo $amount_id; ?>" name="amount_id">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="annualfees">  Amount: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input type="text" class="form-control" name="annualfees" title="Enter annual fees" value="<?php echo $payment_row['amount_fees']; ?>">
									</div>
								</div>
								
							</fieldset>
							
							  
							  <div class="form-group">
								<div class="col-sm-offset-5 col-sm-7">
								  <button type="submit" class="btn btn-success">Save</button>
								</div>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
		</div>
	</div>
<?php include('include/footer.php'); ?>
