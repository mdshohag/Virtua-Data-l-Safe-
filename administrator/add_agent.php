<?php include('include/header.php'); 

	

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
							<form class="form-horizontal" id="addagent" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								
									<label class="col-sm-4 col-xs-12 control-label" for="Fname">Agent First Name : <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input name="fname" id="fname" class="form-control" title="Enter Agent First Name" placeholder="Enter Agent First Name" value="" type="text">
									</div>
								</div>
								<label class="col-sm-4 col-xs-12 control-label" for="Lname">Agent Last Name : <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input name="lname" id="lname" class="form-control" title="Enter Agent Last Name" placeholder="Enter Agent Last Name" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Address"> Address : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="address" title="Enter Address" placeholder="Enter Address"  rows="3"></textarea>
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="AgentCompanyCode"> Agent Company Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="companycode" id="companycode" class="form-control" title="Select a Agent Company Code">
											<option value="">-- Select Code --</option>
											<?php
												//while($view_data = $view_insurance_company->fetch_assoc()){
											?>
											<option value="<?php //echo $view_data['insurance_comapny_id']; ?>"><?php //echo $view_data['company_name']; ?>&nbsp;<?php //echo $view_data['insurance_comapny_id']; ?></option>
											
											
											
											<?php //} ?>
										</select>
									</div>
								</div>-->
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Emailname"> Email Address (As Username): <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="email_name" id="email_name" class="form-control" title="Type Agent Email Address correct. This will consider as agent login ID" placeholder="Enter Email" value="" type="email">
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
