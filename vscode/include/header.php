<?php
 session_start();
	if(!isset($_SESSION['customer_id'])){
		
		echo "<script>location.href='../index.php';</script>";
	}
	
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	
	$cuid = $_SESSION['customer_id'];
	
	$view_vs_client = $cls_virtual_safe_client->view_vs_client_cuid($cuid);
	
	$view_vs_insurance = $cls_virtual_safe_client->select_vs_client_insurance($cuid);
	$view_vs_asset = $cls_virtual_safe_client->view_vs_client_asset($cuid);
	$view_vs_clintbank = $cls_virtual_safe_client->view_vs_client_bank($cuid);
	$view_vs_testament = $cls_virtual_safe_client->view_vs_testament_id($cuid);
	$view_vs_authorized = $cls_virtual_safe_client->view_vs_authorized_id($cuid);
	
	$view_vs_client_id = $cls_virtual_safe_client->view_vs_client_id();
	

	$cls_payment_type = new cls_payment_type();
	$view_amount = $cls_payment_type->view_payment_amount();
?>



<!doctype html>
<html lang="en">

<head>
	<title>The Virtual Safe</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/">
	<link rel="stylesheet" href="alert/alertify.min.css">
   <link rel="stylesheet" href="alert/default.min.css">
   
   
      
  <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script src="https://docraptor.com/docraptor-1.0.0.js"></script>
<script>

  
    function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
   
   
   
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrappers">
		<!-- SIDEBAR -->
		
		
		
		
		<!-- MAIN -->
		<div class="mains">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
					<input style="color:#003366" type="button" onclick="printDiv('printableArea')" value="print" />
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
					
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" id="signouts"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
						</ul>
					</div>
				</div>
			</nav>