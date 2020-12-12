<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();



 $client_id = $_POST["client_vsc"];
 
 $result = $db->query("SELECT * FROM tbl_vs_client where client_id='$client_id'");
 
 $user_data = $result->fetch_assoc();

 ?>
  <div class="form-group">
  <label class="col-sm-4 col-xs-12 control-label" for="inputFname"> First Name : <span class="required">*</span> </label>
	<div class="col-sm-6 col-xs-10">
	<input type="hidden" value="<?php echo $client_id; ?>" name="user_id">
	<input class="form-control" name="frist_name" type="text" value="<?php echo $user_data['client_first_name']; ?>" id="frist_name" >
	</div>
</div>
  
  
  <div class="form-group">
	<label for="inputLname" class="col-sm-4 col-xs-12 control-label">Last Name : <span class="required">*</span> </label>
	<div class="col-sm-6 col-xs-10">
	
	  <input class="form-control" name="last_name" type="text" value="<?php echo $user_data['client_last_name']; ?>" id="last_name" >
	</div>
  </div>
  
  <div class="form-group">
	<label for="inputCountry" class="col-sm-4 col-xs-12 control-label">Country Name : <span class="required">*</span></label>
	<div class="col-sm-6 col-xs-10">
	  <input class="form-control" name="country_name" type="text" id="country_name" value="<?php echo $user_data['country_name']; ?>">
	</div>
  </div>
  <div class="form-group">
	<label for="inputcity" class="col-sm-4 col-xs-12 control-label">City : <span class="required">*</span></label>
	<div class="col-sm-6 col-xs-10">
	  <input class="form-control" name="city" type="text" id="city" value="<?php echo $user_data['city']; ?>">
	</div>
  </div> 
  <div class="form-group">
	<label for="inputState" class="col-sm-4 col-xs-12 control-label">State : <span class="required">*</span></label>
	<div class="col-sm-6 col-xs-10">
	  <input class="form-control" name="state" type="text" id="state" value="<?php echo $user_data['state']; ?>">
	</div>
  </div> 
  <div class="form-group">
	<label for="inputUser" class="col-sm-4 col-xs-12 control-label">Address : <span class="required">*</span></label>
	<div class="col-sm-6 col-xs-10">
	  <textarea class="form-control" name="address" id="address" title="Enter Address" rows="3"><?php echo $user_data['client_address']; ?></textarea>
	</div>
  </div> 
  <div class="form-group">
	<label for="inputZipcode" class="col-sm-4 col-xs-12 control-label">Zip Code : <span class="required">*</span></label>
	<div class="col-sm-6 col-xs-10">
	  <input class="form-control" name="zip_code" type="text" id="zip_code" value="<?php echo $user_data['zip_code']; ?>">
	</div>
  </div>