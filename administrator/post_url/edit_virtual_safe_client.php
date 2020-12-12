<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$first_name = htmlspecialchars(ucwords ($_REQUEST['fname']), ENT_QUOTES, 'UTF-8');
	$last_name = htmlspecialchars(ucwords ($_REQUEST['lname']), ENT_QUOTES, 'UTF-8');
	
	$email = htmlspecialchars($_REQUEST['email_name'], ENT_QUOTES, 'UTF-8');
	$address = htmlspecialchars($_REQUEST['address'], ENT_QUOTES, 'UTF-8');
	
	$vs_client_id = "$_POST[vs_client_id]";
	
	$vs_client_id = "$_POST[vs_client_id]";
	
	//$password = md5($_REQUEST['password_u']);
	
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


echo $cls_virtual_safe_client->vs_client_update($first_name,$last_name,$email,$address,$password, $vs_client_id);
	
	


?>