<?php include('include/header.php');

	$agnt_id = $_SESSION['customer_id'];
	
	$agnt_data_id = $cls_insurance_agent->information_agent($agnt_id);
 
	$users_data = $agnt_data_id->fetch_assoc();
	
	$tvs_data_id = $cls_virtual_safe_client->information_tvs_client($agnt_id);
 
	$tvs_data = $tvs_data_id->fetch_assoc();

 ?>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
		<div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<!--<center><h1 class="panel-title">The Virtual Safe</h1></center>-->
								<?php
						
										if($_SESSION['customer_type']=='agent'){
																	
										?>
											
											<center><h1 class="panel-title">Welcome to the Agent Portal</h1></center>
										<a href="index.php" class="btn btn-default defaults">Back Home</a>
										<?php
										} else{
										?>
									
										
										<?php
										}
										?>
								
							
									
								</div>
						
						<div class="panel-body">
						<?php
						
						if($_SESSION['customer_type']=='agent'){
													
						?>
						<div class="row">
							<div class="col-md-12">
							<?php 
										if($users_data['status'] == 'Pending'){
										
										?>
										<p style="font-size:15.5px;">
											Welcome <?php echo $users_data['first_name']; ?> <?php echo $users_data['last_name']; ?>, Your registration process in under review. The Virtual Safe team will notify you soon. Please fill up all input data fields.
										</p><br>
							
							<div class="tab-content">
							
								
									<button class="btn btn-primary"><?php echo $users_data['status']; ?></button>
										<?php 
										} else{
										?>
										<div class="tab-content">
										<button class="btn btn-primary"><?php echo $users_data['status']; ?></button>
										
										<?php } ?>
								
									<form class="form-horizontal" id="add_information" method="post" enctype="multipart/form-data" >
									 <br>
									  <div class="form-group">
									  <label class="col-sm-3 control-label" for="inputFname"> First Name : <span class="required">*</span> </label>
										<div class="col-sm-9 col-xs-10">
										<input type="hidden" value="<?php echo $agnt_id; ?>" name="user_id">
										<input class="form-control" name="frist_name" type="text" value="<?php echo $users_data['first_name']; ?>" id="frist_name" >
										</div>
									</div>
									  
									  
									  <div class="form-group">
										<label for="inputLname" class="col-sm-3 control-label">Last Name : <span class="required">*</span> </label>
										<div class="col-sm-9">
										
										  <input class="form-control" name="last_name" type="text" value="<?php echo $users_data['last_name']; ?>" id="last_name" >
										</div>
									  </div>
									   <div class="form-group">
										<label for="inputLname" class="col-sm-3 control-label">Email : <span class="required">*</span> </label>
										<div class="col-sm-9">
										
										  <input class="form-control" value="<?php echo $users_data['agent_email']; ?>" readonly>
										</div>
									  </div>
									  <div class="form-group">
									<label class="col-sm-3 control-label" for="ss_tax_id"> Agent SS# or tax ID number : <span class="required">*</span> </label>
									<div class="col-sm-9">
										<input name="ss_tax_id" id="ss_tax_id" class="form-control" value="<?php echo $users_data['ss_tax_id']; ?>" placeholder="Enter Agent SS# or tax ID number" title="Enter Agent SS# or tax ID number">
											
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label" for="AgentCompanyCode"> Agent Company Name : <span class="required">*</span> </label>
									<div class="col-sm-9">
										<input name="companycode" id="companycode" class="form-control" value="<?php echo $users_data['agent_company_code']; ?>" placeholder="Enter a Agent Company Name" title="Enter a Agent Company Name">
											
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label" for="agents_license"> Agents License : <span class="required">*</span> </label>
									<div class="col-sm-9">
										<input name="agents_license" id="agents_license" class="form-control" value="<?php echo $users_data['agents_license']; ?>" placeholder="Enter Agents License" title="Enter Agents License">
											
										</div>
									</div>
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Address : <span class="required">*</span></label>
										<div class="col-sm-9">
										  <textarea class="form-control" name="address" id="" title="Enter Address" rows="3"><?php echo $users_data['agent_address']; ?></textarea>
										</div>
									  </div>  
									  
									 
									  <div class="form-group">
										<div class="col-sm-8 col-sm-offset-2">
										   <div class="right"><button type="submit" class="btn btn-success">Update</button></div><br>
										
										</div>
									  </div>
									 
									</form>
								</div>
							</div>
						</div>
						<?php
						} else{
						
						?>
						
						
					<?php
					}
					?>
							<div class="row">
							
							</div>
						</div>
					</div>
					
					<div class="row">
						
					</div>
				
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			
<?php include('include/footer.php'); ?>