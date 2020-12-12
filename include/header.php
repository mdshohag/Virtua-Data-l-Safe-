<?php
	
	
	require_once('functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	$cls_member_login = new cls_member_login();
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	$cls_insurance_agent = new cls_insurance_agent();
	$cls_payment_type = new cls_payment_type();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<base href="http://localhost/benefits_hts/">
<meta charset="utf-8">
<title>The Virtual Safe</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="benefit" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>
	<!-- boxed bg -->
<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="alert/alertify.min.css">
<link rel="stylesheet" href="alert/default.min.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124063100-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-124063100-1');
</script>

</head>
<body>



<div id="wrapper">
	<!-- start header -->
	<header>
			
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brands" href="index"><img src="img/stvs.png" alt="" width="140" height="112" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
							<a href="index">Home<!--<i class="fa fa-home fa-2x" aria-hidden="true"></i>--></a>
						</li>
						<li><a href="service">Service</a></li>
						  <li><a href="search">Search</a></li>
						 <li><a href="about-us">About Us</a></li>
						  <li><a href="contact">Contact Us</a></li>
						  <li><a href="blog">Blog</a></li>
						  <li><a href="affiliates">Affiliates</a></li>
						  
                      
                    </ul>
                </div>
            </div>
        </div>
	</header>
