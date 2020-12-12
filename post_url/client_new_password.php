<?php

	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$cls_member_login = new cls_member_login();
	
	$uid = $_REQUEST['userdataid'];
	
	$user_id = $_REQUEST['user_id'];
	//$old_password = md5($_REQUEST['old_password']);
	$new_password =  md5($_REQUEST['password']);
	//$retype_pass = md5($_REQUEST['retype_pass']);
	
	$q7 = $cls_virtual_safe_client->check_userid_client($uid);
	
		$r7 = $q7->fetch_assoc();
		$client_email = $r7['client_email'];
		//print_r($password);
	  //  die();
	
		if($user_id == $client_email)
	{
		echo $cls_virtual_safe_client->password_update($new_password,$uid);
		
		echo $cls_member_login->agent_client_access($user_id,$uid);
		
		//echo '1';

	} else {
			echo '0';
		}
	
	
?>