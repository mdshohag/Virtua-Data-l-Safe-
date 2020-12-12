<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_hr_company_roster = new cls_hr_company_roster();
	
	$company_code = htmlspecialchars(ucwords ($_REQUEST['company_code']), ENT_QUOTES, 'UTF-8');
	$roster_date = htmlspecialchars(ucwords ($_REQUEST['roster_date']), ENT_QUOTES, 'UTF-8');
	$company_status = htmlspecialchars($_REQUEST['company_status'], ENT_QUOTES, 'UTF-8');
	$roster_description = htmlspecialchars($_REQUEST['roster_description'], ENT_QUOTES, 'UTF-8');
	
	$id = "$_POST[hr_company_roster_id]";
	
	echo $cls_hr_company_roster->edit_hr_company_roster($company_code,$roster_date,$company_status,$roster_description,$id);

?>