<?php include('include/header.php'); ?>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
		<div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<!--<center><h1 class="panel-title">The Virtual Safe</h1></center>-->
								
								<table>
									<tr>
										<td>
											<!--<p class="panel-subtitle"><img src="image/<?php //echo $photo; ?>" width="100" height="120"></p>-->
										</td>
										<td style="padding-left:20px">
										
											<h4>User ID: <?php echo $_SESSION['customer_id']; ?></h4>
											<h4>First Name : <?php echo $_SESSION['customer_name']; ?> </h4>
											<h4>Last Name : <?php echo $_SESSION['customer_lname']; ?></h4>
											<h4>Email : <?php echo $_SESSION['customer_username']; ?></h4>
										
										</td>
									</tr>
								</table>
								
							<h4></h4>
						</div>
						<div class="panel-body">
						<?php
						
						if($_SESSION['customer_type']=='agent'){
													
						?>
						<div class="row">
							<div class="col-md-12">
								<h1>Agent</h1>
							</div>
						</div>
						<?php
						} else{
						?>
					<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs" style="background-color:#FCFCFC;">
							<li><a href="index.php" style="color:#B6D440;"><b>Insurance</b></a></li>
							<li><a  href="setp_2_asset.php" style="color:#B6D440;"><b>Asset</b></a></li>
							<li><a class="active" href="setp_3_bank.php" style="color:#FFFFFF;background-color:#757575;"><b>Bank</b></a></li>
							<li><a href="setp_4_location.php" style="color:#B6D440;"><b>Location</b></a></li>
						</ul><br>
							<div class="tab-content">
								<div id="menu2" class="tab-pane fade in active" style="padding:17px;">
								
									<?php
									
									$asset = $cls_virtual_safe_client->view_vs_client_bank_data_check($cuid);
									
									 $asset_r = $asset->fetch_array();
									 $asset_r_data = $asset_r[0];
									
									
									 if(!empty($asset_r_data))
										{
									$i= 1;
									 while($vs_bank = $view_vs_clintbank->fetch_assoc())

										{
									
									?>
									<table class="table table-bordered rm" >
										<thead>
										  <tr style="background-color:#FCFCFC;">
											<th><b><h4>Bank Information <?php echo $i++;?></b></h4></th>
											<th></th>
											<th style="float:right;" class="left-edit"><h4><a href="#<?php echo $vs_bank['id']; ?>">EDIT</a> <a href="#" style="color:red;">DELETE</a></h4></th>
										  </tr>
										</thead>
										<tbody>
										
										  <tr>
											<td>Bank Name: </td>
											<td><?php echo ucfirst($vs_bank['bank_name']); ?></td>
											
										  </tr>
										  
										  <tr>
											<td> Bank Account:  </td>
											<td><?php echo ucfirst($vs_bank['bank_account']); ?></td>
											
										  </tr>  
										  <tr>
											<td>Bank Account Type:  </td>
											<td><?php echo $vs_bank['bank_account_type']; ?></td>
											
										  </tr>
										  
										</tbody>
									</table><br>
							  
							  <?php
							  
							  }
							 
							  }  else {
										?>
									
									   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
											No Data !!
										</div>
										<?php
									}
								  ?>										
									<form class="form-horizontal" id="addvsbank" method="post" enctype="multipart/form-data">
										
										<fieldset id="dynamic_div">
											
											
										<div class="form-group">
												
												<div class="col-sm-offset-8 col-sm-4"><br>
													  <button type="button" name="add_form" id="add_form" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add Bank</button>
													  
												</div>
											</div>
										</fieldset>
										
										  
										  <div id="save_butns" style="display:none" class="form-group">
											<div class="col-sm-offset-5 col-sm-7">
											  <button type="submit" class="btn btn-success">Save</button>
											</div>
										  </div>
									</form>
								</div>
							
								<div id="menu3" class="tab-pane fade" style="padding:17px;">
									<form class="form-horizontal" id="addvsclient_location" method="post" enctype="multipart/form-data">
								
								
									<legend>Location of Client’s will and testament</legend>
									<fieldset id="dynamic_fld">
									
									
									<div class="form-group">
										<label class="col-sm-5 col-xs-12 control-label" for="Location_testament">Location of Client’s will and testament : <span class="required">*</span> </label>
										<div class="col-sm-5 col-xs-10">
											 <textarea class="form-control" name="location_testament" id="location_testament" title="Enter Location of Client’s will and testament" placeholder="Enter Location"  rows="3"></textarea>
										</div>
									</div>
									<div class="form-group">
											
											<div class="col-sm-offset-8 col-sm-4"><br>
												  <button type="button" name="add_data" id="add_data" class="btn btn-default">Add More</button>
												  
											</div>
										</div>
								</fieldset>
								
								  
								  <div class="form-group">
									<div class="col-sm-offset-5 col-sm-7">
									  <button type="submit" class="btn btn-success">Save</button>
									</div>
								  </div>
								</form>
								</div>
							</div>
						</div>
					</div>
					<?php
					}
					?>
							<div class="row">
							
							</div>
						</div>
					</div>
					
					<div class="row">
						
					</div>
				
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			
<?php include('include/footer.php'); ?>