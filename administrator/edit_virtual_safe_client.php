<?php include('include/header.php'); 
 $client_id = $_GET['client_id'];
 $one_data_view = $cls_virtual_safe_client->edit_vs_code_view($client_id);
 
 $dataview = $one_data_view->fetch_assoc();
	

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
							<form class="form-horizontal" id="upvs_client" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Fname">Client First Name : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="fname" id="fname" class="form-control" title="Enter Client First Name" value="<?php echo $dataview['client_first_name']; ?>" type="text">
											
											<input type="hidden" value="<?php echo $client_id; ?>" name="vs_client_id">
											
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Lname">Client Last Name : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="lname" id="lname" class="form-control" title="Enter Client Last Name" value="<?php echo $dataview['client_last_name']; ?>" type="text">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Emailname">Client Email: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="email_name" id="email_name" class="form-control" title="Type Client Email Address correct" value="<?php echo $dataview['client_email']; ?>" type="email">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Address">Client Address : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="address" title="Enter Address" rows="3"><?php echo $dataview['client_address']; ?></textarea>
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
