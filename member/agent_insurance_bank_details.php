<?php include('include/header.php'); 

	
	$client_id = $_GET['client'];
	$tvs_bank_id = $_GET['bank_details'];
	$bank_data_id = $cls_virtual_safe_client->bank_data($tvs_bank_id,$client_id);
 
	$bank_data = $bank_data_id->fetch_assoc();
 

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
								<h3>Bank Details</h3>
								<div class="tab-content">
								
									<form class="form-horizontal" id="agent_bank_update" method="post" enctype="multipart/form-data" >
									 
									  <div class="form-group">
									  <label class="col-sm-3 control-label" for="bank_name"> Bank Name : <span class="required">*</span> </label>
										<div class="col-sm-9 col-xs-10">
										<input type="text" name="bank_name" id="bank_name" class="form-control" value="<?php echo $bank_data['bank_code']; ?>" title="Enter a Bank Name">
											<input type="hidden" value="<?php echo $client_id; ?>" name="client">
											<input type="hidden" value="<?php echo $tvs_bank_id; ?>" name="bank_id">
											</div>
										</div>
									  
									 <div class="form-group">
									 <label class="col-sm-3 control-label" for="Bank_Account_Type"> Bank Account Type : <span class="required">*</span> </label>
										<div class="col-sm-9 col-xs-10"><select name="acount_type" id="acount_type" class="form-control" title="Select a Bank Account Type">
										<option value="<?php echo $bank_data['bank_account_type']; ?>"><?php echo $bank_data['bank_account_type']; ?></option>
										<option value="Checking">Checking</option>
										<option value="Saving">Saving</option>
										<option value="Certificate of Deposit">Certificate of Deposit</option>
										<option value="Money Market">Money Market</option>
										<option value="Other">Other</option>
										</select>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label" for="Remark">Remark Or Address : </label>
									<div class="col-sm-9 col-xs-10">
										 <textarea class="form-control Remark" name="remark" id="" title="Enter Remark" rows="3"><?php echo $bank_data['remark']; ?></textarea>
									 </div>
								 </div>
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-default defaults">Save</button>
										  <a onclick="goBack()" class="btn btn-default defaults">Back</a>
										 <!-- <a bank_delet="<//?php echo $tvs_bank_id; ?>" class="btn btn-default defaults bank_delete">Delete</a>-->
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