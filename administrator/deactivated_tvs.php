<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><center>Deactivated Virtual Safe Client List</center></h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<table>
									<tr>
									<td><a href="all_virtual_safe_client.php" class="btn btn-warning">All TVSC </a>&nbsp;</td>
									<td><a href="show_virtual_safe_client.php" class="btn btn-success">Active </a>&nbsp;</td>
									<td><a href="deactivated_tvs.php" class="btn btn-primary">Deactivated </a>&nbsp;</td>
									
									</tr>
								</table><br>
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID No</th>
										
                                        <th>Client Name</th>
										<th>Client Email</th>
										<th>VS Code</th>
										<th>Action </th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$i= 1;
										while($view_data = $view_vs_client_deactive->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_data['client_id']; ?></td>
										
										<td><?php echo $view_data['client_first_name']; ?> <?php echo $view_data['client_last_name']; ?></td>
										<td><?php echo $view_data['client_email']; ?></td>
										<td><?php echo $view_data['vs_code']; ?></td>
										<td>
										<!--<a href="edit_virtual_safe_client.php?client_id=<//?php echo $view_data['client_id']; ?>" class="btn btn-success">Edit </a>-->
										<a href="view_tvs.php?client_id=<?php echo $view_data['client_id']; ?>" class="btn btn-success btn-sm">View Details </a><br>
										<button tvs_active_id="<?php echo $view_data['client_id']; ?>" class="btn btn-primary btn-xs tvs_active_id">&nbsp;&nbsp;&nbsp;Activated  &nbsp;&nbsp;&nbsp;</button> 
										<br>
										<button client_id_delete="<?php echo $view_data['client_id']; ?>" client_vscode="<?php echo $view_data['vs_code']; ?>" class="btn btn-danger btn-sm client_id_delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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