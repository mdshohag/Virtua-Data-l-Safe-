<?php 
	// session_start();
	include('include/header.php'); 


	$cls_dbconfig = new cls_dbconfig();
	
	$db = $cls_dbconfig->connection();
	//print_r($_POST); die;
	
	
	$client_id = $_SESSION['customer_id'];

	$testpayment = $_GET['amount'];
	
	$todate = date("Y-m-d");
	
	$date = new DateTime();
	//$addoneyeardate = $date->modify('+ years')->format('Y-m-d');
	$addoneyeardate = date("Y-m-d", strtotime("+1 year"));
	
	$db->begin_transaction();
	
	$show = $db->query("SELECT * FROM tbl_vs_client WHERE client_id = '$client_id'");
	
		
	$r7 = $show->fetch_assoc();
	$s_paid = $r7['renewal_number'];
	$vs_code = $r7['vs_code'];
	
	//$result = $db->query("SELECT * FROM tbl_vs_client WHERE subscription_rcbl = '$testpayment' AND client_id = '$client_id'");
	$result = $db->query("UPDATE tbl_vs_client SET renewal_number='$testpayment', valid_from='$todate', valid_to='$addoneyeardate' WHERE client_id = '$client_id'");
	
	$affected_rows = $db->affected_rows;
	
	//print_r($db->affected_rows); die;
// ai khane check kora hobe
	$resultMasterTable = $db->query("insert into tbl_vs_client_paytrack (vs_client_id,pay_type,pay_amount,date) values ('$client_id','3','$testpayment','$todate')");
	
	
	
	$resultAuditTable = $db->query("insert into tbl_audit_trail (table_name,field_name,old_value,new_value,change_by,change_date) values ('tbl_vs_client','renewal_number','$s_paid','$testpayment','$client_id','$todate')");
	
	$resultvscmasTable = $db->query("UPDATE tbl_vscode_master set vs_code_issue_date='$addoneyeardate' where vs_code='$vs_code'");
			 

	if($result && $affected_rows > 0 && $resultMasterTable && $resultAuditTable && $resultvscmasTable)
	{
		$db->commit();
		//return "Order Received Successfully";
		//echo '1';
		echo("<script>location.href = 'http://localhost/benefits_hts/member/vscode.php';</script>");
		die;
		

	} else {
		$db->rollback();
		//return 'Not Inserted';
		echo 'Not Update Date';
		die;
	}
		
	
 

?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							
							<p class="panel-subtitle">
							<?php
								
							?>							
							</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<h3>Test Payment</h3>
								<div class="tab-content">
								
									
								</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('include/footer.php'); ?>