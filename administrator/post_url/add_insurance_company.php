<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_insurance_company = new cls_insurance_company();
	
	$icname = htmlspecialchars($_REQUEST['icname'], ENT_QUOTES, 'UTF-8');
	$address = htmlspecialchars($_REQUEST['address'], ENT_QUOTES, 'UTF-8');
	$description = htmlspecialchars($_REQUEST['description'], ENT_QUOTES, 'UTF-8');
	
	
	
	echo $cls_insurance_company->add_insurance_company($icname,$address,$description);
	
?>