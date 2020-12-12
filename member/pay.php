<?php 

if(isset($_POST['submit'])){

$x_amount = $_POST['x_amount'];
$clint_id = $_POST['clint_id'];
$acountname = $_POST['acountname'];
$cardNumber = $_POST['cardNumbers'];
$cardExpiry = $_POST['cardExpiry'];
$cardCVC = $_POST['cardCVC'];

$dataRQ['merchantAuthentication']['name']			= '5wG8698PgaT';
$dataRQ['merchantAuthentication']['transactionKey']	= '7uT8rvq42Y6TW73W';
$dataRQ['refId']									= $clint_id;
$dataRQ['transactionRequest']['transactionType']    = 'authCaptureTransaction';
$dataRQ['transactionRequest']['amount']    			= $x_amount;
$dataRQ['transactionRequest']['payment']['creditCard']['cardNumber']    			= $cardNumber;
$dataRQ['transactionRequest']['payment']['creditCard']['expirationDate']    		= $cardExpiry;
$dataRQ['transactionRequest']['payment']['creditCard']['cardCode']    				= $cardCVC;
$dataRQ['transactionRequest']['billTo']['firstName']    		= 'Ellen';
$dataRQ['transactionRequest']['billTo']['lastName']    			= 'Ellen';
$dataRQ['transactionRequest']['billTo']['company']    			= 'Ellen';
$dataRQ['transactionRequest']['billTo']['address']    			= 'Ellen';
$dataRQ['transactionRequest']['billTo']['city']    				= 'Ellen';
$dataRQ['transactionRequest']['billTo']['state']    			= 'Ellen';
$dataRQ['transactionRequest']['billTo']['zip']    				= 'Ellen';
$dataRQ['transactionRequest']['billTo']['country']    			= 'Ellen';

$createTransactionRequest['createTransactionRequest']=$dataRQ;

$request =  json_encode($createTransactionRequest);
/*
"creditCard": {
				"cardNumber": "5424000000000015",
				"expirationDate": "2020-12",
				"cardCode": "999"
			}
 */

    $headers = array("Content-Type:application/json",
                            "Accept:application/json",
                            "Content-Encoding: UTF-8",                           
                            );
		// PHP cURL  for https connection with auth
        $url ='https://apitest.authorize.net/xml/v1/request.api';
	      $ch2 = curl_init();
	      curl_setopt($ch2, CURLOPT_URL, $url);
	      curl_setopt($ch2, CURLOPT_TIMEOUT, 180);
	      curl_setopt($ch2, CURLOPT_HEADER, 0);
	      curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
	      curl_setopt($ch2, CURLOPT_POST, 1);
	      curl_setopt($ch2, CURLOPT_ENCODING, ''); // add this one
	      curl_setopt($ch2, CURLOPT_POSTFIELDS, "$request");	      
	      curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE);	      
	      curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);          
	      curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);
	      curl_setopt($ch2, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    	  curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
	      
	      $response = curl_exec($ch2);
	      $error2 = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
	      curl_close($ch2);  
		 $response = substr($response, 3);

		$response = json_decode($response);

		print "<pre>";print_r($response);

	if($response){
		header("Location:http://localhost/benefits_hts/member/success.php?amount=".$x_amount);
	}
	else{
		header("Location:http://localhost/benefits_hts/member/index.php");
	}

}


?>