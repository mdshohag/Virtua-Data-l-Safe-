<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_hr_company_roster = new cls_hr_company_roster();
	
	$company_code = htmlspecialchars(ucwords ($_REQUEST['company_code']), ENT_QUOTES, 'UTF-8');
	$roster_date = date("Y-m-d");
	$company_status = htmlspecialchars($_REQUEST['company_status'], ENT_QUOTES, 'UTF-8');
	$roster_description = htmlspecialchars($_REQUEST['roster_description'], ENT_QUOTES, 'UTF-8');
	
	echo $cls_hr_company_roster->add_hr_company_rostery($company_code,$roster_date,$company_status,$roster_description);

?>