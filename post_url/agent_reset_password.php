<?php

	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_insurance_agent = new cls_insurance_agent();
	
	$uid = "$_POST[userdataid]";
	
	
	$new_password =  md5($_REQUEST['password']);
	
	$cls_insurance_agent->agent_password_reset($new_password,$uid);
	
?>