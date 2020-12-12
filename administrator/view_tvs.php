<?php include('include/header.php');

	$cuid = $_GET['client_id'];

	$view_vs_client = $cls_virtual_safe_client->view_vs_client_cuid($cuid);
	
	$view_vs_insurance = $cls_virtual_safe_client->view_Tvs_client_insurance_single_data($cuid);
	$view_vs_asset = $cls_virtual_safe_client->view_vs_client_asset($cuid);
	$view_vs_clintbank = $cls_virtual_safe_client->view_vs_client_bank($cuid);
	$view_vs_testament = $cls_virtual_safe_client->view_vs_testament_id($cuid);
	$view_vs_authorized = $cls_virtual_safe_client->view_vs_authorized_id($cuid);
	$view_vs_client_id = $cls_virtual_safe_client->view_vs_client_id();
	

	$cls_payment_type = new cls_payment_type();
	$view_amount = $cls_payment_type->view_payment_amount();
	
	$tvs_data_id = $cls_virtual_safe_client->information_tvs_view_client($cuid);
 
	$tvs_data = $tvs_data_id->fetch_assoc();
	
	
	$pay_data_id = $cls_virtual_safe_client->admin_view_paye_date($cuid);
 
	$pay_data = $pay_data_id->fetch_assoc();

 ?>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
		
			<div id="printableArea">
		<div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
						  <a onclick="goBack()" class="btn btn-warning defaults">Back</a>
							<!--<center><h1 class="panel-title">The Virtual Safe</h1></center>-->
							
									<div class="tab-image" style="border-bottom: thick solid #003366;">
										<a href="#" style="color:#003366;"><h4><b>General Information</b></h4></a>
									</div>
										
									
										<div class="row">
										<div class="col-md-12">
										<div class="tab-content">
										<div id="home" class="tab-pane fade in active" style="padding:17px;">
									
										<h4>First Name : <?php echo $tvs_data['client_first_name']; ?> </h4>
										<h4>Last Name : <?php echo $tvs_data['client_last_name']; ?></h4>
										<h4>Email : <?php echo $tvs_data['client_email']; ?></h4>
										<h4>Country : <?php echo $tvs_data['country_name']; ?></h4>
										<h4>city : <?php echo $tvs_data['city']; ?></h4>
										<h4>state : <?php echo $tvs_data['state']; ?></h4>
										<h4>Address : <?php echo $tvs_data['client_address']; ?></h4>
										<h4>Zip Code : <?php echo $tvs_data['zip_code']; ?></h4>
							
										
										</div><br>
										</div>
									</div>
									</div><br>
									
							
						
					<div class="row">
						<div class="col-md-12">
						
						<div class="tab-image" style="border-bottom: thick solid #003366;">
							<a href="#home"  style="color:#003366;"><h4><b> Insurance</b></h4></a>
						</div>
						
							<div class="tab-content">
									<div id="home" class="tab-pane fade in active" style="padding:17px;">
									<?php
									
									$catp1 = $cls_virtual_safe_client->view_vs_client_insurance_data_check($cuid);
									
									 $catr1 = $catp1->fetch_array();
									 $search_i = $catr1[0];
									
									
									 if(!empty($search_i))
										{ ?>
									<table class="table table-bordered rm" >
									<thead>
									  <tr style="background-color:#FCFCFC;">
										<th>Insurance Company </th>
										<th>Insurance Type</th>
										<th>Remark</th>
									
										
									  </tr>
									</thead>
									<tbody>
										
									<?php
									 while($vs_insurance = $view_vs_insurance->fetch_assoc())

										{
									
									?>
									  <tr>
										
										<td><p> <?php echo ucfirst($vs_insurance['insurance_comapny_code']); ?> </p></td>
										<td><p><?php echo ucfirst($vs_insurance['insurance_name']); ?></p></td>
										<td><p><?php echo $vs_insurance['remark']; ?></p></td>
										
									  </tr>
									   <?php
								  
								  }
								 
								  ?>
									</tbody>
								  </table><br>
								  
								  <?php
								  }
								   else {
									?>
								
								   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
										No Data !!
									</div>
									<?php
								}
							  ?>
							
									 
								</div>
							</div><br>
							<div class="tab-image" style="border-bottom: thick solid #003366;">
								<a href="#menu1" style="color:#003366;"><h4><b>Assets</b></h4></a>
							</div>
							
						
							<div class="tab-content">
							<div id="menu1" class="tab-pane fade in active" style="padding:17px;">
								
									<?php
									
									$asset = $cls_virtual_safe_client->view_vs_client_asset_data_check($cuid);
									
									 $asset_r = $asset->fetch_array();
									 $asset_r_data = $asset_r[0];
									
									
									 if(!empty($asset_r_data))
										{
									?>
									<table class="table table-bordered rm" >
										<thead>
										  <tr style="background-color:#FCFCFC;">
											<th>Asset Type</th>
											<th>Property Address</th>
											<th>Stock, Company Name</th>
											<th>Boat</th>
											<th>Other</th>
											<th>Remark</th>
											
										  </tr>
										</thead>
										<tbody>
										<?php 
									 while($vs_asset = $view_vs_asset->fetch_assoc())
											{ ?>
										  <tr>
											
											<td><?php echo ucfirst($vs_asset['asset_type']); ?></td>
											<td><?php echo ucfirst($vs_asset['asset_address']); ?></td>
											<td><?php echo $vs_asset['company_name']; ?></td>
											<td><?php echo $vs_asset['boat_name']; ?></td>
											<td><?php echo $vs_asset['other_name']; ?></td>
											<td><?php echo $vs_asset['remark']; ?></td>
											
										  </tr>
										   <?php
												} 
												?>
										</tbody>
									</table><br>
							  <?php						 
							  }  else {
										?>
									
									   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
											No Data !!
										</div>
										<?php
									}
								  ?>										
									
								</div>
							</div><br>
							<div class="tab-image" style="border-bottom: thick solid #003366;">
								<a href="#menu2" style="color:#003366;"><h4><b>Bank</b></h4></a>
							</div>
							
							<div class="tab-content">
							<div id="menu2" class="tab-pane fade in active" style="padding:17px;">
								
									<?php
									
									$bank = $cls_virtual_safe_client->view_vs_client_bank_data_check($cuid);
									
									 $bank_r = $bank->fetch_array();
									 $b_r_data = $bank_r[0];
									
									
									 if(!empty($b_r_data))
										{
									
									?>
									<table class="table table-bordered rm" >
										<thead>
										  <tr style="background-color:#FCFCFC;">
											<th>Bank Name</th>
											<th>Bank Account Type</th>
											<th>Remark</th>
											
											
										  </tr>
										</thead>
										<tbody>
										<?php
										while($vs_bank = $view_vs_clintbank->fetch_assoc())

											{
									
										?>
										  <tr>
											<td><?php echo ucfirst($vs_bank['bank_code']); ?></td>
											<td><?php echo $vs_bank['bank_account_type']; ?></td>
											<td><?php echo $vs_bank['remark']; ?></td>
											
										  </tr>
										   <?php
											} 
											?>
										</tbody>
									</table><br>
							  
							  <?php
							  
							  }  else {
										?>
									
									   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
											No Data !!
										</div>
										<?php
									}
								  ?>										
									
								</div>
							</div><br>
							<div class="tab-image" style="border-bottom: thick solid #003366;">
								<a href="#menu3" style="color:#003366;"><h4><b>Estate Plan</b></h4></a>
							</div>
							<div class="tab-content">
							<div id="menu3" class="tab-pane fade in active" style="padding:17px;">
							
							<?php
									
									$bank = $cls_virtual_safe_client->view_vs_client_testament_data_check($cuid);
									
									 $bank_r = $bank->fetch_array();
									 $b_r_data = $bank_r[0];
									
									
									 if(!empty($b_r_data))
										{
									
									?>
									<table class="table table-bordered rm" >
										<thead>
										  <tr style="background-color:#FCFCFC;">
											<!--<th>Type Testament</th>-->
											<th> Testament</th>
											<th> Remark</th>
																				
										  </tr>
										</thead>
										<tbody>
										<?php
										while($vs_testament = $view_vs_testament->fetch_assoc())

											{
									
										?>
										  <tr>
											<!--<td><//?php echo ucfirst($vs_testament['typewill']); ?></td>-->
											<td><?php echo ucfirst($vs_testament['location_testament']); ?></td>
											<td><?php echo ucfirst($vs_testament['remark']); ?></td>
											
										  </tr>
										   <?php
											} 
											?>
										</tbody>
									</table><br>
							  
							  <?php
							  
							  }  else {
										?>
									
									   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
											No Data !!
										</div>
										<?php
									}
								  ?>	
								
							
							</div>
							</div><br>
							<div class="tab-image"  style="border-bottom: thick solid #003366;">
								<a href="#menu4" style="color:#003366;"><b>AUTHORIZED REPRESENTATIVE</b></a>
							</div>
							<div class="tab-content">
							<div id="menu4" class="tab-pane fade in active" style="padding:17px;">
							
							<?php
									
									$data_authorized = $cls_virtual_safe_client->view_vs_client_authorized_data_check($cuid);
									
									 $authorized = $data_authorized->fetch_array();
									 $authorized_data = $authorized[0];
									
									
									 if(!empty($authorized_data))
										{
									
									?>
									<table class="table table-bordered rm" >
										<thead>
										  <tr style="background-color:#FCFCFC;">
											<th> First Name</th>
											<th> Last Name</th>
											<th>Relation</th>
											<th>Remark</th>
											
											
										  </tr>
										</thead>
										<tbody>
										<?php
										while($vs_authorized = $view_vs_authorized->fetch_assoc())

											{
									
										?>
										  <tr>
											<td><?php echo $vs_authorized['auth_f_name']; ?></td>
											<td><?php echo $vs_authorized['auth_l_name']; ?></td>
											<td><?php echo $vs_authorized['relation']; ?></td>
											<td><?php echo $vs_authorized['remark']; ?></td>
											
										  </tr>
										   <?php
											} 
											?>
										</tbody>
									</table><br>
							  
							  <?php
							  
							  }  else {
										?>
									
									   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
											No Data !!
										</div>
										<?php
									}
								  ?>
							
							
							</div>
							</div><br>
							<div class="tab-image" style="border-bottom: thick solid #003366;">
								<a href="#menu3" style="color:#003366;"><h4><b>Virtual Safe Code Information</b></h4></a>
							</div>
							<div class="tab-content">
							<div id="menu3" class="tab-pane fade in active" style="padding:17px;">
							<div class="col-sm-12">
							
							<p>Virtual Safe code is valid from <?php echo $pay_data['valid_from']; ?> to <?php echo $pay_data['valid_to']; ?><br>
							
							The virtual safe code is: <?php echo $pay_data['vs_code']; ?></p>
							
							
							
							</div>
							
							
						</div>
						</div>
						</div>
					</div>
					
							
						</div>
					</div>
									
				</div><!--  container-fluid -->
				</div>
		
			<!-- END MAIN CONTENT -->
				</div>
<?php include('include/footer.php'); ?>