<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_payment_type = new cls_payment_type();
	
	$annualfees = htmlspecialchars($_REQUEST['annualfees'], ENT_QUOTES, 'UTF-8');
	
	$id = $_POST['amount_id'];
	
	
	
	echo $cls_payment_type->edit_payment_amount($annualfees,$id);
	
?>