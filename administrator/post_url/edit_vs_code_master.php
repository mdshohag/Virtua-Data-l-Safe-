<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_vscode_master = new cls_vscode_master();
	
	$vs_code_type = htmlspecialchars($_REQUEST['vs_code_type'], ENT_QUOTES, 'UTF-8');
	$issue_date = htmlspecialchars($_REQUEST['issue_date'], ENT_QUOTES, 'UTF-8');
	$vs_status = htmlspecialchars($_REQUEST['vs_status'], ENT_QUOTES, 'UTF-8');
	$vs_description = htmlspecialchars($_REQUEST['vs_description'], ENT_QUOTES, 'UTF-8');
	$vscode_code = "$_POST[vscode_code]";
	
	
	
	echo $cls_vscode_master->update_vscode_master($vs_code_type,$issue_date,$vs_status,$vs_description,$vscode_code);
	
?>