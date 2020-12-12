<?php include('include/header.php'); 

	$hr_company_id = $_GET['hr_company_id'];
 $hr_company_data_view = $cls_hr_company->edit_hr_company_view($hr_company_id);
 $hr_company_dataview = $hr_company_data_view->fetch_assoc();

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
							<form class="form-horizontal" id="edithrcompany" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Name"> Company Name: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="company_name" id="company_name" class="form-control" title="Enter Company Name" value="<?php echo $hr_company_dataview['company_name']; ?>" type="text">
										<input type="hidden" value="<?php echo $hr_company_id; ?>" name="hr_company_id">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Address">Company Address : <span class="required">*</span></label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="company_address" title="Enter Company Address" rows="3"><?php echo $hr_company_dataview['company_address']; ?></textarea>
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="VS_Code_Company"> Virtual Safe Code Company : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="vs_code_company" id="vs_code_company" class="form-control" title="Select a Virtual Safe Code Company">
											
											<option value="">-- Select Virtual Safe Code Company--</option>
											
											<?php 
											//while($vs_code_view = $view_company->fetch_assoc()){
											//$vs_code = $vs_code_view['vs_code']; 
											?>
											
											<option <?php// if($vs_code==$hr_company_dataview['vs_code_company']) { ?> selected <?php// } ?> value="<?php// echo $vs_code; ?>"><?php //if(!empty($vs_code)) { ?><?php// echo $vs_code; } ?></option>									
											
											<?php
											//}
											?>
										</select>
									</div>
								</div>-->
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="No_of_Employee_Registered"> Number of Employee Registered: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="no_of_employee" id="no_of_employee" class="form-control" title="Enter Number of Employee Registered" value="<?php echo $hr_company_dataview['no_of_employee_registered']; ?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Last_Payment_date"> Last Payment date: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="last_payment_date" id="last_payment_date" class="form-control" title="Enter Last Payment date" value="<?php echo $hr_company_dataview['last_payment_date']; ?>" type="text">
										 
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
