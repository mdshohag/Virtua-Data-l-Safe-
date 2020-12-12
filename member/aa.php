<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Client</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="addclient" method="post" enctype="multipart/form-data">
							<fieldset>
								<legend>Membership Package Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="package"> Membership Package : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="package" id="package_id" class="form-control" title="Select a Package from the List">
											<option value="">-- Select Package --</option>
											
										</select>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Member Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="fname"> First Name : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="fname" id="fname" class="form-control" title="First Name" placeholder="First Name" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="lname"> Last Name : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="lname" id="lname" class="form-control" title="Last Name" placeholder="Last Name" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="cname"> Company Name : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="cname" id="cname" class="form-control" title="Company Name" placeholder="Company Name" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="clogo"> Upload Company Logo  : <span class="required">*</span></label>
									<div class="col-sm-6 col-xs-10">
										<input name="clogo" id="clogo" title="Upload Company Logo" type="file" onchange="return filesValidation()">
										  <div id="restlogo"></div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Login Information </legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="username"> Email Address (As Username): <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="username" id="username" class="form-control" title="Type your Email Address correct. This will consider as your login ID" placeholder="Enter Username" value="" type="email">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Password"> Password : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="password" id="password" class="form-control" title="Enter Password" placeholder="Enter Password" value="" type="password">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Cpassword"> Confirm Password : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="cpassword" id="cpassword" class="form-control" title="Confirm Password" placeholder="Confirm Password" value="" type="password">
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Contact Information</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Address"> Address : <span class="required"> *</span> </label>
									<div class="col-sm-6 col-xs-10">
										 <textarea class="form-control" name="address" title="Enter Address" placeholder="Enter Address"  rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Mobile"> Mobile : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="mobile" id="mobile" class="form-control" title="Enter Mobile" placeholder="Enter Mobile" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Pcode"> Postal Code : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<input name="pcode" id="pcode" class="form-control" title="Enter Postal Code" placeholder="Enter Postal Code" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Country"> Country  : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="country" id="country" class="form-control" title="Select Your Country Name">
											<option value=""> Select Country </option>
											<?php 
												while($row = $country->fetch_assoc()){
													$counId = $row['id']; 
													$country_name = $row['country_name'];
													?>
													
												<option value="<?php echo $counId; ?>"><?php echo $country_name;?></option>									
												
												<?php
												}
												?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="State"> State  : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="state" id="state" class="form-control" title="Select State">
											<option value=""> Select a State </option>
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Area"> Area / City / County  : <span class="required">*</span> </label>
									<div class="col-sm-6 col-xs-10">
										<select name="area" id="area" class="form-control" title="Select Area">
											<option value="">Select An Area </option>
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Telephone "> Telephone  :  </label>
									<div class="col-sm-6 col-xs-10">
										<input name="telephone" id="telephone" class="form-control" title="Enter Postal Code" placeholder="Enter Telephone" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="Fax"> Fax : </label>
									<div class="col-sm-6 col-xs-10">
										<input name="fax" id="fax" class="form-control" title="Enter Fax" placeholder="Enter Fax" value="" type="text">
									</div>
								</div>
								
							</fieldset>
							<fieldset>
								<legend>Profile Photo(s)</legend>
								<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="profilepic">Upload Thumbnail picture : <span class="required">*</span></label>
									<div class="col-sm-6 col-xs-10">
										<input name="profilepic" id="profilepic" title="Upload your Thumbnail picture" type="file" onchange="return fileuploadValidation()">
										  <div id="profile-logo"></div>
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
