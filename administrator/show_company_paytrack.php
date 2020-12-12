<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Company Pay Track</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Company Code</th>
										<th>Company Roster Code</th>
										<th>Month paid</th>
										<th>Year Paid</th>
										<th>Payment Date</th>
										<th>Pay Status</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_data = $view_company_paytrack->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_data['comapny_code']; ?></td>
										<td><?php echo $view_data['company_roster_code']; ?></td>
										<td><?php echo $view_data['pay_month']; ?></td>
										<td><?php echo $view_data['pay_year']; ?></td>
										<td><?php echo $view_data['pay_date']; ?></td>
										<td><?php echo $view_data['pay_status']; ?></td>
										<td>
										<a href="edit_company_paytrack.php?paytrack_id=<?php echo $view_data['id']; ?>" class="btn btn-success">Edit </a> 
										<br><br>
										<button employee_roster_code="<?php echo $view_data['id']; ?>" class="btn btn-danger paytrack_delete">Delete</button>
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