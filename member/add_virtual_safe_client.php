<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<center><h3 class="panel-title">Welcome to The Virtual Safe</h3></center>
					<h3 class="panel-title">New client signup </h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<center><table>
                                <tbody>
									<?php
										$status_payment = $cls_payment_type->select_amount_annual();
										while($view_data = $status_payment->fetch_assoc()){
									?>
									<tr>	
										<!--<td><b>Registration fee $<//?php echo $view_data['amount_fees']; ?></b></td>-->
									  </tr>
									<?php } ?>
                                </tbody>
                            </table></center>
								
							<form class="form-horizontal" id="addvs_client" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Fname">Client First Name : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="fname" id="fname" class="form-control" title="Enter Client First Name" placeholder="Enter Client First Name" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Lname">Client Last Name : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="lname" id="lname" class="form-control" title="Enter Client Last Name" placeholder="Enter Client Last Name" value="" type="text">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Emailname">Client Email: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="email_name" id="email_name" class="form-control" title="Type Client Email Address correct" placeholder="Enter Email" value="" type="email">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Address">Client Address : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="address" title="Enter Address" placeholder="Enter Address"  rows="3"></textarea>
									</div>
								</div>
								
								
								<!--<label class="col-sm-4 col-xs-12 control-label" for="Password"> Client Password: <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input name="cpassword" id="cpassword" class="form-control" title="Enter Client Password" placeholder="Enter Client Password" value="" type="password">
									</div>
								</div>-->
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
