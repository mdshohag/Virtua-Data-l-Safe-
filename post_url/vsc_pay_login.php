<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_member_login = new cls_member_login();
	
	$vsc = htmlspecialchars($_REQUEST['vsc'], ENT_QUOTES, 'UTF-8');
	$cod = htmlspecialchars($_REQUEST['cod'], ENT_QUOTES, 'UTF-8');
	
	
	
	
	
	echo $cls_member_login->client_vsc_pay_login($vsc,$cod);
	
?>