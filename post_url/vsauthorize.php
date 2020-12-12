<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_member_login = new cls_member_login();
	
	$fname = htmlspecialchars($_REQUEST['fname'], ENT_QUOTES, 'UTF-8');
	$lname = htmlspecialchars($_REQUEST['lname'], ENT_QUOTES, 'UTF-8');
	$cod = htmlspecialchars($_REQUEST['cod'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	
	echo $cls_member_login->client_access_authorize($fname,$lname,$cod);
	
?>