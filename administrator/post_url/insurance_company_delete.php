<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_insurance_company = new cls_insurance_company();
	 
	$id = "$_POST[insurance_comapny]";
	
	  echo $cls_insurance_company->insurance_company_delete($id);
	
	
?>