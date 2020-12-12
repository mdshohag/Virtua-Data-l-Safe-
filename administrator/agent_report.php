<?php include('include/header.php');


 ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><center>Active All Agent Report</center></h3>
							<div class="panel-subtitle">
									<span class="right"> <a href="agent_report_print.php" target="_blank" class="btn btn-danger">PRINT</a> </span>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									
							 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Serial NO</th>
										<th>Full Name</th>
										<th>Address</th>
										<th>Email Address</th>
										<!-- delete <th>Lifetime Client</th>-->
										<th>Annual Client</th>
										<th>Total Client</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										$i = 1;
										
										$cls_insurance_agent = new cls_insurance_agent();
										$view_insurance_agent = $cls_insurance_agent->insurance_agent_report();
										while($view_data = $view_insurance_agent->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $view_data['first_name']; ?> <?php echo $view_data['last_name']; ?></td>
										<td><?php echo $view_data['agent_address']; ?></td>
									
										<td><?php echo $view_data['agent_email']; ?></td>
										<!-- delete<td><//?php echo $view_data['LifetimeTotal']; ?></td>-->
										<td><?php echo $view_data['AnualTotal']; ?></td>
										<td><?php echo $view_data['TotalClnt']; ?></td>
										
										<td>
										
										<a href="agent_view_client.php?insurance_agent_id=<?php echo $view_data['agent_id']; ?>" class="btn btn-primary btn-xs">&nbsp;&nbsp; Annual &nbsp;&nbsp; </a> <br>
										<!-- delete <a href="agent_view_client_life.php?insurance_agent_id=<//?php echo $view_data['agent_id']; ?>" class="btn btn-success btn-sm"> Lifetime</a>-->
										<a href="agent_view_client_all.php?insurance_agent_id=<?php echo $view_data['agent_id']; ?>" class="btn btn-success btn-sm">All View</a>
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