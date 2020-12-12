<?php include('include/header.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Virtual Safe code</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Virtual Safe code</th>
										<th>VS Code Type</th>
										<th>VS Code Issue date</th>
										<th>VS Status</th>
										<th>VS Code Description</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										while($view_vscode = $view_vscode_master->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $view_vscode['vs_code']; ?></td>
										<td><?php echo $view_vscode['vs_code_type']; ?></td>
										<td><?php echo $view_vscode['vs_code_issue_date']; ?></td>
										<td><?php echo $view_vscode['vs_code_status']; ?></td>
										<td><?php echo $view_vscode['vs_code_description']; ?></td>
										
										<td>
										<a href="edit_vs_code_master.php?vscode_id=<?php echo $view_vscode['vs_code']; ?>" class="btn btn-success">Edit </a> 
										<!--<br><br>
										<button comapny_code_id="<//?php echo $view_data['vs_code']; ?>" class="btn btn-danger hr_comapny_delete">Delete</button>
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