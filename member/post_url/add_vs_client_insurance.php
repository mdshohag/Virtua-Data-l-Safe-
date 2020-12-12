<?php
	session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	


		$insurance_names = $_POST['insurance_name'];
	       //var_dump($insurance_names); exit;

		//if(count($insurance_names) > 0){
			//Loop through each file
		for($i=0; $i<count($insurance_names); $i++){
		
			$client_id = $_SESSION['customer_id'];
			$insurancecompanycode = htmlspecialchars($_REQUEST['insurancecompanycode'][$i], ENT_QUOTES, 'UTF-8');
			$insurance_name = htmlspecialchars($_REQUEST['insurance_name'][$i], ENT_QUOTES, 'UTF-8');
			//$policy_number = htmlspecialchars($_REQUEST['policy_number'][$i], ENT_QUOTES, 'UTF-8');
			$remark = htmlspecialchars($_REQUEST['remark'][$i], ENT_QUOTES, 'UTF-8');
	
		echo $cls_virtual_safe_client->insert_vs_client_insurance($client_id,$insurancecompanycode,$insurance_name,$remark);
		}
	
	//}
	

?>