<?php include('include/header.php'); 

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Virtual Safe Client Bank</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="addvsbank" method="post" enctype="multipart/form-data">
							
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
									<label class="col-sm-4 col-xs-12 control-label" for="Bank_Code">  Bank Code: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="bank_code" id="bank_code" class="form-control" title="Select a Bank Code">
											<option value="">-- Select Client ID--</option>
											<?php
										while($view_data = $view_bank_master->fetch_assoc()){
											
											?>
											<option value="<?php echo $view_data['bank_id']; ?>"> <?php echo $view_data['bank_name']; ?>, Bank Code:<?php echo $view_data['bank_id']; ?></option>
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
