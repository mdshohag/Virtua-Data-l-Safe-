<?php

	session_start();
	
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$client_id = $_SESSION['customer_id'];
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	 
	$authorized_id = $_POST['authorized'];
	
	  echo $cls_virtual_safe_client->authorized_delete($authorized_id,$client_id);

?>