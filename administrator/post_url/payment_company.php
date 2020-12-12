<?php
	session_start();
	
	
	
	include("../PHPExcel/IOFactory.php");
	
	//print_r($_POST); die;
$db = new mysqli("localhost", "root", "", "db_benefit");	

$company_code = $_REQUEST['company_code'];


 $passwd = uniqid();

$target_path = "../file/";
$ext = pathinfo(basename($_FILES['excfile']['name']), PATHINFO_EXTENSION);
$filename = $_FILES['excfile']['name'];

//$target_path = $target_path . $_FILES['uploadedfile']['name'];

$target_path = $target_path . $filename;

move_uploaded_file($_FILES['excfile']['tmp_name'], $target_path);
	



$objPHPExcel = PHPExcel_IOFactory::load($target_path);
$html="<table border ='1'>";
foreach($objPHPExcel->getWorksheetIterator() as $worksheet)
{
	$highestRow = $worksheet->getHighestRow();
	for($row=2;$row<=$highestRow;$row++)
	{
	
	print_r($row);//die;
	
		$vs_id = rand('1111','9999');
		$vs_code = uniqid();
		//	$rand = rand('1111','9999');
	//	$html.="<tr>";
		$first_name = mysqli_real_escape_string($db,$worksheet->getCellByColumnAndRow(0, $row)->getValue());
		$last_name = mysqli_real_escape_string($db,$worksheet->getCellByColumnAndRow(1, $row)->getValue());
		$email = mysqli_real_escape_string($db,$worksheet->getCellByColumnAndRow(2, $row)->getValue());
		
		
	//	$sql = "INSERT INTO tbl_vs_client(client_id,client_first_name,client_last_name,client_email,vs_code,company_id,client_password)VALUES('$vs_id','$first_name','$last_name','$email','$vs_code','$company_code',md5('$passwd'))";
		
		mysqli_query($db,$sql);
		
		//$inst = "INSERT INTO tbl_vscode_master (vs_code,vs_code_type,vs_code_status) VALUES ('$vs_code','Company','InActive')";
		
		mysqli_query($db,$inst);
		
		/*$mail_check = "select client_email from tbl_vs_client where client_email = '$email'";	
		$result = mysqli_query($db, $mail_check); 	  
		$row = $result->fetch_array();
		$client_email =  $row['client_email'];	
	
			if($email == $client_email){
		echo "not";
		}
		else{		
		
		}*/
		
		//$html.='<td>'.$name.'</td>';
		//$html.='<td>'.$email.'</td>';
		//$html.='</tr>';
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
                   '<table style="border:1px solid #e0e0e0" bgcolor="FFFFFF" border="0" cellpadding="10" cellspacing="0" width="850">'.
                        
					'<tbody>'.
					'<tr>'.
					   ' <td valign="top">'.
							
							'<span>'.
								'<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">Hi '.$first_name.' '.$last_name.'<p>'.
							'</span>'.
						'</td>'.
                        '</tr>'.
                        '<tr>'.
                            '<td valign="top">'.
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Thank you for your interest. Please click this link '.
								'<a style="font-size:20px;" href="https://thevirtualsafe.com/demo/verify.php?id='.$vs_id.'&code='.$vs_code.'" target="_blank" >'.
							'Click HERE'.
							'</a>'.
							' and follow instructions on screen to activate your Account. '.'</p>'.
							'<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Your temporary Password is this:'.$password.''.'</p>'.
							 '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Regards'.'<br><br>'.'
The Virtual Safe Team'.'</p>'.
                            '</td>'.
                        '</tr>'.
                        '<tr>'.
                          
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

// mail($to, $subject, $message, $headers);	
		
	}
}
//echo ('<SCRIPT LANGUAGE="JavaScript">
		//	window.alert("Form submission successfully")
		//	window.location.href="excel.php";
		//	</SCRIPT>');
$html.='</table>';

unlink($target_path);
?>