<?php

	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$uid = "$_POST[userdataid]";
	
	$old_password = md5($_REQUEST['old_password']);
	$new_password =  md5($_REQUEST['password']);
	$retype_pass = md5($_REQUEST['retype_pass']);
	
	$q7 = $cls_virtual_safe_client->check_password_client($uid);
	
		$r7 = $q7->fetch_assoc();
		$password = $r7['client_password'];
		//print_r($password);
	  //  die();
	
		if($old_password == $password)
	{
		$cls_virtual_safe_client->password_update($new_password,$uid);
	echo '1';

	} else {
			echo '0';
		}
	
	
?>