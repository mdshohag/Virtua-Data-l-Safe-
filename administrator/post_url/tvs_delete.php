<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$id = $_POST['tvs_cleint_id'];
	$vscode = $_POST['vscode'];
	
	echo $cls_virtual_safe_client->tvsc_delete($id);
	echo $cls_virtual_safe_client->tvsc_insurance_delete($id);
	echo $cls_virtual_safe_client->tvsc_assest_delete($id);
	echo $cls_virtual_safe_client->tvsc_bank_delete($id);
	echo $cls_virtual_safe_client->tvsc_testament_delete($id);
	
	echo $cls_virtual_safe_client->tvsc_vscode_delete($vscode);
	
	
?>