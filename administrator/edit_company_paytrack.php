<?php include('include/header.php'); 

	 $paytrack_id = $_GET['paytrack_id'];
	$one_data_view = $cls_company_paytrack->edit_company_paytrack_view($paytrack_id);
 
	$dataview = $one_data_view->fetch_assoc();

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Company Pay Track</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="edit_company_paytrack" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="CompanyId"> Company Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="companyid" id="companyid" class="form-control" title="Select a Company ID">
											<option value="">-- Select Company Code --</option>
											
											<?php 
											while($data = $view_hr_company_id->fetch_assoc()){
											$comapny_code = $data['comapny_code']; 
											$company_name = $data['company_name']; 
											?>
											
											<option <?php if($comapny_code==$dataview['comapny_code']) { ?> selected <?php } ?> value="<?php echo $comapny_code; ?>"><?php if(!empty($comapny_code)) { ?><?php echo $company_name; } ?></option>									
											
											<?php
											}
											?>
											
											<input type="hidden" value="<?php echo $paytrack_id; ?>" name="paytrack_id">
											
										</select>
									</div>
								</div>
								
								<div class="form-group">
								<label class="col-sm-4 col-xs-12 control-label" for="Company_Roster_ID"> Company Roster Code : <span class="required">*</span> </label>
								<div class="col-sm-6 col-xs-10">
									<select name="company_roster_id" id="company_roster_id" class="form-control" title="Select a Company Roster ID">
									<option value="<?php echo $dataview['company_roster_code']; ?>"><?php echo $dataview['company_roster_code']; ?></option>
										<option value="">-- Select Company Roster ID--</option>
								
								</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Pay_Month"> Month paid for: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="pay_month" id="pay_month" class="form-control" title="Enter Pay Month" value="<?php echo $dataview['pay_month']; ?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Pay_Year">Year Paid for: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="pay_year" id="pay_year" class="form-control" title="Enter Pay Year" value="<?php echo $dataview['pay_year']; ?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Pay_Date"> Payment Date: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="pay_date" id="pay_date" class="form-control" title="Enter Payment Date" value="<?php echo $dataview['pay_date']; ?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Pay_Status"> Pay Status : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="pay_status" id="pay_status" class="form-control" title="Select a Pay Status">
											<option value="<?php echo $dataview['pay_status']; ?>"><?php echo $dataview['pay_status']; ?></option>
											<option value="">-- Select Pay Status --</option>
											<option value="Y">Y</option>
											<option value="N">N</option>
										</select>
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
