<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	$cls_vscode_master = new cls_vscode_master();
	
	$vs_id = rand('1111','9999');
	
	$first_name = htmlspecialchars(ucwords ($_REQUEST['first_name']), ENT_QUOTES, 'UTF-8');
	$last_name = htmlspecialchars(ucwords ($_REQUEST['last_name']), ENT_QUOTES, 'UTF-8');
	//$country_name = htmlspecialchars($_REQUEST['country_name'], ENT_QUOTES, 'UTF-8');
	//$city = htmlspecialchars($_REQUEST['city'], ENT_QUOTES, 'UTF-8');
	$email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
	
	
	$vs_code = uniqid();

	$password = md5($_REQUEST['password']);
	
	

	$q7 = $cls_virtual_safe_client->check_eamil($email);
	
		$r7 = $q7->fetch_assoc();
		$client_email = $r7['client_email'];

if($email == $client_email){
echo "not";
}
else{

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
								'<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">Hi '.$first_name.' '.$last_name.'<p>'.
							'</span>'.
						'</td>'.
                        '</tr>'.  
                        '<tr>'.
                            '<td valign="top">'.
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Welcome to The Virtual Safe, your secure beneficiary information storage site. Please'.
								' <a style="font-size:20px;" href="https://thevirtualsafe.com/demo/verifyclient.php?id='.$vs_id.'&code='.$vs_code.'" target="_blank" >'.
							'"Click Here"'.
							'</a>'.
							' and follow the on screen instructions to activate your Account. '.'</p>'.
							 '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Regards'.'<br><br>'.'
The Virtual Safe Team'.'</p>'.
                            '</td>'.
                        '</tr>'.
                        '<tr>'.
						'<td>'.
						 '<p style="font-size:11px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'This email has been generated automatically, Please DO NOT reply to this email. If you need assistance or have any questions, please contact us at'.'</p>'.
						 '<p style="font-size:11px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'VPR VENTURE GROUP LLC'.'<br>'.'15389 SOUTH DIXIE HWY'.'<br>'.'PALMETTO BAY FL 33157'.'<br><br>'.'support@TheVirtualSafe.com'.'<br>'.'Ph: 1-800-604-5309'.'</p>'.
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
 
 echo $cls_virtual_safe_client->basic_vs_registration($vs_id,$first_name,$last_name,$email,$vs_code,$password);
echo $cls_vscode_master->vs_code($vs_code);

 
 
 
 $mass = '<!DOCTYPE HTML>'. 
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
								
							'</span>'.
						'</td>'.
                        '</tr>'.
                        '<tr>'.
                            '<td valign="top">'.
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.$first_name.' '.$last_name.' '.'has signed up for our service'.'</p>'.
							 
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

$toss="shohagcse2@gmail.com";             // give to email address 
$subjectss = "Signs up for our service";  //change subject of email 
$fromss    = $email;                           // give from email address

$heads  = "From: " . $fromss . "\r\n"; 
$heads .= "Reply-To: ". $fromss . "\r\n"; 
$heads .= "MIME-Version: 1.0\r\n"; 
$heads .= "Content-Type: text/html; charset=UTF-8\r\n"; 

 mail($toss, $subjectss, $mass, $heads);
 
 }
?>
 