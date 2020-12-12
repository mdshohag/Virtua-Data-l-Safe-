<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Virtual Safe benefit For Company (Pay <span style="color:red"><b>Annual</b></span> Registration Fees)</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Company_Code">Select Company Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="company_code" id="company_code" class="form-control" title="Select a Company ID" required="">
									
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
									<label class="col-sm-4 col-xs-12 control-label" for="Fname">Upload CSV File : <span class="required">*</span> </label>
									<div class="form-group">
										<div class="col-sm-6 col-xs-10">
											<input name="file" id="file" value="Import CSV" title="Import CSV" type="file" required="">
										</div>
									</div>
								</div>
								
							</fieldset>
							
							  
							  <div class="form-group">
								<div class="col-sm-offset-5 col-sm-7">
								   <button type="submit" id="submit" name="Import" class="btn btn-success btn-flat button-loading" data-loading-text="Loading...">Upload</button>
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
