<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manage HR Company</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Company Code</th>
										<th>Company Roster Create Date</th>
										<th>Company Roster Status</th>
										<th>Roster Description</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_data = $view_tbl_hr_company_roster->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_data['company_code']; ?></td>
										<td><?php echo $view_data['company_roster_create_date']; ?></td>
										<td><?php echo $view_data['company_roster_status']; ?></td>
										<td><?php echo $view_data['roster_description']; ?></td>
										<td>
										<a href="edit_hr_company_roster.php?hr_company_roster_id=<?php echo $view_data['company_roster_code']; ?>" class="btn btn-success">Edit </a> 
										<br><br>
										<button company_roster_code="<?php echo $view_data['company_roster_code']; ?>" class="btn btn-danger company_roster_code_delete">Delete</button>
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