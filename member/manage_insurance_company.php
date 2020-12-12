<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">List Insurance Company</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Insurance Company Name</th>
										<th>Insurance Company Address</th>
										<th>Insurance Company Description</th>
										<!--<th>Action</th>-->
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_data = $view_insurance_company->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_data['company_name']; ?></td>
										<td><?php echo $view_data['company_address']; ?></td>
										<td><?php echo $view_data['company_description']; ?></td>
										
										<!--<td>
										<a href="edit_insurance_company.php?insurance_company_id=<?php// echo $view_data['insurance_comapny_id']; ?>" class="btn btn-success">Edit </a> 
										<br><br>
										<button insurance_comapny_id="<?php// echo $view_data['insurance_comapny_id']; ?>" class="btn btn-danger insurance_company_delete">Delete</button>
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