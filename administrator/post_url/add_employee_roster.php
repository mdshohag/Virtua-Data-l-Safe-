<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_employee_roster = new cls_employee_roster();
	
	$company_code = htmlspecialchars($_REQUEST['company_code'], ENT_QUOTES, 'UTF-8');
	$company_roster_code = htmlspecialchars($_REQUEST['company_roster_code'], ENT_QUOTES, 'UTF-8');
	$employeeid = htmlspecialchars($_REQUEST['employeeid'], ENT_QUOTES, 'UTF-8');
	$employee_name = htmlspecialchars($_REQUEST['employee_name'], ENT_QUOTES, 'UTF-8');
	$employee_designation = htmlspecialchars($_REQUEST['employee_designation'], ENT_QUOTES, 'UTF-8');
	$birth_date = htmlspecialchars($_REQUEST['birth_date'], ENT_QUOTES, 'UTF-8');
	$employee_ssn = htmlspecialchars($_REQUEST['employee_ssn'], ENT_QUOTES, 'UTF-8');
	
	
	
	echo $cls_employee_roster->add_employee_roster($company_code,$company_roster_code,$employeeid,$employee_name,$employee_designation,$birth_date,$employee_ssn);
	
?>