<?php

	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$uid = "$_POST[userdataid]";
	
	
	$new_password =  md5($_REQUEST['password']);
	
	$cls_virtual_safe_client->clnt_password_update($new_password,$uid);
	
?>