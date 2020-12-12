<?php include('include/header.php'); 

	$client_id = $_GET['client'];
	$insurance_id = $_GET['insurance_details'];
	$insurance_data_id = $cls_virtual_safe_client->insurance_user_data($insurance_id,$client_id);
 
	$user_data = $insurance_data_id->fetch_assoc();
 

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
								<h3>Insurance Details</h3>
								<div class="tab-content">
								
									<form class="form-horizontal" id="agent_insurance_update" method="post" enctype="multipart/form-data" >
									 
									  <div class="form-group">
									  <label class="col-sm-3 control-label" for="InsuranceCompanyCode"> Insurance Company : <span class="required">*</span> </label>
										<div class="col-sm-9 col-xs-10">
										<input type="text" name="insurancecompanycode" id="insurancecompanycode" class="form-control" title="Enter a Insurance Company Name" value="<?php echo $user_data['insurance_comapny_code']; ?>">
											
												
											</div>
										</div>
									  
									  
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Insurance Type</label>
										<div class="col-sm-9">
										<input type="hidden" value="<?php echo $client_id; ?>" name="client_id">
										<input type="hidden" value="<?php echo $insurance_id; ?>" name="insurance_id">
										  <input class="form-control" name="insurance_name" type="text" value="<?php echo $user_data['insurance_name']; ?>" id="insurance_name" >
										</div>
									  </div>
									  
									 <!-- <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Policy Number</label>
										<div class="col-sm-9">
										  <input class="form-control" name="policy_number" type="text" id="policy_number" value="<//?php echo $user_data['policy_number']; ?>">
										</div>
									  </div>-->
									 <div class="form-group">
										<label class="col-sm-3 control-label" for="Remark">Remark Or Address : </label>
										<div class="col-sm-9">
											 <textarea class="form-control Remark" name="remark" id="remark" title="Enter Remark"  rows="3"><?php echo $user_data['remark']; ?></textarea>
										 </div>
									 </div>
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-default defaults">Save</button>
										  <a onclick="goBack()" class="btn btn-default defaults">Back</a>
										  <!--<a insurance_delet="<//?php echo $insurance_id; ?>" class="btn btn-default defaults insurance_delete">Delete</a>-->
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