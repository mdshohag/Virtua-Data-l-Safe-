<?php include('include/header.php'); 

	 $agent_id = $_GET['insurance_agent_id'];
	
	$one_data_view = $cls_insurance_agent->edit_insurance_agent_view($agent_id);

	$dataview = $one_data_view->fetch_assoc();

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Insurance Agent</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="edit_agent" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								
									<label class="col-sm-4 col-xs-12 control-label" for="Fname">Agent First Name : <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input name="fname" id="fname" class="form-control" title="Enter Agent First Name" value="<?php echo $dataview['first_name']; ?>" type="text">
										<input type="hidden" value="<?php echo $agent_id; ?>" name="insurance_agent_id">
									</div>
								</div>
								<label class="col-sm-4 col-xs-12 control-label" for="Lname">Agent Last Name : <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input name="lname" id="lname" class="form-control" title="Enter Agent Last Name" value="<?php echo $dataview['last_name']; ?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Address"> Address : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="address" title="Enter Address" rows="3"><?php echo $dataview['agent_address']; ?></textarea>
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="AgentCompanyCode"> Agent Company Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="companycode" id="companycode" class="form-control" title="Select a Agent Company Code">
											<option value="">-- Select Code --</option>
											
											<//?php 
										/*	while($view_data = $view_insurance_company->fetch_assoc()){
												$insurance_comapny_id = $view_data['insurance_comapny_id']; 
												$company_name = $view_data['company_name']; 
											?>
											
											<option <//?php if($insurance_comapny_id==$dataview['agent_company_code']) { ?> selected <//?php } ?> value="<//?php echo $insurance_comapny_id; ?>"><//?php if(!empty($insurance_comapny_id)) { ?><//?php echo $insurance_comapny_id; } ?></option>									
											
											<//?php
											//}
											?>*/
										</select>
									</div>
								</div>-->
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Emailname"> Email Address (As Username): <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="email_name" id="email_name" class="form-control" title="Type Agent Email Address correct. This will consider as agent login ID" value="<?php echo $dataview['agent_email']; ?>" type="email">
									</div>
								</div>
								<!--<label class="col-sm-4 col-xs-12 control-label" for="Password"> Password: <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input class="form-control" name="password_u" type="text" id="password" title="Enter Password" value="<//?php echo $dataview['password']; ?>">
										
									</div>-->
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
