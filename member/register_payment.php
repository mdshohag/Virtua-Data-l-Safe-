<?php include('include/header.php'); 

$agnt_id = $_SESSION['customer_id'];

if(isset($_POST['submit'])){

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
		
      //  $url ='https://api.authorize.net/xml/v1/request.api';
	   
	    $url ='https://apitest.authorize.net/xml/v1/request.api';
	   
	      $ch2 = curl_init();
	      curl_setopt($ch2, CURLOPT_URL, $url);
	      curl_setopt($ch2, CURLOPT_TIMEOUT, 180);
	      curl_setopt($ch2, CURLOPT_HEADER, 0);
	      curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
	      curl_setopt($ch2, CURLOPT_POST, 1);
	      curl_setopt($ch2, CURLOPT_ENCODING, ''); // add this one
	      curl_setopt($ch2, CURLOPT_POSTFIELDS, $request);	      
	      curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE);	      //curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE);
		 // curl_setopt($ch2, CURLOPT_CAINFO, dirname(dirname(__FILE__)) . '/path/cacert.pem');
		 // curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 2); //for production, set value to 2
	      curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);          
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
		//echo $response->transactionResponse->responseCode;
		//echo $response->messages->resultCode;
		//exit;
		//if(isset($response->messages->resultCode) && $response->messages->resultCode=='Ok' )
		if(isset($response->transactionResponse->responseCode) && $response->transactionResponse->responseCode=='1' )
		{
				//echo $response->messages->message[0]->text;
				if(isset($response->messages->message[0]->code) && $response->messages->message[0]->code=='I00001')
				{
					//echo $response->messages->message[0]->text;
					if(isset($response->transactionResponse->transId) && $response->transactionResponse->transId > 0)
					{
					//	echo $response->transactionResponse->transId;
						echo("<script>location.href = 'http://localhost/benefits_hts/member/success.php?amount=$x_amount';</script>");
					}
					else
					{
					//echo"not";
					echo("<script>location.href = 'http://localhost/benefits_hts/member/cancel.php';</script>");
					}
					
				}
				else
				{
				//echo"nott";
				echo("<script>location.href = 'http://localhost/benefits_hts/member/cancel.php';</script>");
				}
		}
		else
		{
		//echo"nottt";
		echo("<script>location.href = 'http://localhost/benefits_hts/member/cancel.php';</script>");
		}
		
	}
	else{
	
	//echo "no";
		
		echo("<script>location.href = 'http://localhost/benefits_hts/member/cancel';</script>");
		//exit;
	}

}


$view_amount_annual = $cls_payment_type->view_payment_annual_amount();
$amount = $view_amount_annual->fetch_assoc();
$annual = $amount['amount_fees'];

?>


			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							
							<p class="panel-subtitle">
							<?php
								 
							?>							
							</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 ">
							
								<div class="tab-content">
								
									
								<div class="payment">
									<div class="panel-heading display-table" >
										<div class="row display-tr" >
										
											<h3 class="panel-title display-td" >
										<!-- (c) 2005, 2018. Authorize.Net is a registered trademark of CyberSource Corporation --> <div class="AuthorizeNetSeal"> <script type="text/javascript" language="javascript">var ANS_customer_id="fcd92776-6a68-4733-8796-e168da0a488e";</script> <script type="text/javascript" language="javascript" src="https://verify.authorize.net:443/anetseal/seal.js" ></script> </div>
										<br>
											BILLING INFORMATION  </h3>
											
											<div class="display-td" >                            
												<center><img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png"><center>
											</div>
										</div>                    
									</div>
									
								
									<form method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-xs-6">
											<div class="form-group">
											<label for="cardExpiry"><span class="hidden-xs">Card Holder First Name</span></label>
												<input type="text" class="form-control" name="finame" placeholder="First Name" autocomplete="first_name" required/>
											</div>
											</div>
											<div class="col-xs-6 pull-right">
												<div class="form-group">
													<label for="cardCVC"><span class="hidden-xs">Card Holder Last name</span></label>
													<input type="text" class="form-control" name="lname" placeholder="Last Name" autocomplete="last_name" required/>
												</div>
											</div>
										</div>
										<div class="row">
										<div class="col-xs-12">
										<div class="form-group">
											<label for="cardNumber">CARD NUMBER</label>
										<div class="input-group">
											<input type="hidden" id="x_amount" name="x_amount" value="<?php echo $annual; ?>">
											<input type="hidden" id="clint_id" name="clint_id" value="<?php echo $agnt_id; ?>">
											<input type="text" class="form-control" name="cardNumbers" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
											<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
										</div>
										</div>                            
										</div>
										</div>
										<div class="row">
										<div class="col-xs-6">
										<div class="form-group">
										<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
											<input type="text" class="form-control" name="cardExpiry" placeholder="yyyy-mm" autocomplete="cc-exp" required />
										</div>
										</div>
										<div class="col-xs-6 pull-right">
											<div class="form-group">
												<label for="cardCVC">CV CODE</label>
												<input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />
											</div>
										</div>
										</div>
										<div class="row">
										<div class="col-xs-12">
										<div class="form-group">
											<label for="cardNumber">Billing Address</label>
											<div class="input-group">
												
												<textarea class="form-control" name="address" rows="3" required></textarea>
												<span class="input-group-addon"><i class="fa fa-crsedit-card"></i></span>
											</div>
										</div>                            
										</div>
										</div>
									
									<div class="row">
										<div class="col-xs-6">
										<div class="form-group">
										<label for="cardExpiry"><span class="hidden-xs">City</span></label>
											<input type="text" class="form-control" name="city" placeholder="city" autocomplete="city" required/>
										</div>
										</div>
										<div class="col-xs-6 pull-right">
											<div class="form-group">
												<label for="cardCVC">State</label>
												<input type="text" class="form-control" name="state" placeholder="state" autocomplete="state" required/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
										<div class="form-group">
										<label for="cardExpiry"><span class="hidden-xs">Zip Code</span></label>
											<input type="text" class="form-control" name="zip" placeholder="zip" autocomplete="zip"  />
										</div>
										</div>
										<div class="col-xs-6 pull-right">
											<div class="form-group">
												<label for="cardCVC">Country</label>
												<input type="text" class="form-control" name="country" placeholder="country" autocomplete="country" required/>
											</div>
										</div>
									</div>
									
										<div class="row">
										<div class="col-xs-6">
										<button class="btn btn-success btn-block" name="submit" type="submit">Submit</button>
										</div>
										<div class="col-xs-6 pull-right">
											<div class="form-group">
												
												<input class="form-control" value="$<?php echo $annual; ?>" readonly />
											</div>
										</div>
									</div>
										<!--<script type="text/javascript" src="https://js.authorize.net/v1/Accept.js" charset="utf-8"> </script>--->
										
									</form>	
									
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('include/footer.php'); ?>