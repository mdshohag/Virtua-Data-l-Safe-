<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	$client_id = $_SESSION['customer_id'];

	$testament_id = $_POST['testament_id'];
   
	//$typewill = htmlspecialchars($_REQUEST['typewill'], ENT_QUOTES, 'UTF-8');
	$location_testament = htmlspecialchars($_REQUEST['location_testament'], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'], ENT_QUOTES, 'UTF-8');

	echo $cls_virtual_safe_client->update_vs_client_location_testament($location_testament,$remark,$testament_id,$client_id);
		

?>