<?php include('include/header.php'); 
 $insurance_company_id = $_GET['insurance_company_id'];
 $one_data_view = $cls_insurance_company->edit_insurance_company_view($insurance_company_id);
 
 $dataview = $one_data_view->fetch_assoc();
	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Insurance Company</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="edit_insurance_company" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								
									<label class="col-sm-4 col-xs-12 control-label" for="Company">Insurance Company Name : <span class="required">*</span> </label>
								<div class="form-group">
									<div class="col-sm-6 col-xs-10">
										<input name="icname" id="icname" class="form-control" title="Enter Company Name"  value="<?php echo $dataview['company_name']; ?>" type="text">
										<input type="hidden" value="<?php echo $insurance_company_id; ?>" name="insurance_company_id">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Address">Insurance Company Address : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="address" title="Enter Address" rows="3"><?php echo $dataview['company_address']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Description">Insurance Company Description : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="description" title="Enter Description" rows="3"><?php echo $dataview['company_description']; ?></textarea>
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
