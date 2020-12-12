<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$client_id = htmlspecialchars($_REQUEST['client_id'], ENT_QUOTES, 'UTF-8');
	$insurancecompanycode = htmlspecialchars($_REQUEST['insurancecompanycode'], ENT_QUOTES, 'UTF-8');
	$insurance_name = htmlspecialchars($_REQUEST['insurance_name'], ENT_QUOTES, 'UTF-8');
	$policy_number = htmlspecialchars($_REQUEST['policy_number'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	echo $cls_virtual_safe_client->add_vs_client_insurance($client_id,$insurancecompanycode,$insurance_name,$policy_number);
	
?>