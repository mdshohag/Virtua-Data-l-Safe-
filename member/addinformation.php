<?php include('include/header.php'); 

	$agnt_id = $_SESSION['customer_id'];
	$user_id = $_GET['agent_id'];
	$tvs_data_id = $cls_insurance_agent->information_agent_data($user_id,$agnt_id);
 
	$user_data = $tvs_data_id->fetch_assoc();
 

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
								<h3>General Information</h3>
								<div class="tab-content">
								
									<form class="form-horizontal" id="add_information" method="post" enctype="multipart/form-data" >
									 
									  <div class="form-group">
									  <label class="col-sm-3 control-label" for="inputFname"> First Name : <span class="required">*</span> </label>
										<div class="col-sm-9 col-xs-10">
										<input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
										<input class="form-control" name="frist_name" type="text" value="<?php echo $user_data['first_name']; ?>" id="frist_name" >
										</div>
									</div>
									  
									  
									  <div class="form-group">
										<label for="inputLname" class="col-sm-3 control-label">Last Name : <span class="required">*</span> </label>
										<div class="col-sm-9">
										
										  <input class="form-control" name="last_name" type="text" value="<?php echo $user_data['last_name']; ?>" id="last_name" >
										</div>
									  </div>
									  
									  <div class="form-group">
									<label class="col-sm-3 control-label" for="AgentCompanyCode"> Agent Company Code : <span class="required">*</span> </label>
									<div class="col-sm-9">
										<select name="companycode" id="companycode" class="form-control" title="Select a Agent Company Code">
											<option value="">-- Select company Name --</option>
											<?php 
											while($view_data = $view_insurance_company->fetch_assoc()){
												$insurance_comapny_id = $view_data['insurance_comapny_id']; 
												$company_name = $view_data['company_name']; 
											?>
											
											<option <?php if($insurance_comapny_id==$user_data['agent_company_code']) { ?> selected <?php } ?> value="<?php echo $insurance_comapny_id; ?>">
											<?php if(!empty($insurance_comapny_id)) { ?><?php echo $company_name; } ?>
											</option>									
											
											<?php
											}
											?>
										</select>
									</div>
								</div>
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Address : <span class="required">*</span></label>
										<div class="col-sm-9">
										  <textarea class="form-control" name="address" id="" title="Enter Address" rows="3"><?php echo $user_data['agent_address']; ?></textarea>
										</div>
									  </div>  
									  
									 
									  <div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
										  <button type="submit" class="btn btn-default defaults">Save</button>
										  <a onclick="goBack()" class="btn btn-default defaults">Back</a>
										 
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