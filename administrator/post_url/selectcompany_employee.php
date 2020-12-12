<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	require_once("../../functions/$classname.class.php");
	}
	
		$db = new cls_dbconfig();

	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$company_roster_id = "$_POST[roster]";
	
	$result=$cls_virtual_safe_client->view_company_roster_id($company_roster_id);
?>
	
	

			<option value="">-- Select Company Employee ID --</option>
			<?php while($row = $result->fetch_assoc()){ ?>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['employeeid']; ?></option>		
			<?php } ?>
		