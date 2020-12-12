<?php
 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$testament = $_POST['location_testament'];
	
	for($i=0; $i<count($testament); $i++){
	
	$client_id = $_SESSION['customer_id'];
	//$typewill = htmlspecialchars($_REQUEST['typewill'][$i], ENT_QUOTES, 'UTF-8');
	$location_testament = htmlspecialchars($_REQUEST['location_testament'][$i], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'][$i], ENT_QUOTES, 'UTF-8');
	
	echo $cls_virtual_safe_client->add_vs_client_location_testament($client_id,$location_testament,$remark);
	
	}
?>