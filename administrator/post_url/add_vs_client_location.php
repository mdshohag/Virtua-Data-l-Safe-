<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$client_id = htmlspecialchars($_REQUEST['client_id'], ENT_QUOTES, 'UTF-8');
	$location_testament = htmlspecialchars($_REQUEST['location_testament'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	echo $cls_virtual_safe_client->add_vs_client_location_testament($client_id,$location_testament);
	
?>