<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$client_id = htmlspecialchars($_REQUEST['client_id'], ENT_QUOTES, 'UTF-8');
	$bank_code = htmlspecialchars($_REQUEST['bank_code'], ENT_QUOTES, 'UTF-8');
	$bank_account = htmlspecialchars($_REQUEST['bank_account'], ENT_QUOTES, 'UTF-8');
	$acount_type = htmlspecialchars($_REQUEST['acount_type'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	echo $cls_virtual_safe_client->add_vs_bank($client_id,$bank_code,$bank_account,$acount_type);
	
?>