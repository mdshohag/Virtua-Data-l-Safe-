<?php include('include/header.php'); 

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Information</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
						<ul class="nav nav-tabs" style="background-color:#FCFCFC;">
				<li><a data-toggle="tab" href="#home" style="color:#B6D440;"><b>Insurance</b></a></li>
				<li><a data-toggle="tab" href="#menu1" style="color:#B6D440;"><b>Asset</b></a></li>
				<li><a data-toggle="tab" href="#menu2" style="color:#B6D440;"><b>Bank</b></a></li>
				<li><a data-toggle="tab" href="#menu3" style="color:#B6D440;"><b>Location</b></a></li>
				</ul>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active" style="padding:17px;">
								<form name="add_name" id="add_insurance">  
									<legend>Information</legend>
									
								<fieldset id="dynamic_field">
							
								
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="InsuranceCompanyCode"> Insurance Company : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="insurancecompanycode[]" id="insurancecompanycode" class="form-control" title="Select a Insurance Company Code">
											<option value="">-- Select Insurance Company --</option>
											<?php while($view_data = $view_insurance_company->fetch_assoc()){ ?> <option value="<?php echo $view_data['insurance_comapny_id']; ?> "> <?php echo $view_data['company_name']; ?></option> <?php } ?>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="InsuranceName">  Insurance Name: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="insurance_name" id="insurance_name" class="form-control" title="Enter Insurance Name" placeholder="Insurance Name" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Policy_Number">  Policy Number: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="policy_number" id="policy_number" class="form-control" title="Policy Number" placeholder="Policy Number" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									
									<div class="col-sm-offset-8 col-sm-4"><br>
										  <button type="button" name="add" id="add" class="btn btn-default">Add More</button>
										  
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
							<div id="menu1" class="tab-pane fade" style="padding:17px;">
								
								
								<form class="form-horizontal" id="add_vsc_asset" method="post" enctype="multipart/form-data">
							
						
								<legend>Asset Information</legend>
								<fieldset id="dynamic_form">
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Asset_Type"> Asset Type : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="asset_type" id="asset_type" class="form-control asset_type" title="Select a Asset Type" onchange="showDivp(this)">
											<option value="">-- Select Asset Type--</option>
											<option value="Property">Property</option>
											<option value="Stocks">Stocks</option>
										</select>
									</div>
								</div>
								<div class="property_div" style="display:none;">
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Asset_Address">Property Address detail : </label>
										<div class="col-sm-6 col-xs-10">
											 <textarea class="form-control asset_address" name="asset_address" id="" title="Enter Asset Address" placeholder="Enter Asset Address"  rows="3"></textarea>
										</div>
									</div>
								</div>
								<div class="stocks_div" style="display:none;">
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Company_Name">Stock, Company Name : </label>
										<div class="col-sm-6 col-xs-10">
											 <textarea class="form-control company_name" name="company_name" id="" title="Enter Company Name" placeholder="Enter Company Name"  rows="3"></textarea>
										</div>
									</div>
								</div>
							<div class="form-group">
										
										<div class="col-sm-offset-8 col-sm-4"><br>
											  <button type="button" name="add_row" id="add_row" class="btn btn-default">Add More</button>
											  
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
						<div id="menu2" class="tab-pane fade" style="padding:17px;">
							<form class="form-horizontal" id="addvsbank" method="post" enctype="multipart/form-data">
								<legend>Bank Information</legend>
								<fieldset id="dynamic_div">
									
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Bank_Code">  Bank Code: <span class="required">*</span> </label>
										<div class="col-sm-6 col-xs-10">
											<select name="bank_code" id="bank_code" class="form-control" title="Select a Bank Code">
												<option value="">-- Select Client ID--</option>
												<?php
											while($view_data = $view_bank_master->fetch_assoc()){
												
												?>
												<option value="<?php echo $view_data['bank_id']; ?>"> <?php echo $view_data['bank_name']; ?></option>
												<?php
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Bank_Account">  Bank Account: <span class="required">*</span> </label>
										<div class="col-sm-6 col-xs-10">
											<input name="bank_account" id="bank_account" class="form-control" title="Bank Account" placeholder="Bank Account" value="" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Bank_Account_Type"> Bank Account Type : <span class="required">*</span> </label>
										<div class="col-sm-6 col-xs-10">
											<select name="acount_type" id="acount_type" class="form-control" title="Select a Bank Account Type">
												<option value="">-- Select Bank Account Type --</option>
												<option value="Checking">Checking</option>
												<option value="Saving">Saving</option>
											</select>
										</div>
									</div>
								<div class="form-group">
										
										<div class="col-sm-offset-8 col-sm-4"><br>
											  <button type="button" name="add_form" id="add_form" class="btn btn-default">Add More</button>
											  
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
							<div id="menu3" class="tab-pane fade" style="padding:17px;">
								<form class="form-horizontal" id="addvsclient_location" method="post" enctype="multipart/form-data">
							
							
								<legend>Location of Client’s will and testament</legend>
								<fieldset id="dynamic_fld">
								
								
								<div class="form-group">
									<label class="col-sm-5 col-xs-12 control-label" for="Location_testament">Location of Client’s will and testament : <span class="required">*</span> </label>
									<div class="col-sm-5 col-xs-10">
										 <textarea class="form-control" name="location_testament" id="location_testament" title="Enter Location of Client’s will and testament" placeholder="Enter Location"  rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
										
										<div class="col-sm-offset-8 col-sm-4"><br>
											  <button type="button" name="add_data" id="add_data" class="btn btn-default">Add More</button>
											  
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
				</div>
			</div>
			<!-- END OVERVIEW -->
		</div>
	</div>
<?php include('include/footer.php'); ?>
