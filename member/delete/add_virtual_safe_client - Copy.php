<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Virtual Safe Client</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
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
									<label class="col-sm-4 col-xs-12 control-label" for="AgentID"> Agent ID : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="agentid" id="agentid" class="form-control" title="Select a Agent ID">
											<option value="">-- Select Agent ID --</option>
											<?php
												while($view_id = $view_insurance_agent_id->fetch_assoc()){
											?>
											<option value="<?php echo $view_id['agent_id']; ?>"><?php echo $view_id['first_name']; ?> <?php echo $view_id['last_name']; ?> code <?php echo $view_id['agent_id']; ?></option>
											<?php } ?>
										</select>
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
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Client_SSN">Client Social Security Number : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="client_SSN" id="client_SSN" class="form-control" title="Enter Client Social Security Number" placeholder="Enter Client Social Security Number" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="vs_code">Virtual Safe Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="vs_code" id="vs_code" class="form-control" title="Select a Virtual Safe Code">
											<option value="">-- Select Virtual Safe Code --</option>
											<?php
												while($vs_code_view = $view_vs_clients->fetch_assoc()){
											?>
											<option value="<?php echo $vs_code_view['vs_code']; ?>"><?php echo $vs_code_view['vs_code']; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Subscription_rcbl">Subscription Fee receivable : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="subscription_rcbl" id="subscription_rcbl" class="form-control" title="Enter Subscription Fee receivable" placeholder="Enter Amount" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Subscrpition_paid">Subscription Fee Paid : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="subscrpition_paid" id="subscrpition_paid" class="form-control" title="Enter Subscription Fee Paid" placeholder="Enter Amount" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="valid_from_date">Subscription valid from : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="valid_from_date" id="valid_from_date" class="form-control" title="Enter Subscription valid from" placeholder="yyyy-mm-dd" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="valid_to_date">Subscription valid To : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="valid_to_date" id="valid_to_date" class="form-control" title="Enter Subscription valid from" placeholder="yyyy-mm-dd" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Renewal_Number">Number of renewals : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="renewal_number" id="renewal_number" class="form-control" title="Enter Number of renewals" placeholder="Enter Number of renewals" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="company_client"> Company Client : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_client" id="company_client" class="form-control" title="Select a Company Client" onchange="showDiv(this)">
											<option value="">-- Select --</option>
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
									</div>
								</div>
								<div id="hidden_div" style="display:none">
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="CompanyId"> HR Company ID : <span class="required"></span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="companyid" id="companyid" class="form-control" title="Select a Company ID">
											<option value="0">-- Select Company ID --</option>
											<?php 
											while($data = $view_hr_company_id->fetch_assoc()){
											?>
											<option value="<?php echo $data['comapny_code']; ?>"><?php echo $data['company_name']; ?> = <?php echo $data['comapny_code']; ?></option>
											<?php
											}
											?>
											
										</select>
									</div>
								</div>	
								
								<div class="form-group">
								<label class="col-sm-4 col-xs-12 control-label" for="Company_Roster_ID"> Company Roster ID : <span class="required"></span> </label>
								<div class="col-sm-6 col-xs-10">
									<select name="company_roster_id" id="company_roster_id" class="form-control" title="Select a Company Roster ID">
										<option value="0">-- Select Company Roster ID --</option>
								
								</select>
									</div>
								</div>
								
								
									<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Employee_ID"> Company Employee ID: <span class="required"></span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_employee_id"  id="roster" class="form-control" title="Select a Company Employee ID">
										
										<option value="0">-- Select Company Employee ID--</option>
										</select>
									</div>
								</div>
								</div>
								
								<label class="col-sm-4 col-xs-12 control-label" for="Password"> Client Password: <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input name="cpassword" id="cpassword" class="form-control" title="Enter Client Password" placeholder="Enter Client Password" value="" type="password">
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
