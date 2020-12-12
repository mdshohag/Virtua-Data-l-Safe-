<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	$client_id = $_SESSION['customer_id'];

	$insurance_id = $_POST['insurance_id'];
   
	$insurancecompanycode = htmlspecialchars($_REQUEST['insurancecompanycode'], ENT_QUOTES, 'UTF-8');
	$insurance_name = htmlspecialchars($_REQUEST['insurance_name'], ENT_QUOTES, 'UTF-8');
	//$policy_number = htmlspecialchars($_REQUEST['policy_number'], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'], ENT_QUOTES, 'UTF-8');

	echo $cls_virtual_safe_client->update_vs_client_insurance($insurancecompanycode,$insurance_name,$remark,$insurance_id,$client_id);
		

?>