<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Virtual Safe Client Insurance</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="addvsclient_insurance" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Client_ID"> Client ID : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="client_id" id="client_id" class="form-control" title="Select a Client ID">
											<option value="">-- Select Client ID--</option>
											<?php
											while($data_view = $view_vs_client_id->fetch_assoc()){
											
											?>
											<option value="<?php echo $data_view['client_id']; ?> "> <?php echo $data_view['client_first_name']; ?> <?php echo $data_view['client_last_name']; ?>, Client ID: <?php echo $data_view['client_id']; ?> </option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="InsuranceCompanyCode"> Insurance Company : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="insurancecompanycode" id="insurancecompanycode" class="form-control" title="Select a Insurance Company Code">
											<option value="">-- Select Insurance Company --</option>
											<?php
												while($view_data = $view_insurance_company->fetch_assoc()){
											
											?>
											<option value="<?php echo $view_data['insurance_comapny_id']; ?> "> <?php echo $view_data['company_name']; ?></option>
											<?php
											}
											?>
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
