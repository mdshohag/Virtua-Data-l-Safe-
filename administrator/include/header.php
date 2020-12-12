<?php
 session_start();
	if(!isset($_SESSION['customer_id'])){
		
		echo "<script>location.href='login.php';</script>";
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
	$view_insurance_agent_deactivated = $cls_insurance_agent->view_insurance_agent_deactive();
	$all_agent_list_view = $cls_insurance_agent->all_agent_list();
	
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
	
	$view_vs_client = $cls_virtual_safe_client->view_vs_client();
	$view_vs_client_deactive = $cls_virtual_safe_client->view_vs_client_list();
	
	$view_vs_client_id = $cls_virtual_safe_client->view_vs_client_id();
	$view_vs_bank = $cls_virtual_safe_client->view_vs_bank();
	
	$cls_company_paytrack = new cls_company_paytrack();
	$view_company_paytrack = $cls_company_paytrack->view_company_paytrack();
	
	$view_vs_new_affliates = $cls_insurance_agent->new_affiliates();
	
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

     
   
   
   
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index.php"><img src="assets/img/tvs.png" alt="" height="60" width="145"></a>
				
				<//?php echo $_SESSION['customer_type']; ?>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Home </span></a></li>
						<li>
							<a href="#subPagesg" data-toggle="collapse" class="collapsed"><i class="fa fa-plus-square"></i><span>Agent Portal <i class="icon-submenu lnr lnr-chevron-left"></i></span></a>
							<div id="subPagesg" class="collapse ">
								<ul class="nav">
									
									<li><a href="all_agent.php" class="">Agent Management</a></li>
									<li><a href="add_agent.php" class="">Agent sign up</a></li>
									<!--<li><a href="add_insurance_company.php" class=""><i class="fa fa-user-plus"></i>Add Insurance Company</a></li>
									<li><a href="manage_insurance_company.php" class=""><i class="fa fa-" aria-hidden="true"></i>Manage Insurance Company</a></li>
									<li><a href="add_agent.php" class=""><i class="fa fa-user-plus"></i>Add Insurance Agent</a></li>
									<li><a href="manage_agent.php" class=""><i class="fa fa-user-"></i>Manage Insurance Agent</a></li>-->
									<!--<li><a href="add_vs_client_insurance.php" class=""><i class="fa fa-user-plus"></i>Virtual Safe Client Insurance</a></li>-->
								</ul>
							</div>
							
						</li>
						<li>
							<a href="#subPagesmy" data-toggle="collapse" class="collapsed"><i class="lnr lnr-bookmark"></i><span>Company Management </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPagesmy" class="collapse ">
								<ul class="nav">
									<li><a href="add_hr_company.php" class=""><i class="fa fa-plus-square"></i>Add Company</a></li>
									<li><a href="show_hr_company.php" class=""><i class="lnr lnr-cog"></i>Manage Company</a></li>
									<!--<li><a href="add_hr_company_roster.php" class=""><i class="fa fa-user-plus"></i>Add Company Roster</a></li>
									<li><a href="show_hr_company_roster.php" class=""><i class="lnr lnr-sun"></i>Manage Company Roster</a></li>-->
									<!--<li><a href="add_virtual_safe_test.php" class=""><i class="fa fa-user-plus"></i>Add (TVS) test </a></li>-->
									<li><a href="add_virtual_safe_test.php" class=""><i class="fa fa-user-plus"></i>Add Company Roster </a></li>
								<!-- delete	<li><a href="add_virtual_safe_lifetime.php" class=""><i class="fa fa-user-plus"></i>Add Company Roster Life Time</a></li>-->
									<li><a href="payment_company.php" class=""><i class="fa fa-user-plus"></i>Company Payment</a></li>
									
								</ul>
							</div>
							
						</li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Individual Portal </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="all_virtual_safe_client.php" class="">Client Profile</a></li>
									<li><a href="add_virtual_safe_client.php" class="">Add New client</a></li>
									<!--<li><a href="add_client_detail.php" class="">Adds client detail</a></li>-->
									
									<!--<li><a href="add_vs_client_location.php" class=""><i class="fa fa-user-plus"></i>Virtual Safe Client Location</a></li>
									<li><a href="add_vs_client_bank.php" class=""><i class="fa fa-user-plus"></i>Virtual Safe Client Bank</a></li>
									<li><a href="show_vs_bank.php" class="">Manage VS Client Bank</a></li>
									<li><a href="add_vs_client_asset.php" class=""><i class="fa fa-user-plus"></i>Virtual Safe Client Asset</a></li>-->
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPageReport" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Management Reports</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPageReport" class="collapse ">
								<ul class="nav">
									<li><a href="compnay_invoice.php" class=""><i class="fa fa-table" ></i>Company Report</a></li>
									<li><a href="agent_report.php" class=""><i class="fa fa-table" ></i>Agent Report</a></li>
									<li><a href="individual_report.php" class=""><i class="fa fa-table" ></i>Individual Report</a></li>
									<li><a href="hr_report.php" class=""><i class="fa fa-table" ></i>HR Report</a></li>
									
								</ul>
							</div>
						</li>
						
						<li>
							<a href="#subPagebpt" data-toggle="collapse" class="collapsed"><i class="fa fa-usd"></i> <span> Payment Amount </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPagebpt" class="collapse ">
								<ul class="nav">
									<li><a href="payment_manage.php" class=""><i class="fa fa-usd"></i> Amount Management </a></li>
									<!--<li><a href="companyfees.php" class=""><i class="fa fa-usd"></i>Company Fees</a></li>
									<li><a href="delinquentannualfees.php" class=""><i class="fa fa-usd"></i>Delinquent Customer Annual Fees</a></li>
									<li><a href="Searchfees.php" class=""><i class="fa fa-usd"></i>Search Accesses Fees</a></li>-->
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPageb" data-toggle="collapse" class="collapsed"><i class="fa fa-bank"></i> <span>Bank Management </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPageb" class="collapse ">
								<ul class="nav">
									<li><a href="add_bank_master.php" class=""><i class="fa fa-plus-square"></i>Add Bank Master</a></li>
									<li><a href="manage_bank_master.php" class=""><i class="fa fa-bank"></i>Manage Bank Master</a></li>
								</ul>
							</div>
						</li>
												
						<li>
							<a href="#subPagebbl" data-toggle="collapse" class="collapsed"><i class="fa fa-cube"></i> <span>Blog Manage</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPagebbl" class="collapse ">
								<ul class="nav">
									<li><a href="adblog.php" class=""><i class="fa fa-user-plus"></i>Add Blog Post</a></li>
									<li><a href="showblog.php" class="">Manage Blog</a></li>
								</ul>
							</div>
						</li>
						<!--<li>
							<a href="#subPagebvs" data-toggle="collapse" class="collapsed"><i class="fa fa-cube"></i> <span>VS Code Management </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPagebvs" class="collapse ">
								<ul class="nav">
								<li><a href="add_vs_code_master.php" class=""><i class="fa fa-user-plus"></i>Virtual Safe Code Master</a></li>
								<li><a href="show_vs_code_master.php" class=""><i class="fa fa-cogs"></i>Show Virtual Safe Code Master</a></li>
								</ul>
							</div>
						</li>-->
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
						
						
						<!--	<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="badge bg-danger"> 0  </span>
								</a>
								<ul class="dropdown-menu notifications">
								
							
								
							
									<li><a href="#" class="more">See all notifications</a></li>
									
									
									
								</ul>
							</li>-->
						<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Basic Use</a></li>
									<li><a href="#">Working With Data</a></li>
									<li><a href="#">Security</a></li>
									<li><a href="#">Troubleshooting</a></li>
								</ul>
						</li>-->
							<li><a href="#" id="signouts"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Profile Setting</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<!--<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#" id="signouts"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>-->
						
						</ul>
					</div>
				</div>
			</nav>