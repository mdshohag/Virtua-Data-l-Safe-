<?php include('include/header.php');

$agent = $_GET['insurance_agent_id'];
$show_agent = $cls_insurance_agent->agent_view($agent);
$agent_data = $show_agent->fetch_assoc();

$show_tvsc = $cls_insurance_agent->agent_view_tvsc($agent);

 ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><center></center></h3>
							<div class="panel-subtitle">

								  <a onclick="goBack()" class="btn btn-warning defaults">Back</a>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									
									<h4>Name : <?php echo $agent_data['first_name']; ?> <?php echo $agent_data['last_name']; ?></h4>
									<h4>Address : <?php echo $agent_data['agent_address']; ?></h4>
									<h4>Agents insurance company : <?php echo $agent_data['agent_company_code']; ?></h4>
									<h4>Agent Email : <?php echo $agent_data['agent_email']; ?></h4>
									<h4>Status : <?php echo $agent_data['status']; ?></h4>
									
									
									<br>
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>ID No</th>
										 <th>Client Name</th>
										<th>Client Email</th>
										<th>VS Code</th>
										<th>Action </th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$i = 1;
										while($tvsc_data = $show_tvsc->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $tvsc_data['client_id']; ?></td>
										<td><?php echo $tvsc_data['client_first_name']; ?> <?php echo $tvsc_data['client_last_name']; ?></td>
										<td><?php echo $tvsc_data['client_email']; ?></td>
									
										<td><?php echo $tvsc_data['vs_code']; ?></td>
																				
										<td>
										
										<a href="view_tvs.php?client_id=<?php echo $tvsc_data['client_id']; ?>" class="btn btn-success btn-sm">View Details </a><br>
										
										<!--<button client_id_delete="<//?php echo $tvsc_data['client_id']; ?>" client_vscode="<//?php echo $tvsc_data['vs_code']; ?>" class="btn btn-danger btn-sm client_id_delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>-->
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