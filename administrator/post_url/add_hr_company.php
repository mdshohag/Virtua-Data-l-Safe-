<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_hr_company = new cls_hr_company();
	
	$company_name = htmlspecialchars(ucwords ($_REQUEST['company_name']), ENT_QUOTES, 'UTF-8');
	$company_address = htmlspecialchars(ucwords ($_REQUEST['company_address']), ENT_QUOTES, 'UTF-8');
	
	$no_of_employee = htmlspecialchars($_REQUEST['no_of_employee'], ENT_QUOTES, 'UTF-8');
	$last_payment_date = htmlspecialchars($_REQUEST['last_payment_date'], ENT_QUOTES, 'UTF-8');
	
	echo $cls_hr_company->add_hr_company($company_name,$company_address,$no_of_employee,$last_payment_date);

?>