<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Virtual Safe Code Master</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="add_vs_code_master" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="VS_Code_Type"> Virtual Safe Code Type: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="vs_code_type" id="vs_code_type" class="form-control" title="Select a Virtual Safe Code Type">
											<option value="">-- Select Type VS Code --</option>
											<option value="Client">Client</option>
											<option value="Company">Company</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="VS_Code_Issue_date"> VS Code Issue date: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="issue_date" id="issue_date" class="form-control" title="Enter VS Code Issue date" placeholder="yyyy-mm-dd" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="VS_Code_Status"> VS Status : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="vs_status" id="vs_status" class="form-control" title="Select a Pay Status">
											<option value="">-- Select VS Code Status --</option>
											<option value="Active">Active</option>
											<option value="InActive">InActive</option>
										</select>
									</div>
								</div>	
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="VS_Code_Description">VS Code Description: <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
									<textarea class="form-control" name="vs_description" title="Enter VS Code Description" placeholder="Enter VS Code Description"  rows="3"></textarea>
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
