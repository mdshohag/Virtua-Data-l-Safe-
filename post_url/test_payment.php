<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	
	$db = $cls_dbconfig->connection();
	
	
	
	//print_r($_POST); die;
	
	$client_id = $_POST['access_id'];
	//$vsc_id = $_POST['vsc_id'];

	 $testpayment = $_POST['amt'];
//	print_r($testpayment); die;
	$shows = $db->query("SELECT * From tbl_payment_fees where type='search'");
		
	$r7s = $shows->fetch_assoc();
	//$amount_fees = $r7s['amount_fees'];
	
if($_POST['amt'] == $r7s['amount_fees']){
	$todate = date("Y-m-d");
	//$addoneyeardate = date("Y-m-d", strtotime("+1 month"));
	
	$db->begin_transaction();
	$show = $db->query("SELECT * FROM tbl_vs_client WHERE client_id = '$client_id'");
		
	$r7 = $show->fetch_assoc();
	
	$vsc_id = $r7['vs_code'];
	
	
	//$result = $db->query("SELECT * FROM tbl_vs_client WHERE subscription_rcbl = '$testpayment' AND client_id = '$client_id'");
	//$result = $db->query("UPDATE tbl_vs_client SET status='1' WHERE client_id = '$client_id'");
	
	//$affected_rows = $db->affected_rows;
	
	//print_r($db->affected_rows); die;
// ai khane check kora hobe
	$resultMasterTable = $db->query("insert into tbl_vs_client_paytrack (vs_client_id,pay_type,pay_amount,date) values ('$client_id','3','$testpayment','$todate')");
	
	
	
	$resultAuditTable = $db->query("insert into tbl_audit_trail (table_name,field_name,old_value,new_value,change_by,change_date) values ('tbl_vs_client','status','Search Pay','$testpayment','$client_id','$todate')");
	
	$resultvscmasTable = $db->query("UPDATE tbl_vscode_master set vs_code_description='Search Pay' where vs_code='$vsc_id'");
			 

	if($resultMasterTable && $resultAuditTable && $resultvscmasTable)
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
	
	
	
	
}else{
	
	echo "not";
}
		
?>