<?php

 session_start();
	if(!isset($_SESSION['customer_id'])){
		
		echo "<script>location.href='../index';</script>";
	}
	
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	$cls_insurance_company = new cls_insurance_company();
	$view_insurance_company = $cls_insurance_company->view_insurance_company();
	$cls_bank_master = new cls_bank_master();
	$view_bank_master = $cls_bank_master->view_bank_master();
	
	$cls_insurance_agent = new cls_insurance_agent();
	$view_insurance_agent_id = $cls_insurance_agent->insurance_agent_id();
	
	$cls_hr_company = new cls_hr_company();
	$view_tbl_hr_company = $cls_hr_company->view_tbl_hr_company();
	
	 $vs_code_Company = "Company";
	$view_company = $cls_hr_company->view_vscode_type($vs_code_Company);
	
	
	$cls_hr_company_roster = new cls_hr_company_roster();
	$view_tbl_hr_company_roster = $cls_hr_company_roster->view_tbl_hr_company_roster();
	
	$cls_employee_roster = new cls_employee_roster();
	$view_tbl_employee_roster = $cls_employee_roster->view_tbl_employee_roster();
	$cls_vscode_master = new cls_vscode_master();
	$view_vscode_master = $cls_vscode_master->view_vscode_master();

	$view_vscode = $cls_vscode_master->view_vscode_master_all();
	
	$vscode_data = $view_vscode->fetch_assoc();
	
	
	 $vs_code = "Client";
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	$view_vs_clients = $cls_virtual_safe_client->view_vs_code($vs_code);
	
	$view_hr_company_id = $cls_virtual_safe_client->view_hr_company();
	
	$cuid = $_SESSION['customer_id'];
	
	$view_vs_client = $cls_virtual_safe_client->view_vs_client_cuid($cuid);
	
	$view_vs_insurance = $cls_virtual_safe_client->view_vs_client_insurance($cuid);
	$view_vs_insurance_new = $cls_virtual_safe_client->view_vs_client_insurance_new($cuid);
	$view_vs_asset = $cls_virtual_safe_client->view_vs_client_asset($cuid);
	$view_vs_clintbank = $cls_virtual_safe_client->view_vs_client_bank($cuid);
	$view_vs_testament = $cls_virtual_safe_client->view_vs_testament_id($cuid);
	$view_vs_authorized = $cls_virtual_safe_client->view_vs_authorized_id($cuid);
	
	$view_vs_client_id = $cls_virtual_safe_client->view_vs_client_id();
	$view_vs_bank = $cls_virtual_safe_client->view_vs_bank();
	
	$cls_company_paytrack = new cls_company_paytrack();
	$view_company_paytrack = $cls_company_paytrack->view_company_paytrack();
	
	
	$agnt_id = $_SESSION['customer_id'];
	
	$agnt_data_id = $cls_insurance_agent->information_agent($agnt_id);
 
	$users_data = $agnt_data_id->fetch_assoc();
	$cls_payment_type = new cls_payment_type();
	$view_amount = $cls_payment_type->view_payment_annual();
	$view_renewal = $cls_payment_type->view_payment_renewal();
?>



<!doctype html>
<html lang="en">

<head>
<base href="http://localhost/benefits_hts/member/">
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

     
   
   
   
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index"><img src="assets/img/tvs.png" alt="" height="60" width="145"></a>				
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index" class="active"><i class="lnr lnr-home"></i> <span>Home </span></a></li>
						
						<?php
						
						if($_SESSION['customer_type']=='agent'){
													
						?>
						
						<?php 
							if($users_data['status'] == 'Pending'){
										
							?>
							
						<li class="agent">
							<a href="#subPagesg" data-toggle="collapse" class="collapsed"><i class="fa fa-cog"></i><span>Agent Profile<i class="icon-submenu lnr lnr-chevron-left"></i></span></a>
							
						</li>
						<li class="agent">
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Manage Clients </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							
						</li>
						
							<?php 
							} else{
							?>
							<li>
							<a href="#subPagesg" data-toggle="collapse" class="collapsed"><i class="fa fa-cog"></i><span>Agent Profile<i class="icon-submenu lnr lnr-chevron-left"></i></span></a>
							<div id="subPagesg" class="collapse ">
								<ul class="nav">
									<li><a href="agent_view" class=""><i class="fa "></i>View Profile </a></li>
									
									<li><a href="password_change" class=""><i class="fa fa-setting"></i>Password Change</a></li>
									
								</ul>
							</div>
							
						</li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Manage Clients </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<!--<li><a href="add_virtual_safe_client" class="">New client signup </a></li>-->
									<li><a href="client_singup" class="">Enter New Client</a></li>
									<li><a href="client_detail" class="">List of all clients</a></li>
									<!--<li><a href="show_virtual_safe_client" class="">List of all clients</a></li>-->
									<!--<li><a href="add_client_detail" class="">Add clients detail</a></li>-->
									
								</ul>
							</div>
						</li>
											
							<?php } ?>
						
							<?php
						} else{
						?>
						<li><a href="client_password" class=""><i class="fa fa-setting"></i>Password Change</a></li>
						
						<?php
						}
						?>
					</ul>
				</nav>
			</div>
			
		</div>
		<!-- END SIDEBAR -->
		
		
		
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
					<form class="navbar-form navbar-left hidden-xs">
							
						
							
						</form>
						
						<ul class="nav navbar-nav navbar-right">
						
						<li><a href="#" id="signouts"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
						
						</ul>
					</div>
				</div>
			</nav>