<?php include('include/header.php');


 ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><center>Annual Individual Client List</center></h3>
							<div class="panel-subtitle">
								 <span class="right"> <a href="annual_individual_report_print.php" target="_blank" class="btn btn-danger">PRINT</a> </span>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<table>
									<tr>
									<td><a href="individual_report.php" class="btn btn-warning">&nbsp;&nbsp;All Individual Report &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
									</tr>
									<tr>
									<td><a href="annual_individual_report.php" class="btn btn-success">Annual Individual Report&nbsp;&nbsp; </a></td>
									</tr>
									<tr>
									<!-- delete<td><a href="lifetime_individual_report.php" class="btn btn-primary">LifeTime Individual Report </a></td>-->
									</tr>
									
								</table><br>		
							 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Serial NO</th>
										<th>Full Name</th>
										<th>Email Address</th>
										<th>Product Type</th>
										<th>Valid From</th>
										<th>Valid To</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										$i = 1;
										
										$cls_virtual_safe_client = new cls_virtual_safe_client();
										$view_individual = $cls_virtual_safe_client->annual_individual_client_report();
										while($view_data = $view_individual->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $view_data['client_first_name']; ?> <?php echo $view_data['client_last_name']; ?></td>
										<td><?php echo $view_data['client_email']; ?></td>
									
										<td><?php echo $view_data['status']; ?></td>
										<td><?php echo $view_data['valid_from']; ?></td>
										<td><?php echo $view_data['valid_to']; ?></td>
										
										<td>
										<a href="view_tvs.php?client_id=<?php echo $view_data['client_id']; ?>" class="btn btn-success btn-sm">View Details </a>
										</td>
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
			<!-- END MAIN CONTENT -->
<?php include('include/footer.php'); ?>