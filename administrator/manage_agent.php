<?php include('include/header.php');


 ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><center>Active Insurance Agent</center></h3>
							<div class="panel-subtitle">
								
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<table class="full">
									<tr>
									<td><a href="all_agent.php" class="btn btn-primary">All Agent List</a>&nbsp;</td>
									<td><a href="manage_agent.php" class="btn btn-success">Active List</a>&nbsp;</td>
									<td><a href="deactivated_agent.php" class="btn btn-primary">Deactivated List</a>&nbsp;</td>
									<td><a href="pending.php" class="btn btn-warning">Pending List</a></td>
									</tr>
								</table>
								<table class="media">
									<tr>
									<td><a href="all_agent.php" class="btn btn-primary">All Agent List</a>&nbsp;</td>
									
									<td><a href="manage_agent.php" class="btn btn-success">Active List</a>&nbsp;</td>
									</tr>
									<tr>
									<td><a href="deactivated_agent.php" class="btn btn-primary">Deactivated List</a></td>
									<td><a href="pending.php" class="btn btn-warning">Pending List</a></td>
									
									</tr>
								</table>
							 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Serial NO</th>
										<th>Full Name</th>
										<th>Address</th>
										<th>Email Address</th>
										<th>Status</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$i = 1;
										while($view_data = $view_insurance_agent_id->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $view_data['first_name']; ?> <?php echo $view_data['last_name']; ?></td>
										<td><?php echo $view_data['agent_address']; ?></td>
									
										<td><?php echo $view_data['agent_email']; ?></td>
										<td><?php echo $view_data['status']; ?></td>
										
										<td>
										
										<button agent_id="<?php echo $view_data['agent_id']; ?>" class="btn btn-primary btn-xs agent_deactive">Deactivated  </button> <br>
										<!--<a href="edit_agent.php?insurance_agent_id=<//?php echo $view_data['agent_id']; ?>" class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> 
										<br>-->
										<a href="agent_view.php?insurance_agent_id=<?php echo $view_data['agent_id']; ?>" class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> <br>
										<button insurance_agent_id="<?php echo $view_data['agent_id']; ?>" class="btn btn-danger btn-sm insurance_agent_delete">&nbsp;&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;&nbsp;</button>
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