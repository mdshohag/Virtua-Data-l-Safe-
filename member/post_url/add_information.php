<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_insurance_agent = new cls_insurance_agent();
	
	
	$client_id = $_SESSION['customer_id'];

	$user_id = $_POST['user_id'];
   
	$frist_name = htmlspecialchars($_REQUEST['frist_name'], ENT_QUOTES, 'UTF-8');
	$last_name = htmlspecialchars($_REQUEST['last_name'], ENT_QUOTES, 'UTF-8');
	$ss_tax_id = htmlspecialchars($_REQUEST['ss_tax_id'], ENT_QUOTES, 'UTF-8');
	$companycode = htmlspecialchars($_REQUEST['companycode'], ENT_QUOTES, 'UTF-8');
	$agents_license = htmlspecialchars($_REQUEST['agents_license'], ENT_QUOTES, 'UTF-8');
	$address = htmlspecialchars($_REQUEST['address'], ENT_QUOTES, 'UTF-8');
	

	echo $cls_insurance_agent->update_agent_information($frist_name,$last_name,$address,$ss_tax_id,$companycode,$agents_license,$user_id,$client_id);
		

?>