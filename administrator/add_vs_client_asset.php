<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Virtual Safe Client Asset</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="add_vsc_asset" method="post" enctype="multipart/form-data">
							
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
									<label class="col-sm-4 col-xs-12 control-label" for="Asset_Type"> Asset Type : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="asset_type" id="asset_type" class="form-control" title="Select a Asset Type" onchange="showDivp(this)">
											<option value="">-- Select Asset Type--</option>
											<option value="Property">Property</option>
											<option value="Stocks">Stocks</option>
										</select>
									</div>
								</div>
								<div id="property_div" style="display:none;">
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Asset_Address">Property Address detail : </label>
										<div class="col-sm-6 col-xs-10">
											 <textarea class="form-control" name="asset_address" id="asset_address" title="Enter Asset Address" placeholder="Enter Asset Address"  rows="3"></textarea>
										</div>
									</div>
								</div>
								<div id="stocks_div" style="display:none;">
									<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Company_Name">Stock, Company Name : </label>
										<div class="col-sm-6 col-xs-10">
											 <textarea class="form-control" name="company_name" id="company_name" title="Enter Company Name" placeholder="Enter Company Name"  rows="3"></textarea>
										</div>
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
