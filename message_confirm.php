<?php 
include('include/header.php');

$name = htmlspecialchars($_GET['names'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_GET['emails'], ENT_QUOTES, 'UTF-8');
$messages = htmlspecialchars($_GET['messagess'], ENT_QUOTES, 'UTF-8');

	
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
								'<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">Name: '.$name.','.'<p>'.
							'</span>'.
						'</td>'.
                        '</tr>'.  
                        '<tr>'.
                            '<td valign="top">'.
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.$messages.'</p>'.
							 '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'© 2017 The Virtual Safe'.'</p>'.
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



//$to= "info@thevirtualsafe.com"; // give to email address 

$to= "support@thevirtualsafe.com"; // give to email address 
$subject = "Client Contact Message";  //change subject of email 
$from    = $email;                           // give from email address

$headers  = "From: " . $from . "\r\n"; 
$headers .= "Reply-To: ". $from . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; 

 mail($to, $subject, $message, $headers);
 
 
 
 
 
 
 
 
 //echo $cls_insurance_agent->affiliate_agent_registration($first_name,$last_name,$email,$password,$id_code);

 
 $mess = '<!DOCTYPE HTML>'. 
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
								'<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">Dear  '.$name.'<p>'.
							'</span>'.
						'</td>'.
                        '</tr>'.  
                        '<tr>'.
                            '<td valign="top">'.
                               
                                '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Thank you for contacting The Virtual Safe, we have received your message and will respond to your inquiry within 48 hours. '.'</p>'.
							 '<p style="font-size:19px;font-weight:normal;line-height:22px;margin:0 0 11px 0">'.'Regards'.'<br>'.'
The Virtual Safe Team'.'<br>'.'Ashfak,'.'</p>'.
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

$tos= $email; // give to email address 
$subjects = "The Virtual Safe Respond Message";  //change subject of email 
$froms    = "info@thevirtualsafe.com";                           // give from email address

$headerss  = "From: " . $froms . "\r\n"; 
$headerss .= "Reply-To: ". $froms . "\r\n"; 
$headerss .= "MIME-Version: 1.0\r\n"; 
$headerss .= "Content-Type: text/html; charset=UTF-8\r\n"; 

 mail($tos, $subjects, $mess, $headerss);
 
 
include('include/footer.php');
?>
 <script>
  window.location.assign('contact.php');
 </script>