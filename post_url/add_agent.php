<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_insurance_agent = new cls_insurance_agent();
	
	$first_name = htmlspecialchars(ucwords ($_REQUEST['first_name']), ENT_QUOTES, 'UTF-8');
	$last_name = htmlspecialchars(ucwords ($_REQUEST['last_name']), ENT_QUOTES, 'UTF-8');
	//$address = htmlspecialchars($_REQUEST['address'], ENT_QUOTES, 'UTF-8');
	$email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
	$ss_tax_id = htmlspecialchars($_REQUEST['ss_tax_id'], ENT_QUOTES, 'UTF-8');
	$insurance_company = htmlspecialchars($_REQUEST['insurance_company'], ENT_QUOTES, 'UTF-8');
	$agents_license = htmlspecialchars($_REQUEST['agents_license'], ENT_QUOTES, 'UTF-8');
	$password = md5($_REQUEST['password']);
	$id_code = uniqid();
	
	$q7 = $cls_insurance_agent->check_eamil($email);
	
	$r7 = $q7->fetch_assoc();
	$agent_email = $r7['agent_email'];
	
if($email == $agent_email){
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
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Thank you for partnering with The Virtual Safe. Your account is pending verification. You will be notified via email upon approval.'.
								' <a style="font-size:20px;" href="https://thevirtualsafe.com/demo/verifyagentactive.php?id_code='.$id_code.'" target="_blank" >'.
							'"Click Here"'.
							'</a>'.
							' to create your profile. '.'</p>'.
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
 
 echo $cls_insurance_agent->affiliate_agent_registration($first_name,$last_name,$ss_tax_id,$insurance_company,$agents_license,$email,$password,$id_code);

 
 
 $mss = '<!DOCTYPE HTML>'. 
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
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Agents awaits for approval'.'</p>'.
							 
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

$tos="dsdnelson@yahoo.com";             // give to email address 
$subjects = "Status Notification";  //change subject of email 
$froms    = $email;                           // give from email address

$headerss  = "From: " . $froms . "\r\n"; 
$headerss .= "Reply-To: ". $froms . "\r\n"; 
$headerss .= "MIME-Version: 1.0\r\n"; 
$headerss .= "Content-Type: text/html; charset=UTF-8\r\n"; 

 mail($tos, $subjects, $mss, $headerss);
 
 
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
 