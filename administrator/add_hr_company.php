<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add HR Company</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="addhrcompany" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Name"> Company Name: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="company_name" id="company_name" class="form-control" title="Enter Company Name" placeholder="Enter Company Name" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Address">Company Address : <span class="required">*</span></label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="company_address" title="Enter Company Address" placeholder="Enter Company Address"  rows="3"></textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="No_of_Employee_Registered"> Number of Employee Registered: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="no_of_employee" id="no_of_employee" class="form-control" title="Enter Number of Employee Registered" placeholder="Enter Number of Employee Registered" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Last_Payment_date"> Last Payment date: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="last_payment_date" id="last_payment_date" class="form-control" title="Enter Last Payment date" placeholder="MM/DD/YYYY" value="" type="text">
										 
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
