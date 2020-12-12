<?php include('include/header.php'); ?>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
		<div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<center><h1 class="panel-title">Welcome to Admin Home</h1></center>
								
								<table>
									<tr>
										<td>
											<!--<p class="panel-subtitle"><img src="image/<//?php echo $photo; ?>" width="100" height="120"></p>-->
										</td>
										<td style="padding-left:20px">
										
											<p class="panel-subtitle"><?php echo $_SESSION['customer_type']; ?></p>
											<p class="panel-subtitle">User Name : <?php echo $_SESSION['customer_name']; ?></p>
											<p class="panel-subtitle">Email : <?php echo $_SESSION['customer_username']; ?></p>
										
										</td>
									</tr>
								</table>
								
							<h4></h4>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									
							</div>
							<!--<div class="row">
							
							</div>-->
						</div>
					</div>
					
					<div class="row">
					
					</div>
				
				</div>
			</div>
			</div>
			<!-- END MAIN CONTENT -->
			
<?php include('include/footer.php'); ?>