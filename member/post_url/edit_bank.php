<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	$client_id = $_SESSION['customer_id'];

	$bank_id = $_POST['bank_id'];
   
	$bank_name = htmlspecialchars($_REQUEST['bank_name'], ENT_QUOTES, 'UTF-8');
	//$bank_account = htmlspecialchars($_REQUEST['bank_account'], ENT_QUOTES, 'UTF-8');
	$acount_type = htmlspecialchars($_REQUEST['acount_type'], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'], ENT_QUOTES, 'UTF-8');

	echo $cls_virtual_safe_client->update_vs_client_bank($bank_name,$acount_type,$remark,$bank_id,$client_id);
		

?>