<?php 
include('include/header.php'); 
	$cuid = $_SESSION['customer_id'];
	$tvs_data = $cls_virtual_safe_client->select_client_data_email($cuid);

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
				<center><h3 class="panel-title">Welcome to The Virtual Safe</h3></center>
					<h3 class="panel-title">Add client Details </h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="addvs_client_details" method="post" enctype="multipart/form-data">
							<fieldset>
								<legend> Client General Information </legend>
								<div class="form-group" >
									<label class="col-sm-4 col-xs-12 control-label" for="client_email"> Select Client Email : <span class="required">*</span> </label>
								<div class="col-sm-6 col-xs-10">
									<select name="client_id" id="client_id" class="form-control" title="Select Client Email" >
									<option value="">-- Select Client Email --</option>
									<?php
									while($show_data = $tvs_data->fetch_assoc()){
									?>
									<option value="<?php echo $show_data['client_id']; ?>"> <?php echo $show_data['client_email']; ?></option>
									
									<?php } ?>
									</select>
								</div>
								</div>	
								<div id="result">
								
								</div>
							</fieldset>
							<fieldset>
								<legend>Insurance </legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Insurance_company">Insurance Company : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="insurance_company" id="insurance_company" class="form-control" title="Enter Insurance Company" placeholder="Enter Insurance Company" value="" type="text">
											
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Insurance_name">Insurance Type : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="insurance_name" id="insurance_name" class="form-control" title="Enter Insurance Name" placeholder="Enter Insurance Type" value="" type="text">
										</div>
									</div>
								</div>
								
								<!--<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="policy_number">Policy Number : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="policy_number" id="policy_number" class="form-control" title="Type Policy Number" placeholder="Enter Policy Number" value="" type="text">
									</div>
								</div>-->
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark Or Address : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="remark" title="Enter Remark Or Address" placeholder="Enter Remark Or Address"  rows="3"></textarea>
									</div>
								</div>
								
							</fieldset>
							<fieldset>
								<legend>Assets </legend>
								<div class="form-group" >
									<label class="col-sm-4 col-xs-12 control-label" for="Asset_Type"> Asset Type : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="asset_type" id="asset_type" class="form-control" title="Select a Asset Type" onchange="showDivp(this)" >
											<option value="">-- Select Asset Type--</option>
											<option value="Property">Property</option>
											<option value="Stocks">Stocks</option>
											<option value="Boat">Boat</option>
											<option value="Other">Other</option>
										</select>
										</div>
									</div>
									<div class="property_div" style="display:none">
										<div class="form-group">
											<label class="col-sm-4 col-xs-12 control-label" for="Asset_Address">If Property Address detail : </label>
											<div class="col-sm-6 col-xs-10"> 
											<textarea class="form-control asset_address" name="asset_address" id="" title="Enter Asset Address" placeholder="Enter Asset Address"  rows="3"></textarea>
										</div>
									</div>
									</div>
									<div class="stocks_div" style="display:none">
									<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Stock, Company Name : </label>
										<div class="col-sm-6 col-xs-10"> 
											<textarea class="form-control company_name" name="company_name" id="" title="Enter Company Name" placeholder="Enter Company Name"  rows="3"></textarea>
										</div>
									</div>
									</div>
									<div class="boat_div" style="display:none">
										<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Boat: </label>
										<div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control boat_name" name="boat_name" id="" title="Enter boat name" placeholder="Enter Boat Name"  rows="3"></textarea>
										</div>
										</div>
										</div>
										<div class="other_div" style="display:none">
										<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Other: </label>
										<div class="col-sm-6 col-xs-10"> <textarea class="form-control other_name" name="other_name" id="" title="Enter Other Name" placeholder="Enter Other Name"  rows="3"></textarea>
										</div>
									</div>
									</div>
								<!--<div class="form-group" >
									<label class="col-sm-4 col-xs-12 control-label" for="Asset_Type"> Asset Type : <span class="required">*</span> </label>
								<div class="col-sm-6 col-xs-10">
									<select name="asset_type" id="asset_type" class="form-control" title="Select a Asset Type" onchange="showDivp(this)" >
									<option value="">-- Select Asset Type--</option>
									<option value="Property">Property</option>
									<option value="Stocks">Stocks</option>
									</select>
								</div>
								</div>
								<div class="property_div" style="display:none">
									<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Asset_Address">If Property Address detail : </label>
										<div class="col-sm-6 col-xs-10"> 
											<textarea class="form-control asset_address" name="asset_address" id="" title="Enter Asset Address" placeholder="Enter Asset Address"  rows="3"></textarea>
										</div>
									</div>
								</div>
								<div class="stocks_div" style="display:none">
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Stock, Company Name : </label>
									<div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control company_name" name="company_name" id="" title="Enter Company Name" placeholder="Enter Company Name" rows="3"></textarea>
									</div>
									</div>
								</div>-->
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark : </label>
									<div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control Remarks" name="remarks" id="remarks" title="Enter Remark" placeholder="Enter Remark"  rows="3"></textarea>
									</div>
								</div>
								
							</fieldset>
							<fieldset>
								<legend>Bank </legend>
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Bank_Code">  Bank Name: <span class="required">*</span> </label>
										<div class="col-sm-6 col-xs-10"> 
											<input type="text" name="bank_code" id="bank_code" class="form-control" title="Enter a Bank name" placeholder="Enter a Bank name" >
										</div>
									</div>
									<!--<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Bank_Account">  Bank Account: <span class="required">*</span> </label>
										<div class="col-sm-6 col-xs-10">
											<input name="bank_account" id="bank_account" class="form-control" title="Bank Account" placeholder="Bank Account" value="" type="text" >
										</div>
									</div>-->
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Bank_Account_Type"> Bank Account Type : <span class="required">*</span> </label>
											<div class="col-sm-6 col-xs-10">
												<select name="acount_type" id="acount_type" class="form-control" title="Select a Bank Account Type" >
													<option value="">-- Select Bank Account Type --</option>
													
													<option value="Checking">Checking</option>
													<option value="Saving">Saving</option>
													<option value="Certificate of Deposit">Certificate of Deposit</option>
													<option value="Money Market">Money Market</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark Or Bank Address : </label>
										<div class="col-sm-6 col-xs-10"> 
											<textarea class="form-control Remark" name="remarkss" id="remarkss" title="Enter Remark" placeholder="Enter Remark Or Bank Address"  rows="3"></textarea>
										</div>
									</div>								
							</fieldset>
							<fieldset>
								<legend> Estate Plan </legend>
								 <div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="typewill">Select Type Testament : <span class="required">*</span> </label>
									 <div class="col-sm-6 col-xs-10">
										 <select class="form-control" name="typewill" id="typewill" title="Select Type Testament">
											 <option value="">Select Type Testament</option>
											 <option value="Residence">Residence</option>
											 <option value="Attorney">Attorney</option>
											 <option value="Bank">Bank</option>
											 <option value="Other">Other</option>
										 </select>
										</div>
									 </div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Location_testament">Location of Client’s will and testament : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<textarea class="form-control" name="location_testament" id="location_testament" title="Enter Location of Clients will and testament" placeholder="Enter Location"  rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark : </label>
									<div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control Remark" name="remarksss" id="remarksss" title="Enter Remark" placeholder="Enter Remark"  rows="3"></textarea>
									</div>
								</div>						
							</fieldset>
							<fieldset>
								<legend> Authorized Representative </legend>
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Authorized">Authorized Representatives First Name : <span class="required">*</span> </label>
									
									<div class="col-sm-6 col-xs-10">
										<input class="form-control" name="authorized_fname" id="authorized_fname" title="Enter Authorized Representatives First Name">
									</div>
								</div>
								 <div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Authorized">Authorized Representatives Last Name : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input class="form-control" name="authorized_lname" id="authorized_lname" title="Enter Authorized Representatives Last Name">
									</div>
								 </div>
								 <div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Relation">Relation : <span class="required"></span> </label>
									 <div class="col-sm-6 col-xs-10">
										<input class="form-control" name="relation" id="relation" title="Enter Relation"  >
									</div>
								 </div>
								 <div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark : </label>
									<div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control Remark" name="remark" id="" title="Enter Remark"  rows="3"></textarea>
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
