<?php 
include('include/header.php');

  
 if(isset($_POST['submit'])){

$firstname = $_POST['firstnames'];
$lastname = $_POST['lastnames'];
$x_amount = $_POST['x_amount'];
$clint_id = $_POST['clint_id'];
$cardNumber = $_POST['cardNumbers'];
$cardExpiry = $_POST['cardExpiry'];
$cardCVC = $_POST['cardCVC'];
$finame = $_POST['finame'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$address = $_POST['address'];

//test: 5wG8698PgaT
//test: 7uT8rvq42Y6TW73W
$dataRQ['merchantAuthentication']['name']			= '5wG8698PgaT'; // rel:  22yC6nF2z75 
$dataRQ['merchantAuthentication']['transactionKey']	= '7uT8rvq42Y6TW73W'; //rel: 7V2X4rd68BG37pjC 
$dataRQ['refId']									= $clint_id;
$dataRQ['transactionRequest']['transactionType']    = 'authCaptureTransaction';
$dataRQ['transactionRequest']['amount']    			= $x_amount;
$dataRQ['transactionRequest']['payment']['creditCard']['cardNumber']    			= $cardNumber;
$dataRQ['transactionRequest']['payment']['creditCard']['expirationDate']    		= $cardExpiry;
$dataRQ['transactionRequest']['payment']['creditCard']['cardCode']    				= $cardCVC;
$dataRQ['transactionRequest']['billTo']['firstName']    		= $finame;
$dataRQ['transactionRequest']['billTo']['lastName']    			= $lname;
//$dataRQ['transactionRequest']['billTo']['company']    			= 'Ellen';
$dataRQ['transactionRequest']['billTo']['address']    			= $address;
$dataRQ['transactionRequest']['billTo']['city']    				= $city;
$dataRQ['transactionRequest']['billTo']['state']    			= $state;
$dataRQ['transactionRequest']['billTo']['zip']    				= $zip;
$dataRQ['transactionRequest']['billTo']['country']    			= $country;

$createTransactionRequest['createTransactionRequest']=$dataRQ;

$request =  json_encode($createTransactionRequest);

   $headers = array("Content-Type:application/json",
                            "Accept:application/json",
                            "Content-Encoding: UTF-8",                           
                            );
		// PHP cURL  for https connection with auth
		
		// $url ='https://api.authorize.net/xml/v1/request.api';
		
        $url ='https://apitest.authorize.net/xml/v1/request.api';
	      $ch2 = curl_init();
	      curl_setopt($ch2, CURLOPT_URL, $url);
	      curl_setopt($ch2, CURLOPT_TIMEOUT, 180);
	      curl_setopt($ch2, CURLOPT_HEADER, 0);
	      curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
	      curl_setopt($ch2, CURLOPT_POST, 1);
	      curl_setopt($ch2, CURLOPT_ENCODING, ''); // add this one
	      curl_setopt($ch2, CURLOPT_POSTFIELDS, $request);	      
	      curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE);	  //curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, TRUE);    
	      curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);     //curl_setopt($ch2, CURLOPT_CAINFO, "/path/to/cacert.pem");      
	      curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);
	      curl_setopt($ch2, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    	  curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
	      
	      $response = curl_exec($ch2);
	      $error2 = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
		  curl_close($ch2);  
		 $response = substr($response, 3);

		$response = json_decode($response);
		//echo $response;exit;
		//print "<pre>";print_r($response);
		//exit;
	if($response)
	{
		//header("Location:http://localhost/benefits_hts/member/success.php".$x_amount);
		// echo "Return code is {$error2} \n".curl_error($ch2);
		//echo("<script>location.href = 'http://localhost/benefits_hts/member/index.php';</script>");
		//exit;
		//echo $response->messages->resultCode;
		//if(isset($response->messages->resultCode) && $response->messages->resultCode=='Ok' )
		if(isset($response->transactionResponse->responseCode) && $response->transactionResponse->responseCode=='1' )
		{
				//echo $response->messages->message[0]->text;
			//	echo $response->transactionResponse->messages[0]->description;
				//exit;
				if(isset($response->messages->message[0]->code) && $response->messages->message[0]->code=='I00001')
				//if(isset($response->transactionResponse->messages[0]->code) && $response->transactionResponse->messages[0]->code=='1')
				{
					//echo $response->messages->message[0]->text;
					//	echo $response->transactionResponse->messages[0]->description;
				      // exit;
					if(isset($response->transactionResponse->transId) && $response->transactionResponse->transId > 0)
					{
						 //  echo $response->transactionResponse->transId;
						  // exit;
						//access_search.php?accessid="+access_id +"&vscid="+vsc_id
						//echo("<script>location.href = 'http://localhost/benefits_hts/success.php/client/$clint_id/amount/$x_amount/firstname/$firstname/lastname/$lastname';</script>");
						echo("<script>location.href = 'http://localhost/benefits_hts/success.php?client=$clint_id&amount=$x_amount&firstname=$firstname&lastname=$lastname';</script>");
					}
					else
					{
					//echo"not";
					echo("<script>location.href = 'http://localhost/benefits_hts/cancel.php';</script>");
					}
					
				}
				else
				{
				//echo"nott";
				echo("<script>location.href = 'http://localhost/benefits_hts/cancel.php';</script>");
				}
		}
		else
		{
		//echo"nottt";
	echo("<script>location.href = 'http://localhost/benefits_hts/cancel.php';</script>");
		}
		
	}
	else{
	
	//echo "no";
		
		echo("<script>location.href = 'http://localhost/benefits_hts/cancel.php';</script>");
		//exit;
	}

}
  

	
?>
<div class="AuthorizeNetSeal"> <script type="text/javascript" language="javascript">var ANS_customer_id="fcd92776-6a68-4733-8796-e168da0a488e";</script> <script type="text/javascript" language="javascript" src="https://verify.authorize.net:443/anetseal/seal.js" ></script> </div>
										
<?php
include('include/footer.php');

?>