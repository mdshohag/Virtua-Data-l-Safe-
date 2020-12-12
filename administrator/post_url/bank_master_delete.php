<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_bank_master = new cls_bank_master();
	 
	$id = "$_POST[bank_master_id]";
	
	  echo $cls_bank_master->bank_master_delete($id);
	
	
?>