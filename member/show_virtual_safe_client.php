<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
						<center><h3 class="panel-title">Welcome to The Virtual Safe</h3></center>
							<h3 class="panel-title">List Virtual Safe Client</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Client Name</th>
										<th>Client Email</th>
										
										
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$i = 1;
										while($view_data = $view_vs_client->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $view_data['client_first_name']; ?> <?php echo $view_data['client_last_name']; ?></td>
										<td><?php echo $view_data['client_email']; ?></td>
										
										<!--<td>
										<a href="edit_virtual_safe_client.php?client_id=<?php echo $view_data['client_id']; ?>" class="btn btn-success">Edit </a> 
										<!--<br><br>
										<button employee_roster_code="<?php //echo $view_data['client_id']; ?>" class="btn btn-danger client_id_delete">Delete</button>
										</td>-->
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