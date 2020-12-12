<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$client_id = htmlspecialchars($_REQUEST['client_id'], ENT_QUOTES, 'UTF-8');
	$asset_type = htmlspecialchars($_REQUEST['asset_type'], ENT_QUOTES, 'UTF-8');
	$asset_address = htmlspecialchars($_REQUEST['asset_address'], ENT_QUOTES, 'UTF-8');
	$company_name = htmlspecialchars($_REQUEST['company_name'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	echo $cls_virtual_safe_client->add_vs_client_asset($client_id,$asset_type,$asset_address,$company_name);
	
?>