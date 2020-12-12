<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<center><h1 class="panel-title">HR REPORT</h1></center>
						<div class="panel-subtitle">
							<span class="right"> <a href="hr_report_print.php" target="_blank" class="btn btn-danger">PRINT</a> </span>
						</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							
								<center><h1 class="panel-title">All Information</h1></center>
							 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Company Name</th>
                                        <th>Agent Name</th>
                                        <th>Agent Email</th>
										<th>Client Name</th>
										<th>Client Email</th>
										<th>Product Type</th>
										<th>Valid From</th>
										<th>Valid To</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$SL = 1;
										$cls_virtual_safe_client = new cls_virtual_safe_client();
										$view_tbl_hr = $cls_virtual_safe_client->view_tbl_hr_report();
										while($view_row = $view_tbl_hr->fetch_assoc()){
									?>
									<tr>
									<td><?php echo $SL++; ?></td>
									<td><?php echo $view_row['company_name']; ?></td>
									<td><?php echo $view_row['first_name']; ?> <?php echo $view_row['last_name']; ?></td>
									<td><?php echo $view_row['agent_email']; ?></td>
									<td><?php echo $view_row['client_first_name']; ?> <?php echo $view_row['client_first_name']; ?></td>
									<td><?php echo $view_row['client_email']; ?></td>
									<td><?php echo $view_row['status']; ?></td>
									<td><?php echo $view_row['valid_from']; ?></td>
									<td><?php echo $view_row['valid_to']; ?></td>
									
									</tr>
									
									<?php } ?>
                                </tbody>
                            </table>
								
						</div>
						
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
		</div>
	</div>
<?php include('include/footer.php'); ?>
