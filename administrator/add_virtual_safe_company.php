<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add The Virtual Safe benefit (TVS) For Company</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="addvs_company" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Code">Select Company Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_code" id="company_code" class="form-control" title="Select a Company ID">
									
											<option value="">-- Select Company Code --</option>
												<?php
													while($view_data = $view_tbl_hr_company->fetch_assoc()){
												?>
												<option value="<?php echo $view_data['comapny_code']; ?>"><?php echo $view_data['company_name']; ?></option>
												<?php } ?>
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Fname">Upload Excel File : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="excfile" id="excfile" title="Excel File Upload" type="file">
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
