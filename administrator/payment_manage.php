<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Payment Amount</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Type Payment</th>
										<th>Amount Fees</th>
										<th>Status</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_data = $view_amount->fetch_assoc()){
									?>
									<tr>
									<!-- delete Lifetime Membership, 399.00, lifetime -->
										<td><?php echo $view_data['type_payment']; ?></td>
										<td><?php echo $view_data['amount_fees']; ?></td>
										<td><?php echo $view_data['type']; ?></td>
										
										<td>
										<a href="edit_payment_manage.php?pay_id=<?php echo $view_data['id']; ?>" class="btn btn-success">Update </a> 
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