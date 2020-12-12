<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_bank_master = new cls_bank_master();
	
	$bank_name = htmlspecialchars($_REQUEST['bank_name'], ENT_QUOTES, 'UTF-8');
	$bank_address = htmlspecialchars($_REQUEST['bank_address'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	echo $cls_bank_master->add_bank_master($bank_name,$bank_address);
	
?>