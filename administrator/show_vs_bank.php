<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Virtual Safe Client</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Client Name and ID</th>
										<th>Bank Code</th>
										<th>Bank Account</th>
										<th>Bank Account Type</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_data = $view_vs_bank->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_data['client_first_name']; ?> <?php echo $view_data['client_last_name']; ?> ID:<?php echo $view_data['client_id']; ?></td>
										<td><?php echo $view_data['bank_name']; ?> Code: <?php echo $view_data['bank_code']; ?></td>
										<td><?php echo $view_data['bank_account']; ?></td>
										<td><?php echo $view_data['bank_account_type']; ?></td>
										<td>
										<a href="edit_vs_client_bank.php?vs_bank_id=<?php echo $view_data['id']; ?>" class="btn btn-success">Edit </a> 
										<br><br>
										<button vs_bank_id="<?php echo $view_data['id']; ?>" class="btn btn-danger vs_bank_id_delete">Delete</button>
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