<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Employee Roster</h3>
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
										<th>Employee ID</th>
										<th>Employee Name</th>
										<th>Designation</th>
										<th>Date of Birth</th>
										<th>Employee SSN</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_data = $view_tbl_employee_roster->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_data['company_code']; ?></td>
										<td><?php echo $view_data['company_roster_code']; ?></td>
										<td><?php echo $view_data['employeeid']; ?></td>
										<td><?php echo $view_data['employee_name']; ?></td>
										<td><?php echo $view_data['employee_designation']; ?></td>
										<td><?php echo $view_data['employee_date_of_birth']; ?></td>
										<td><?php echo $view_data['employee_ssn']; ?></td>
										<td>
										<a href="#?hr_company_roster_id=<?php echo $view_data['company_roster_code']; ?>" class="btn btn-success">Edit </a> 
										<br><br>
										<button employee_roster_code="<?php echo $view_data['company_roster_code']; ?>" class="btn btn-danger employee_delete">Delete</button>
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