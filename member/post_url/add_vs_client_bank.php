<?php
 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
		$bankaccount = $_POST['bank_code'];
	
	for($i=0; $i<count($bankaccount); $i++){
	$client_id = $_SESSION['customer_id'];
	$bank_code = htmlspecialchars($_REQUEST['bank_code'][$i], ENT_QUOTES, 'UTF-8');
	//$bank_account = htmlspecialchars($_REQUEST['bank_account'][$i], ENT_QUOTES, 'UTF-8');
	$acount_type = htmlspecialchars($_REQUEST['acount_type'][$i], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'][$i], ENT_QUOTES, 'UTF-8');
	
	echo $cls_virtual_safe_client->insert_vs_bank($client_id,$bank_code,$acount_type,$remark);
	}
?>