<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	$client_id = $_SESSION['customer_id'];

	$author_id = $_POST['author_id'];
   
	$authorized_fname = htmlspecialchars($_REQUEST['authorized_fname'], ENT_QUOTES, 'UTF-8');
	$authorized_lname = htmlspecialchars($_REQUEST['authorized_lname'], ENT_QUOTES, 'UTF-8');
	$relation = htmlspecialchars($_REQUEST['relation'], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'], ENT_QUOTES, 'UTF-8');

	echo $cls_virtual_safe_client->update_vs_client_authorized($authorized_fname,$authorized_lname,$relation,$remark,$author_id,$client_id);
		

?>