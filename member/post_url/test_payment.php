<?php
	 session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$cls_dbconfig = new cls_dbconfig();
	
	$db = $cls_dbconfig->connection();
	//print_r($_POST); die;
	
	
	$client_id = $_SESSION['customer_id'];

	$testpayment = $db->real_escape_string($_POST['testpayment']);
	
	$todate = date("Y-m-d");
	$addoneyeardate = date("Y-m-d", strtotime("+1 year"));
	
	$db->begin_transaction();
	
	$show = $db->query("SELECT * FROM tbl_vs_client WHERE client_id = '$client_id'");
	
		
	$r7 = $show->fetch_assoc();
	$s_paid = $r7['subscrpition_paid'];
	$vs_code = $r7['vs_code'];
	
	//$result = $db->query("SELECT * FROM tbl_vs_client WHERE subscription_rcbl = '$testpayment' AND client_id = '$client_id'");
	$result = $db->query("UPDATE tbl_vs_client SET subscrpition_paid = '$testpayment', valid_from='$todate', valid_to='$addoneyeardate' WHERE subscription_rcbl = '$testpayment' AND client_id = '$client_id'");
	
	$affected_rows = $db->affected_rows;
	
	//print_r($db->affected_rows); die;
// ai khane check kora hobe
	$resultMasterTable = $db->query("insert into tbl_vs_client_paytrack (vs_client_id,pay_type,pay_amount,date) values ('$client_id','1','$testpayment','$todate')");
	
	
	
	$resultAuditTable = $db->query("insert into tbl_audit_trail (table_name,field_name,old_value,new_value,change_by,change_date) values ('tbl_vs_client','subscrpition_paid','$s_paid','$testpayment','$client_id','$todate')");
	
	$resultvscmasTable = $db->query("UPDATE tbl_vscode_master set vs_code_issue_date='$addoneyeardate' where vs_code='$vs_code'");
			 

	if($result && $affected_rows > 0 && $resultMasterTable && $resultAuditTable && $resultvscmasTable)
	{
		$db->commit();
		//return "Order Received Successfully";
		echo '1';
		die;

	} else {
		$db->rollback();
		//return 'Not Inserted';
		echo '0';
		die;
	}
		
?>