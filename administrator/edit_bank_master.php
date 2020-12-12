<?php include('include/header.php'); 

 $master_bank_id = $_GET['bank_id'];
 $master_bank_data_view = $cls_bank_master->edit_bank_master_view($master_bank_id);
 $bankdataview = $master_bank_data_view->fetch_assoc();

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Bank Master</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="edit_bank_master" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Bank_Name">  Bank Name: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="bank_name" id="bank_name" class="form-control" title="Enter Bank Name" value="<?php echo $bankdataview['bank_name']; ?>" type="text">
										<input type="hidden" value="<?php echo $master_bank_id; ?>" name="master_bank_id">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Bank_Address">  Bank Address: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<textarea class="form-control" name="bank_address" title="Enter Bank Address"rows="3"><?php echo $bankdataview['bank_address']; ?></textarea>
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
