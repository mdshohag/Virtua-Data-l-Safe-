<?php
session_start();
require_once('functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	
if(isset($_POST) && count($_POST) > 0){
    $response = 1;
	
		
    if(empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha']) != 0)
    {
        $response = 0;
    }
	
	
		
    echo $response; exit;
}
?>
