<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_insurance_agent = new cls_insurance_agent();
	 
		$id = $_POST['agent_act_id'];
	
	
	  echo $cls_insurance_agent->insurance_agent_activated($id);
	
	
?>