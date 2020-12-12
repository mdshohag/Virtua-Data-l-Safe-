<?php include('include/header.php'); 

	
	$email_id = $_GET['email_data'];
	$user_id = $_GET['user_data'];
	$tvs_data_id = $cls_virtual_safe_client->agent_information_user_data($email_id,$user_id);
 
	$user_data = $tvs_data_id->fetch_assoc();
	$country = $cls_virtual_safe_client->view_country();

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
								
									<form class="form-horizontal" id="agent_information_update" method="post" enctype="multipart/form-data" >
									 
									  <div class="form-group">
									  <label class="col-sm-3 control-label" for="inputFname"> First Name : <span class="required">*</span> </label>
										<div class="col-sm-9 col-xs-10">
										<input type="hidden" value="<?php echo $email_id; ?>" name="email_id">
										<input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
										<input class="form-control" name="frist_name" type="text" value="<?php echo $user_data['client_first_name']; ?>" id="frist_name" >
										</div>
									</div>
									  
									  
									  <div class="form-group">
										<label for="inputLname" class="col-sm-3 control-label">Last Name : <span class="required">*</span> </label>
										<div class="col-sm-9">
										
										  <input class="form-control" name="last_name" type="text" value="<?php echo $user_data['client_last_name']; ?>" id="last_name" >
										</div>
									  </div>
									  
									  <div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Country Name : <span class="required">*</span></label>
										<div class="col-sm-9">
										<!--<select class="form-control" name="country_name">
											  <option value="" >Select Country</option>
											 
											   </?php 
												while($row = $country->fetch_assoc()){
													//$counId = $row['id']; 
													$country_name = $row['name'];
													?>
													
										   <option </?php if($country_name==$user_data['country_name']) { ?> selected </?php } ?> value="</?php echo $country_name; ?>"></?php if(!empty($country_name)) { ?></?php echo $country_name; } ?></option>									
												
												</?php
												}
												?>
											</select>-->
										  <input class="form-control" name="country_name" type="text" id="country_name" value="<?php echo $user_data['country_name']; ?>">
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputcity" class="col-sm-3 control-label"> City : <span class="required">*</span></label>
										<div class="col-sm-9">
											<!--<select class="form-control" id="xyz" name="city">
												<option value="" >Select </option>
												<option value="</?php echo $user_data['city']; ?>" selected ></?php echo $user_data['city']; ?> </option>
								
											</select>-->
										<input class="form-control" name="city" type="text" id="city" value="<?php echo $user_data['city']; ?>">
										</div>
									  </div> 
									  <div class="form-group">
										<label for="inputState" class="col-sm-3 control-label">State : <span class="required">*</span></label>
										<div class="col-sm-9">
										  <input class="form-control" name="state" type="text" id="state" value="<?php echo $user_data['state']; ?>">
										</div>
									  </div> 
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Address : <span class="required">*</span></label>
										<div class="col-sm-9">
										  <textarea class="form-control" name="address" id="" title="Enter Address" rows="3"><?php echo $user_data['client_address']; ?></textarea>
										</div>
									  </div> 
									  <div class="form-group">
										<label for="inputZipcode" class="col-sm-3 control-label">Zip Code : <span class="required">*</span></label>
										<div class="col-sm-9">
										  <input class="form-control" name="zip_code" type="text" id="zip_code" value="<?php echo $user_data['zip_code']; ?>">
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