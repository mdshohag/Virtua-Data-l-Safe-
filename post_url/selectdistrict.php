<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();

	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$country = "$_POST[para]";
	
	$result=$cls_virtual_safe_client->district_select($country);
?>
<option value="" selected>Select City</option>

	<?php while($row = $result->fetch_assoc()){ ?>
		<option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>		
	<?php } ?>
	