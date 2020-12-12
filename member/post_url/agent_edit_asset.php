<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	$client_id = $_POST['client_id'];
	$asset_id = $_POST['asset_id'];
   
	$asset_type = htmlspecialchars($_REQUEST['asset_type'], ENT_QUOTES, 'UTF-8');
	$asset_address = htmlspecialchars($_REQUEST['asset_address'], ENT_QUOTES, 'UTF-8');
	$company_name = htmlspecialchars($_REQUEST['company_name'], ENT_QUOTES, 'UTF-8');
	$boat_name = htmlspecialchars($_REQUEST['boat_name'], ENT_QUOTES, 'UTF-8');
	$other_name = htmlspecialchars($_REQUEST['other_name'], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'], ENT_QUOTES, 'UTF-8');

	echo $cls_virtual_safe_client->update_vs_client_asset($asset_type,$asset_address,$company_name,$boat_name,$other_name,$remark,$asset_id,$client_id);
		

?>