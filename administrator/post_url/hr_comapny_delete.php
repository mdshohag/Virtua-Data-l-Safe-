<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_hr_company = new cls_hr_company();
	 
	$id = "$_POST[comapny_code]";
	
	  echo $cls_hr_company->hr_company_delete($id);
	
	
?>