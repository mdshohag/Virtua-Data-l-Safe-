<?php include('include/header.php'); 

	$hr_company_roster_id = $_GET['hr_company_roster_id'];
 $hr_company_roster_view = $cls_hr_company_roster->edit_hr_company_roster_view($hr_company_roster_id);
 $hr_roster_dataview = $hr_company_roster_view->fetch_assoc();

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Update HR Company Roster</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="edit_hr_company_roster" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Code"> Company ID : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_code" id="company_code" class="form-control" title="Select a Company ID">
									
											<option value="<?php echo $hr_roster_dataview['company_code']; ?>"><?php echo $hr_roster_dataview['company_code']; ?></option>
											<option value="">-- Select Company Code --</option>
												<?php
													while($view_data = $view_tbl_hr_company->fetch_assoc()){
												?>
												<option value="<?php echo $view_data['comapny_code']; ?>"><?php echo $view_data['company_name']; ?></option>
												<?php } ?>
												
												
												<input type="hidden" value="<?php echo $hr_company_roster_id; ?>" name="hr_company_roster_id">
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Roster_Create_Date"> Company Roster Create Date: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="roster_date" id="roster_date" class="form-control" title="Enter Company Roster Create Date" value="<?php echo $hr_roster_dataview['company_roster_create_date']; ?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Roster_Status"> Company Roster Status : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_status" id="company_status" class="form-control" title="Select a Company ID">
											<option value="<?php echo $hr_roster_dataview['company_roster_status']; ?>"><?php echo $hr_roster_dataview['company_roster_status']; ?></option>
											<option value="">-- Select Company Roster Status --</option>
											<option value="Active">Active</option>
											<option value="Inactive">Inactive</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Roster_Description">Roster Description : <span class="required">*</span></label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="roster_description" title="Enter Roster Description" rows="3"><?php echo $hr_roster_dataview['roster_description']; ?></textarea>
									</div>
								</div>
								
							</fieldset>
							
							  
							  <div class="form-group">
								<div class="col-sm-offset-5 col-sm-7">
								  <button type="submit" class="btn btn-success">Update</button>
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
