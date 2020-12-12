<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Employee Roster</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="add_employee_roster" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Code"> Company ID : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_code" id="company_code" class="form-control" title="Select a Company ID">
											<option value="">-- Select Company Code --</option>
												<?php
													while($view_data = $view_tbl_hr_company->fetch_assoc()){
												?>
												<option value="<?php echo $view_data['comapny_code']; ?>"><?php echo $view_data['company_name']; ?></option>
												<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Roster_Code"> Company Roster Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_roster_code" id="company_roster_code" class="form-control" title="Select a Company Roster Code">
											<option value="">-- Select Roster Code --</option>
											<?php
													while($view_hr_roster = $view_tbl_hr_company_roster->fetch_assoc()){
												?>
												<option value="<?php echo $view_hr_roster['company_roster_code']; ?>"><?php echo $view_hr_roster['company_roster_code']; ?></option>
												<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="EmployeeID"> Employee ID: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="employeeid" id="employeeid" class="form-control" title="Enter Employee ID" placeholder="Enter Employee ID" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Employee_Name"> Employee Name: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="employee_name" id="employee_name" class="form-control" title="Enter Employee Name" placeholder="Enter Employee Name" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Employee_Designation"> Employee Designation: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="employee_designation" id="employee_designation" class="form-control" title="Enter Employee Designation" placeholder="Enter Employee Designation" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Employee_Date_of_Birth"> Employee Date of Birth: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="birth_date" id="birth_date" class="form-control" title="Enter Employee Date of Birth" placeholder="yyyy-mm-dd" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Employee_SSN"> Employee SSN: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="employee_ssn" id="employee_ssn" class="form-control" title="Enter Employee SSN" placeholder="Enter Employee SSN" value="" type="text">
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
