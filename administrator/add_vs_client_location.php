<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Location of Client’s will and testament</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="addvsclient_location" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								
								<div class="form-group">
									<label class="col-sm-5 col-xs-12 control-label" for="Client_ID"> Client ID : <span class="required">*</span> </label>
									<div class="col-sm-5 col-xs-10">
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
									<label class="col-sm-5 col-xs-12 control-label" for="Location_testament">Location of Client’s will and testament : <span class="required">*</span> </label>
									<div class="col-sm-5 col-xs-10">
										 <textarea class="form-control" name="location_testament" id="location_testament" title="Enter Location of Client’s will and testament" placeholder="Enter Location"  rows="3"></textarea>
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
