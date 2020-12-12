<?php
//error_reporting(0);
//$conn= new mysqli("localhost", "root", "", "db_benefit");
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$conn = $cls_dbconfig->connection();
	
	$amount_dolors = $conn->query("SELECT * From tbl_payment_fees where type='company'");
	$amountss = $amount_dolors->fetch_assoc();
	$annualss = $amountss['amount_fees'];
	
	$amount_lifetime  = $conn->query("SELECT * From tbl_payment_fees where type='lifetime'");
	$lifetime = $amount_lifetime->fetch_assoc();
	$lifetimepay = $lifetime['amount_fees'];
	
	$renewal_dolors = $conn->query("SELECT * From tbl_payment_fees where type='renewal'");
	$renewal = $renewal_dolors->fetch_assoc();
	$renewals = $renewal['amount_fees'];
	//$sql = mysqli_query($conn,$amount_dolors);
			
if(isset($_POST["Import"])){
echo $company_code = $_REQUEST['company_code'];
echo $filename=$_FILES["file"]["tmp_name"];

if($_FILES["file"]["size"] > 0)
{

$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{	
	$vs_id = rand('1111','9999');
	$vs_code = uniqid();
	$password = uniqid();
	$fname = $emapData[0];
	$lname = $emapData[1];
	$email = $emapData[2];
	
	$todate = date("Y-m-d");
	$addoneyeardate = date("Y-m-d", strtotime("+1 year"));
	
	//print_r($email); die;
//It wiil insert a row to our subject table from our csv file`
$sql = "INSERT INTO tbl_vs_client(client_id,client_first_name,client_last_name,client_email,vs_code,subscription_rcbl,	subscrpition_paid,lifetime_pay,valid_from,valid_to,renewal_number,company_client,company_id,client_password,status)VALUES('". $vs_id ."','". $fname ."','". $lname ."','". $email . "','". $vs_code ."','". $annualss ."','". $annualss ."','".$lifetimepay."','". $todate ."','". $addoneyeardate ."','". $renewals ."','Y','". $company_code ."',md5('". $password ."'),'Annual')";
//we are using mysql_query function. it returns a resource on true else False on error 

		
$result = mysqli_query( $conn, $sql );

if(! $result )
{

echo "<script type=\"text/javascript\">
alert(\"Invalid File: Please Excel file convert to CSV file.\");
window.location = \"add_virtual_safe_test.php\"
</script>";
}else{

$inst = "INSERT INTO tbl_vscode_master (vs_code,vs_code_type,vs_code_issue_date,vs_code_status) VALUES ('$vs_code','Company','$addoneyeardate','Active')";
$rest = mysqli_query($conn,$inst);


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
                   '<table style="border:1px solid #e0e0e0" bgcolor="FFFFFF" border="0" cellpadding="10" cellspacing="0" width="860">'.
                        
					'<tbody>'.
					'<tr>'.
					   ' <td valign="top">'.
							
							'<span>'.
								'<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">Hi '.$fname.' '.$lname.'<p>'.
							'</span>'.
						'</td>'. 
                        '</tr>'.
                        '<tr>'.
                            '<td valign="top">'.
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Welcome to The Virtual Safe, your secure beneficiary information storage site. Please'.
								' <a style="font-size:20px;" href="https://thevirtualsafe.com/demo/verify_client_agent_regist.php?id='.$vs_id.'&code='.$vs_code.'" target="_blank" >'.
							'"Click Here"'.
							'</a>'.
							' to activate your Account. '.'</p>'.
							'<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Your login user ID: '.$email.''.'</p>'.
							 '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Regards'.'<br><br>'.'
The Virtual Safe Team'.'</p>'.
                            '</td>'.
                        '</tr>'.
                        '<tr>'.
                          '<td>'.
						 '<p style="font-size:11px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'This email has been generated automatically, Please DO NOT reply to this email. If you need assistance or have any questions, please email us at Support@thevirtualsafe.com'.'</p>'.
                          '</td>'.
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

$to=$email;             // give to email address 
$subject = "Confirm Registration";  //change subject of email 
$from    = "info@thevirtualsafe.com";                           // give from email address

$headers  = "From: " . $from . "\r\n"; 
$headers .= "Reply-To: ". $from . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; 

 mail($to, $subject, $message, $headers);



//throws a message if data successfully imported to mysql database from excel file
echo "<script type=\"text/javascript\">
alert(\"CSV File has been successfully Imported.\");
window.location = \"add_virtual_safe_test.php\"
</script>";
}
}
fclose($file);
//close of connection
mysql_close($conn);
}
}

?> 