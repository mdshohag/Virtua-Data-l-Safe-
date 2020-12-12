<?php
	include('include/header.php');
	
	$cls_dbconfig = new cls_dbconfig();
	
	$db = $cls_dbconfig->connection();
	
	
	
	//print_r($_POST); die;
	
	$client_id = $_GET['client'];
	 $firstname = $_GET['firstname'];
	 $lastname = $_GET['lastname'];
	//print_r($firstname); die;
	 
	//$vsc_id = $_GET['vsc'];

	 $testpayment = $_GET['amount'];
//	print_r($testpayment); die;
	$shows = $db->query("SELECT * From tbl_payment_fees where type='search'");
		
	$r7s = $shows->fetch_assoc();
	//$amount_fees = $r7s['amount_fees'];
	
if($_GET['amount'] == $r7s['amount_fees']){
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
	$resultvscauthorizedTable = $db->query("select * From tbl_authorized_representive Where auth_f_name='$firstname' And auth_l_name='$lastname' And client_id='$client_id'");
	
	$affected_rows = $db->affected_rows;
	
	$resultMasterTable = $db->query("insert into tbl_vs_client_paytrack (vs_client_id,pay_type,pay_amount,date) values ('$client_id','3','$testpayment','$todate')");
	
	
	
	$resultAuditTable = $db->query("insert into tbl_audit_trail (table_name,field_name,old_value,new_value,change_by,change_date) values ('tbl_vs_client','status','Search Pay','$testpayment','$client_id','$todate')");
	
	$resultvscmasTable = $db->query("UPDATE tbl_vscode_master set vs_code_description='Search Pay' where vs_code='$vsc_id'");
		
	
	if($resultvscauthorizedTable && $affected_rows > 0 && $resultMasterTable && $resultAuditTable && $resultvscmasTable)
	{
		$db->commit();
		//return "Order Received Successfully";
		//echo '1';
		echo("<script>location.href = 'http://localhost/benefits_hts/access_search.php?accessid=$client_id&vscid=$vsc_id';</script>");
		die;
		

	} else {
		$db->rollback();
		//return 'Not Inserted';
		//echo '0';
		echo("<script>location.href = 'http://localhost/benefits_hts/authorized.php';</script>");
		die;
	}	
	
		
	
	
	
	
}else{
	
	echo "not";
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