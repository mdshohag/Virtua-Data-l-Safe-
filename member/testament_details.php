<?php include('include/header.php'); 

	$client_id = $_SESSION['customer_id'];
	$testament_id = $_GET['testament_id'];
	$insurance_testament = $cls_virtual_safe_client->insurance_testament_data($testament_id,$client_id);
 
	$view_data = $insurance_testament->fetch_assoc();
 

?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<h3>Testament Details</h3>
								<div class="tab-content">
								
									<form class="form-horizontal" id="testament_update" method="post" enctype="multipart/form-data" ><br>
									<!-- <div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="typewill">Select Type Testament : <span class="required">*</span> </label>
									 <div class="col-sm-6 col-xs-10">
										 <select class="form-control" name="typewill" id="typewill" title="Select Type Testament">
											 <option value="</?php echo $view_data['typewill'] ?>"></?php echo $view_data['typewill'] ?></option>
											 <option value="Residence">Residence</option>
											 <option value="Attorney">Attorney</option>
											 <option value="Bank">Bank</option>
											 <option value="Other">Other</option>
										 </select>
										</div>
									 </div>-->
									  
									  <div class="form-group">
										  <label class="col-sm-4 col-xs-12 control-label" for="Asset_Address">Location of Client’s will and testament : </label>
										  <div class="col-sm-6 col-xs-10"> 
										  <input type="hidden" name="testament_id" value="<?php echo $testament_id; ?>">
											<textarea class="form-control location_testament" name="location_testament" id="" title="Enter Asset Address" rows="3"><?php echo $view_data['location_testament'] ?></textarea>
										  </div>
									  </div>
									  <div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark : </label>
										<div class="col-sm-6 col-xs-10">
											 <textarea class="form-control Remark" name="remark" id="" title="Enter Remark" rows="3"><?php echo $view_data['remark'] ?></textarea>
										 </div>
									 </div>
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-default defaults">Save</button>
										  <a onclick="goBack()" class="btn btn-default defaults">Back</a>
										  <a testament_delet="<?php echo $testament_id; ?>" class="btn btn-default defaults testament_delete">Delete</a>
										</div>
									  </div>
									</form>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('include/footer.php'); ?>