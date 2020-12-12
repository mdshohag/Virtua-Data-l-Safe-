<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_company_paytrack = new cls_company_paytrack();
	
	$companyid = htmlspecialchars($_REQUEST['companyid'], ENT_QUOTES, 'UTF-8');
	$company_roster_id = htmlspecialchars($_REQUEST['company_roster_id'], ENT_QUOTES, 'UTF-8');
	$pay_month = htmlspecialchars($_REQUEST['pay_month'], ENT_QUOTES, 'UTF-8');
	$pay_year = htmlspecialchars($_REQUEST['pay_year'], ENT_QUOTES, 'UTF-8');
	$pay_date = htmlspecialchars($_REQUEST['pay_date'], ENT_QUOTES, 'UTF-8');
	$pay_status = htmlspecialchars($_REQUEST['pay_status'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	echo $cls_company_paytrack->add_company_paytrack($companyid,$company_roster_id,$pay_month,$pay_year,$pay_date,$pay_status);
	
?>