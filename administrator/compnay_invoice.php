<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<center><h1 class="panel-title">Company Report</h1></center>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							
								<form class="form-horizontal" id="invoice" method="post" enctype="multipart/form-data">
								
									<div class="form-group">
									<label class="col-sm-4 col-xs-12 control-label" for="companyname">Select Company Name : <span class="required">*</span> </label>
									<div class="col-sm-4 col-xs-10">
										<select name="companyname" id="companyname" class="form-control" title="Select a Company Name">
											
											<option value="">-- Select Company --</option>
												<?php
													while($view_data = $view_tbl_hr_company->fetch_assoc()){
												?>
												<option value="<?php echo $view_data['comapny_code']; ?>"><?php echo $view_data['company_name']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<!--<div class="form-group">
										<label class="col-sm-4 col-xs-12 control-label" for="Date">Date : <span class="required">*</span> </label>
										<div class="col-sm-4 col-xs-10">
											<input name="invoice_date" id="invoice_date" class="form-control" title="Enter Date" placeholder="yyyy-mm-dd" value="" type="text">
										</div>
									</div>-->
									<div class="form-group">
										<div class="col-sm-offset-5 col-sm-7">
										  <button type="submit" class="btn btn-primary">View Report</button>
										</div>
									 </div>
								</form>
								
								<div id="printableArea" >
								  <div id="result">
								  
								  
								    </div>
									
								    </div>
								<br>
								<center><h1 class="panel-title">All Company and Clients Information</h1></center>
							 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Company Name</th>
										<th>Client Name</th>
										<th>Client Email</th>
										<th>Product Type</th>
										<th>Valid From</th>
										<th>Valid To</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$SL = 1;
										$cls_hr_company_roster = new cls_hr_company_roster();
										$view_tbl_hr_client = $cls_hr_company_roster->view_tbl_hr_company_client();
										while($view_row = $view_tbl_hr_client->fetch_assoc()){
									?>
									<tr>
									<td><?php echo $SL++; ?></td>
									<td><?php echo $view_row['company_name']; ?></td>
									<td><?php echo $view_row['client_first_name']; ?> <?php echo $view_row['client_first_name']; ?></td>
									<td><?php echo $view_row['client_email']; ?></td>
									<td><?php echo $view_row['status']; ?></td>
									<td><?php echo $view_row['valid_from']; ?></td>
									<td><?php echo $view_row['valid_to']; ?></td>
									
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
<?php include('include/footer.php'); ?>
