<?php
 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$client_id = $_POST['authorized_fname'];
	
	for($i=0; $i<count($client_id); $i++){
	
	$client_id = $_SESSION['customer_id'];
	$authorized_fname = htmlspecialchars($_REQUEST['authorized_fname'][$i], ENT_QUOTES, 'UTF-8');
	$authorized_lname = htmlspecialchars($_REQUEST['authorized_lname'][$i], ENT_QUOTES, 'UTF-8');
	$relation = htmlspecialchars($_REQUEST['relation'][$i], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'][$i], ENT_QUOTES, 'UTF-8');
	
	echo $cls_virtual_safe_client->add_vs_client_authorized($client_id,$authorized_fname,$authorized_lname,$relation,$remark);
	
	}
?>