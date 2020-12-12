<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	
	$email_id = $_POST['email_id'];
	$user_id = $_POST['user_id'];
   
	$frist_name = htmlspecialchars($_REQUEST['frist_name'], ENT_QUOTES, 'UTF-8');
	$last_name = htmlspecialchars($_REQUEST['last_name'], ENT_QUOTES, 'UTF-8');
	$country_name = htmlspecialchars($_REQUEST['country_name'], ENT_QUOTES, 'UTF-8');
	$city = htmlspecialchars($_REQUEST['city'], ENT_QUOTES, 'UTF-8');
	$state = htmlspecialchars($_REQUEST['state'], ENT_QUOTES, 'UTF-8');
	$address = htmlspecialchars($_REQUEST['address'], ENT_QUOTES, 'UTF-8');
	$zip_code = htmlspecialchars($_REQUEST['zip_code'], ENT_QUOTES, 'UTF-8');

	echo $cls_virtual_safe_client->agent_update_vs_client_information($frist_name,$last_name,$country_name,$city,$state,$address,$zip_code,$email_id,$user_id);
		

?>