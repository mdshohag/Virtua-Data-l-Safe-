<?php
	session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	$asset_types = $_POST['asset_type'];
	
	// var_dump($asset_types); exit;
	 
	for($i=0; $i<count($asset_types); $i++){
	
	$client_id = $_SESSION['customer_id'];
	$asset_type = htmlspecialchars($_REQUEST['asset_type'][$i], ENT_QUOTES, 'UTF-8');
	$asset_address = htmlspecialchars($_REQUEST['asset_address'][$i], ENT_QUOTES, 'UTF-8');
	$company_name = htmlspecialchars($_REQUEST['company_name'][$i], ENT_QUOTES, 'UTF-8');
	$boat_name = htmlspecialchars($_REQUEST['boat_name'][$i], ENT_QUOTES, 'UTF-8');
	$other_name = htmlspecialchars($_REQUEST['other_name'][$i], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'][$i], ENT_QUOTES, 'UTF-8');
	
	echo $cls_virtual_safe_client->add_vs_client_asset($client_id,$asset_type,$asset_address,$company_name,$boat_name,$other_name,$remark);
	
	}
?>