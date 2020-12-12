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
								<div class="col-md-10 col-md-offset-1">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Company Name</th>
										<th>Company Address </th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_data = $view_tbl_hr_company->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_data['company_name']; ?></td>
										<td><?php echo $view_data['company_address']; ?></td>
										<td><?php echo $view_data['last_payment_date']; ?></td>
										
										<td>
										<a href="edit_hr_company.php?hr_company_id=<?php echo $view_data['comapny_code']; ?>" class="btn btn-success">Edit </a> 
										<br><br>
										<button comapny_code_id="<?php echo $view_data['comapny_code']; ?>" class="btn btn-danger hr_comapny_delete">Delete</button>
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