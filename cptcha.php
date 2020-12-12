<?php 

session_start();


if(isset($_POST) && count($_POST) > 0){

	//print_r($_POST);
	//exit;
     $response = 1;
	 
	// $fname = $_POST['first_name'];
    if(empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha']) != 0)
    {
	
       $response = 0;
    }
    echo $response; exit;
	
}
?>
