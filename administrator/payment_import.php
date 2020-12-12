<?php
//error_reporting(0);
require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$conn = $cls_dbconfig->connection();

	$amount_dolors = $conn->query("SELECT * From tbl_payment_fees where type='company'");
	$amountss = $amount_dolors->fetch_assoc();
	$annualss = $amountss['amount_fees'];
			
if(isset($_POST["Import"])){
echo $company_code = $_REQUEST['company_code'];
echo $at = $_REQUEST['amount'];
echo $filename=$_FILES["file"]["tmp_name"];
	
	$show = $conn->query("SELECT * FROM tbl_vs_client WHERE company_id = '$company_code'");
	$r7 = $show->fetch_assoc();
	$s_paid = $r7['subscrpition_paid'];
	
	
if($_FILES["file"]["size"] > 0)
{

$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{	
	
	$fname = $emapData[0];
	$lname = $emapData[1];
	$email = $emapData[2];
	
	//$show_amount = $conn->query("SELECT ROUND($amount/count('$email')) as amounts from tbl_vs_client WHERE company_id = '$company_code' and client_email='$email'");
	
	//$amt7 = $show_amount->fetch_assoc();
	//$at = $amt7['amounts'];
	
//It wiil Update a row to our subject table from our csv file`
	$todate = date("Y-m-d");
	$addoneyeardate = date("Y-m-d", strtotime("+1 year"));
	
	$sql = "UPDATE tbl_vs_client SET subscrpition_paid = '$at', valid_from='$todate', valid_to='$addoneyeardate' WHERE client_email='$email' and company_id = '$company_code'";
	$result = mysqli_query( $conn, $sql );
	

if(! $result )
{

echo "<script type=\"text/javascript\">
alert(\"Invalid File: Please Excel file convert to CSV file.\");
window.location = \"payment_company.php\"
</script>";
}else{

	$resultMasterTable = $conn->query("insert into tbl_companypaytrack (comapny_code,pay_year,pay_date,pay_status) values ('$company_code','$at','$todate','Active')");
	$rests = mysqli_query($conn,$resultMasterTable);
	
	
	$resultAuditTable = $conn->query("insert into tbl_audit_trail (table_name,field_name,old_value,new_value,change_by,change_date) values ('tbl_vs_client','subscrpition_paid','$s_paid',('$at'),'$company_code','$todate')");
	$rest = mysqli_query($conn,$resultAuditTable);
	
	$data = $conn->query("SELECT * FROM tbl_vs_client WHERE client_email='$email' and company_id = '$company_code'");
	
	while($row = $data->fetch_assoc()){
	$vs_code = $row['vs_code'];
	
	$resultvscmasTable = $conn->query("UPDATE tbl_vscode_master set vs_code_issue_date='$addoneyeardate', vs_code_status='Active' where vs_code='$vs_code'");
	$rests = mysqli_query($conn,$resultvscmasTable);
}
/*



$conn->begin_transaction();
	
	$sql = "UPDATE tbl_vs_client SET subscrpition_paid = '$at', valid_from='$todate', valid_to='$addoneyeardate' WHERE client_email='$email' and company_id = '$company_code'";
	$result = mysqli_query( $conn, $sql );
	


$affected_rows = $conn->affected_rows;

	$resultMasterTable = $conn->query("insert into tbl_companypaytrack (comapny_code,pay_year,pay_date,pay_status) values ('$company_code','$at','$todate','Active')");
	//$rest = mysqli_query($conn,$resultMasterTable);
	
	
	$resultAuditTable = $conn->query("insert into tbl_audit_trail (table_name,field_name,old_value,new_value,change_by,change_date) values ('tbl_vs_client','subscrpition_paid','$s_paid','$at','$company_code','$todate')");
	//$rest = mysqli_query($conn,$resultAuditTable);
	
	$data = $conn->query("SELECT * FROM tbl_vs_client WHERE company_id = '$company_code'");
	
	while($row = $data->fetch_assoc()){
	$vs_code = $row['vs_code'];
	
	$resultvscmasTable = $conn->query("UPDATE tbl_vscode_master set vs_code_issue_date='$addoneyeardate', vs_code_status='Active' where vs_code='$vs_code'");
	//$rest = mysqli_query($conn,$resultvscmasTable);
}

if($result && $resultMasterTable && $resultAuditTable && $resultvscmasTable)
	{
		$conn->commit();
		//return "Order Received Successfully";
		echo '1';
		die;

	} else {
		$conn->rollback();
		//return 'Not Inserted';
		echo '0';
		die;
	}




$message = '<!DOCTYPE HTML>'. 
'<head>'. 
'<meta http-equiv="content-type" content="text/html">'.
'<title>Confirm Registration</title>'. 
'</head>'. 
'<body>'.
'<div style="background:#f6f6f6;color:#383838">'.
	'<div class="adM">'.
      '</div>'.
		'<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">'.
           '<tbody>'.
			'<tr>'.
               '<td style="padding:20px 0 20px 0" align="center" valign="top">'.
                   '<table style="border:1px solid #e0e0e0" bgcolor="FFFFFF" border="0" cellpadding="10" cellspacing="0" width="650">'.
                        
					'<tbody>'.
					'<tr>'.
					   ' <td valign="top">'.
							
							'<span>'.
								'<p>Hello '.$fname.' '.$lname.'<p>'.
							'</span>'.
						'</td>'.
                        '</tr>'.
                        '<tr>'.
                            '<td valign="top">'.
                                '<h1 style="font-size:22px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Please active Your Account , just click following link'.
								'</h1>'.
                                '<p style="font-size:12px;line-height:16px;margin:0 0 8px 0">'.''.'</p>'.
								
								'<a style="font-size:20px;" href="https://thevirtualsafe.com/demo/verify.php?id='.$vs_id.'&code='.$vs_code.'" target="_blank" >'.
							'Click HERE to Activate'.
							'</a>'.
                            '</td>'.
                        '</tr>'.
                        '<tr>'.
                           '<td align="center" bgcolor="#FFFFFF">'.'<center>'.'<p style="font-size:12px;margin:0">'.'© 2017 The Virtual Safe'.'</p>'.'</center>'.'</td>'.
                        '</tr>'.
						'</tbody>'.
						'</table>'.
					'</td>'.
				'</tr>'.
			'</tbody>'.
		'</table>'.
		'<div class="yj6qo">'.'</div>'.
		'<div class="adL">'.
		'</div>'.
	'</div>'.

'</body>'; 
/*EMAIL TEMPLATE ENDS*/ 
/*
$to=$email;             // give to email address 
$subject = "Confirm Registration";  //change subject of email 
$from    = "info@thevirtualsafe.com";                           // give from email address

$headers  = "From: " . $from . "\r\n"; 
$headers .= "Reply-To: ". $from . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; 

 mail($to, $subject, $message, $headers);




 
 

*/



//throws a message if data successfully imported to mysql database from excel file
echo "<script type=\"text/javascript\">
alert(\"CSV File has been successfully Imported.\");
window.location = \"payment_company.php\"
</script>";
}
}
fclose($file);
//close of connection
mysql_close($conn);
}
}

?> 