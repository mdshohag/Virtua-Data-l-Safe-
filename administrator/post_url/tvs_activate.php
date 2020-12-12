<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	 
		$id = $_POST['tvs_activ_id'];
	
	
	  echo $cls_virtual_safe_client->tvsc_activated($id);
	
	
?>