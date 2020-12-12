<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	require_once("../../functions/$classname.class.php");
	}
	
		$db = new cls_dbconfig();

	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$hr_companyid = "$_POST[para]";
	
	$result=$cls_virtual_safe_client->hr_company_select($hr_companyid);
?>
	
	

			<option value="">-- Select Company Roster ID --</option>
			<?php while($row = $result->fetch_assoc()){ ?>
				<option value="<?php echo $row['company_roster_code']; ?>"><?php echo $row['company_roster_code']; ?></option>		
			<?php } ?>
		