<?php include('include/header.php'); 

	
	$client_id = $_GET['client'];
	$insurance_asset_id = $_GET['insurance_asset'];
	$insurance_asset_id_data_id = $cls_virtual_safe_client->insurance_asset_data($insurance_asset_id,$client_id);
 
	$view_data = $insurance_asset_id_data_id->fetch_assoc();
 

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
								<h3>Assets Details</h3>
								<div class="tab-content">
								
									<form class="form-horizontal" id="agent_asset_update" method="post" enctype="multipart/form-data" >
									 
									  <div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Asset_Type"> Asset Type : <span class="required">*</span> </label>
										<div class="col-sm-6 col-xs-10">
											<select name="asset_type" id="asset_type" class="form-control" title="Select a Asset Type" required><option value="<?php echo $view_data['asset_type'] ?>"><?php echo $view_data['asset_type'] ?></option>
											<option value="Property">Property</option>
											<option value="Stocks">Stocks</option>
											<option value="Boat">Boat</option>
											<option value="Other">Other</option></select>
										</div>
										</div>
									  <div class="form-group">
										  <label class="col-sm-4 col-xs-12 control-label" for="Asset_Address">If Property Address detail : </label>
										  <div class="col-sm-6 col-xs-10"> 
										  <input type="hidden" value="<?php echo $client_id; ?>" name="client_id">
										  <input type="hidden" name="asset_id" value="<?php echo $insurance_asset_id; ?>">
											<textarea class="form-control asset_address" name="asset_address" id="" title="Enter Asset Address" rows="3"><?php echo $view_data['asset_address'] ?></textarea>
										  </div>
									  </div>
									  <div class="form-group">
									  <label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Stock, Company Name : </label>
									  <div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control company_name" name="company_name" id="" title="Enter Company Name" rows="3"><?php echo $view_data['company_name']; ?></textarea>
									  </div>
									  </div> 
									  <div class="form-group">
									  <label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Boat : </label>
									  <div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control boat_name" name="boat_name" id="" title="Enter Boat Name" rows="3"><?php echo $view_data['boat_name']; ?></textarea>
									  </div>
									  </div> 
									  <div class="form-group">
									  <label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Other : </label>
									  <div class="col-sm-6 col-xs-10"> 
										<textarea class="form-control other_name" name="other_name" id="" title="Enter Other Name" rows="3"><?php echo $view_data['other_name']; ?></textarea>
									  </div>
									  </div>
									  <div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark : </label>
										<div class="col-sm-6 col-xs-10">
											 <textarea class="form-control Remark" name="remark" id="" title="Enter Remark" rows="3"><?php echo $view_data['remark']; ?></textarea>
										 </div>
									 </div>
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-default defaults">Save</button>
										  <a onclick="goBack()" class="btn btn-default defaults">Back</a>
										 <!-- <a asset_delet="<//?php echo $insurance_asset_id; ?>" class="btn btn-default defaults asset_delete">Delete</a>-->
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