<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_insurance_agent = new cls_insurance_agent();
	
	$first_name = htmlspecialchars(ucwords ($_REQUEST['fname']), ENT_QUOTES, 'UTF-8');
	$last_name = htmlspecialchars(ucwords ($_REQUEST['lname']), ENT_QUOTES, 'UTF-8');
	$address = htmlspecialchars($_REQUEST['address'], ENT_QUOTES, 'UTF-8');
	//$companycode = htmlspecialchars($_REQUEST['companycode'], ENT_QUOTES, 'UTF-8');
	$email = htmlspecialchars($_REQUEST['email_name'], ENT_QUOTES, 'UTF-8');
	//$password = htmlspecialchars($_REQUEST['password_u'], ENT_QUOTES, 'UTF-8');
	
	$insurance_agent_id = "$_POST[insurance_agent_id]";
	
	
	$password = md5(rand('1111','9999'));
	$id_code = uniqid();
	
//$sender = "liton@dcitltd.com";
//$mobile = $phone;
//$complain = "These are your requested PIN to be member";
//$messages = $imp;

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
                   '<table style="border:1px solid #e0e0e0" bgcolor="FFFFFF" border="0" cellpadding="10" cellspacing="0" width="660">'.
                        
					'<tbody>'.
					'<tr>'.
					   ' <td valign="top">'.
							
							'<span>'.
								'<p>Hello '.$first_name.' '.$last_name.'<p>'.
							'</span>'.
						'</td>'.
                        '</tr>'.
                        '<tr>'.
                            '<td valign="top">'.
                                '<h1 style="font-size:22px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Please active Your Account , just click following link'.
								'</h1>'.
                                '<p style="font-size:12px;line-height:16px;margin:0 0 8px 0">'.''.'</p>'.
								
								'<a style="font-size:20px;" href="https://thevirtualsafe.com/demo/verifyagent.php?id_code='.$id_code.'" target="_blank" >'.
							'Click HERE to Activate'.
							'</a>'.
                            '</td>'.
                        '</tr>'.
                        '<tr>'.
                           '<td align="center" bgcolor="#FFFFFF">'.'<center>'.'<p style="font-size:12px;margin:0">'.'© 2017 The Virtual Safe'.'</p>'.'</center>'.'</td>'.
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
 
 echo $cls_insurance_agent->edit_agent_registration($first_name,$last_name,$address,$email,$password,$id_code,$insurance_agent_id);

?>