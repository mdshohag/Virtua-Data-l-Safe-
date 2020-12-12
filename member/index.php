<?php include('include/header.php');

	$agnt_id = $_SESSION['customer_id'];
	
	$agnt_data_id = $cls_insurance_agent->information_agent($agnt_id);
 
	$users_data = $agnt_data_id->fetch_assoc();
	
	$tvs_data_id = $cls_virtual_safe_client->information_tvs_client($agnt_id);
 
	$tvs_data = $tvs_data_id->fetch_assoc();

 ?>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
		<div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<!--<center><h1 class="panel-title">The Virtual Safe</h1></center>-->
								<?php
						
										if($_SESSION['customer_type']=='agent'){
																	
										?>
											
											<center><h1 class="panel-title">Welcome to the Agent Portal</h1></center>
										
										<?php
										} else{
										?>
									<div class="tab-image">
										<a href="#" style="color:;"><b>General Information</b></a>
									</div>
										
										<?php
										}
										?>
								
							
										
											
											<?php
						
										if($_SESSION['customer_type']=='agent'){
																	
										?>
										
										
										<?php
										} else{
										
										?>
										<div class="row">
										<div class="col-md-12">
										<div class="tab-content">
										<div id="home" class="tab-pane fade in active" style="padding:17px;">
									
										<h4>First Name : <?php echo $tvs_data['client_first_name']; ?> </h4>
										<h4>Last Name : <?php echo $tvs_data['client_last_name']; ?></h4>
										<h4>Email : <?php echo $tvs_data['client_email']; ?></h4>
							
										<div class="col-sm-offset-8 col-sm-4">
											<a href="upinformation/user_id/<?php echo $cuid; ?>" style="color:green;" type="button" class="btn btn-default">Update Information</a>												  
										</div>
										</div><br>
										</div>
									</div>
									</div>
									
										
										<?php
										}
										?>
									
								</div>
						
						<div class="panel-body">
						<?php
						
						if($_SESSION['customer_type']=='agent'){
													
						?>
						<div class="row">
							<div class="col-md-12">
							
							
							
							
						</div>
						<?php
						} else{
						?>
					<div class="row">
						<div class="col-md-12">
						
						<div class="tab-image">
							<a href="#home" style="color:;"><b> Insurance</b></a>
						</div>
						
						
							<!--<ul class="nav nav-tabs" style="background-color:#FCFCFC;">
							<li><a class="active" href="index.php" style="color:#FFFFFF;background-color:#757575;"><b>Insurance</b></a></li>
							<li><a href="setp_2_asset.php" style="color:#B6D440;"><b>Asset</b></a></li>
							<li><a href="setp_3_bank.php" style="color:#B6D440;"><b>Bank</b></a></li>
							<li><a href="setp_4_location.php" style="color:#B6D440;"><b>Location</b></a></li>
							</ul><br>--->
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
										<!--<th>Policy Number</th>-->
										<th>Remark Or Address</th>
										<th>Edit</th>
										<!--<th style="float:right;" class="left-edit"><h4><a href="#<?php //echo $vs_insurance['id']; ?>">EDIT</a>&nbsp; &nbsp; <a href="#" style="color:red;">DELETE</a></h4></th>-->
									  </tr>
									</thead>
									<tbody>
										
									<?php
									 while($vs_insurance = $view_vs_insurance_new->fetch_assoc())

										{
									
									?>
									  <tr>
										
										<td><p> <?php echo ucfirst($vs_insurance['insurance_comapny_code']); ?> </p></td>
										<td><p><?php echo ucfirst($vs_insurance['insurance_name']); ?></p></td>
										<!--<td><p><?php echo $vs_insurance['policy_number']; ?></p></td>-->
										<td><p><?php echo $vs_insurance['remark']; ?></p></td>
										<td><a href="insurance_details/insurance_details/<?php echo $vs_insurance['id']; ?>">Details</a></td>
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
							<form name="add_insurance" id="add_insurance" method="post" enctype="multipart/form-data">  
								<fieldset id="dynamic_field">
									<!-- Add form -->
									  <div class="form-group">
											
											<div class="col-sm-offset-8 col-sm-4"><br>
												  <button style="color:green;" type="button" name="add" id="add" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add Insurance </button>
												  
											</div>
										</div>
										
										</fieldset>
										
								 </form> 
									 
								</div>
								
								
								
								
							</div><br>
							<div class="tab-image">
								<a href="#menu1" style="color:;"><b>Assets</b></a>
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
											<th>Edit</th>
											
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
											<td><a href="insurance_asset_details/insurance_asset/<?php echo $vs_asset['id']; ?>">Details</a></td>
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
									<form class="form-horizontal" id="add_vsc_asset" method="post" enctype="multipart/form-data">
										<fieldset id="dynamic_form">
											<div class="form-group">
											
												<div class="col-sm-offset-8 col-sm-4"><br>
													  <button style="color:green;" type="button" name="add_row" id="add_row" class="btn btn-default" > <i class="fa fa-plus" aria-hidden="true"></i>Add Asset</button> 
												</div>
											</div>
										</fieldset>
										 
										</form>
								</div>
							</div><br>
							<div class="tab-image">
								<a href="#menu2" style="color:;"><b>Bank</b></a>
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
											<th>Remark Or Bank Address</th>
											<th>Edit</th>
											
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
											<td><a href="insurance_bank_details/bank_details/<?php echo $vs_bank['id']; ?>">Details</a></td>
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
									<form class="form-horizontal" id="addvsbank" method="post" enctype="multipart/form-data">
										
										<fieldset id="dynamic_div">
											
											
										<div class="form-group">
												
												<div class="col-sm-offset-8 col-sm-4"><br>
													  <button style="color:green;" type="button" name="add_form" id="add_form" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add Bank</button>
													  
												</div>
											</div>
										</fieldset>
										
									</form>
								</div>
							</div><br>
							<div class="tab-image">
								<a href="#menu3" style="color:;"><b>Estate Plan</b></a>
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
											<!--<th> Type Testament</th>-->
											<th> Testament</th>
											<th> Remark</th>
											<th>Edit</th>
											
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
											<td><a href="testament_details/testament_id/<?php echo $vs_testament['id']; ?>">Details</a></td>
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
								<form class="form-horizontal" id="addvsclient_location" method="post" enctype="multipart/form-data">
							
								<fieldset id="dynamic_fld">
								
								
								<div class="form-group">
										
										<div class="col-sm-offset-8 col-sm-4"><br>
											  <button style="color:green;" type="button" name="add_data" id="add_data" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add estate plan</button>
											  
										</div>
									</div>
							</fieldset>
							
							</form>
							
							</div>
							</div><br><br>
							<div class="tab-image">
								<a href="#menu4" style="color:;"><b>AUTHORIZED REPRESENTATIVE</b></a>
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
											<th>Edit</th>
											
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
											<td><a href="authorized_details/author_id/<?php echo $vs_authorized['id']; ?>">Details</a></td>
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
								<form class="form-horizontal" id="add_authorized" method="post" enctype="multipart/form-data">
							
								<fieldset id="dynamic_fldss">
								
								
								<div class="form-group">
										
										<div class="col-sm-offset-8 col-sm-4"><br>
											  <button style="color:green;" type="button" name="add_author" id="add_author" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add Authorized Representatives</button>
											  
										</div>
									</div>
							</fieldset>
							
							</form>
							
							</div>
							</div><br>
							<div class="tab-image">
								<a href="#menu3" style="color:;"><b>Virtual Safe Code Information</b></a>
							</div>
							<div class="tab-content">
							<div id="menu3" class="tab-pane fade in active" style="padding:17px;">
							<div class="col-sm-12">
							
							
							
							<?php
								
							
							$todate = date("Y-m-d");
							
							$uui = $_SESSION['customer_id'];
	
							$pay_data_ids = $cls_virtual_safe_client->select_date($uui);
 
							$data = $pay_data_ids->fetch_assoc();
							
							if( $data['valid_to'] == '0000-00-00'){
							
							$status_payment = $cls_payment_type->select_amount_annual();
							$status = $status_payment->fetch_assoc();
							
							?>
							<?php
									while($view_data = $view_amount->fetch_assoc()){
										
									?>
							<p>Please select a membership type to begin enjoying the benefits of The Virtual Safe.</p><br>
							<center style="padding-right:195px;">
							<p>Annual Membership &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo $view_data['amount_fees']; ?>&nbsp;&nbsp; &nbsp; <a class="btn btn-success" href="register_payment">Pay Now</a></p>
							
							<?php
									}
								$lifetime= $cls_payment_type->view_payment_lifetime_amount();
									while($lifeamount = $lifetime->fetch_assoc()){
							?>
							<!-- delete <p>Lifetime Membership &nbsp;&nbsp;$<//?php echo $lifeamount['amount_fees']; ?>&nbsp;&nbsp; <a class="btn btn-success" href="paymentlifetime"> Pay Now</a></p><br>-->
							</center>
							<p>Upon completetion of payment a beneficiary access code will be generated.</p>
							<p>The beneficiary access code should be forwarded to one beneficiary of your choice to allow him/her access to your safe. </p>
							<?php
								}
							}
							
							else if($data['valid_to'] >= $todate){
										
							?>
							<p>
								<li>Your Virtual Safe code is <?php echo $data['vs_code']; ?></li>
								
							<?php 
								if($data['status'] == 'Lifetime'){
								?>
								
								<?php
								} else {
								?>
								<li>Virtual Safe code is valid from <?php echo $data['valid_from']; ?> to <?php echo $data['valid_to']; ?></li>
								<?php } ?>
							
							<!--Issue valid virtual safe code and From <//?php echo $data['valid_from']; ?> and Valid <//?php echo $data['valid_to']; ?><br>
							
							The virtual safe code: <//?php echo $data['vs_code']; ?>--></p>
							<?php
							
							} else if($data['valid_to'] <= $todate){
							
							while($view_datas = $view_renewal->fetch_assoc()){
							?>
							<p>Please select a membership type to begin enjoying the benefits of The Virtual Safe.</p><br>
							<center style="padding-right:195px;">
							<p style="padding-left:90px;"> Renewed &nbsp;&nbsp;$<?php echo $view_datas['amount_fees']; ?> &nbsp;&nbsp;<a class="btn btn-success" href="renewalpayment">Pay Now</a></p>
							 <?php
							}
							
							
							?>
							
							<?php 
								$lifetime= $cls_payment_type->view_payment_lifetime_amount();
								while($lifeamount = $lifetime->fetch_assoc()){
									?>
							<!-- delete <p>Lifetime Membership &nbsp;&nbsp;$<//?php echo $lifeamount['amount_fees']; ?> &nbsp;&nbsp;<a class="btn btn-success" href="paymentlifetime">Pay Now</a></p><br>--><br>
							</center>
							<p>Upon completetion of payment a beneficiary access code will be generated.</p>
							<p>The beneficiary access code should be forwarded to one beneficiary of your choice to allow him/her access to your safe. </p>
							<?php
								}
							}
							
							?>
							
							
							
							
							</div>
							<!--<div class="col-sm-5">
							<table >
                                <thead>
                                    <tr>
                                        <th>Type Payment</th>
										<th width="10"></th>
										<th>Amount Fees</th>
										
										
                                    </tr>
                                </thead>
                                <tbody>
								<//?php 
/*
								if( $data['valid_to'] == '0000-00-00'){
									$status_payment = $cls_payment_type->select_amount_annual();
							$status = $status_payment->fetch_assoc();
							
							?>
									
									
									<//?php
									while($view_data = $view_amount->fetch_assoc()){
										
									?>
									<tr>
										<td><//?php echo $view_data['type_payment']; ?></td>
										<td></td>
										<td><//?php echo $view_data['amount_fees']; ?></td>
										
									  </tr>
									
									<//?php 
									
									}
										$lifetime= $cls_payment_type->view_payment_lifetime_amount();
										while($lifeamount = $lifetime->fetch_assoc()){
									?>
									
									<tr>
										<td><//?php echo $lifeamount['type_payment']; ?></td>
										<td></td>
										<td><//?php echo $lifeamount['amount_fees']; ?></td>
										
									  </tr>
									
								<//?php
								}
								}
								else{
							?>
							<//?php
										while($view_datas = $view_renewal->fetch_assoc()){
									?>
									<tr>
										<td><//?php echo $view_datas['type']; ?></td>
										<td></td>
										<td><//?php echo $view_datas['amount_fees']; ?></td>
										
									  </tr>
									
									<//?php } $lifetime= $cls_payment_type->view_payment_lifetime_amount();
										while($lifeamount = $lifetime->fetch_assoc()){
									?>
									
									<tr>
										<td><//?php echo $lifeamount['type_payment']; ?></td>
										<td></td>
										<td></?php echo $lifeamount['amount_fees']; ?></td>
										
									  </tr>
									
								</?php
								}
							}
							?>
							*/
                                </tbody>
                            </table>
							</div>-->
							<br><br><br><br><br>
							<br><br><br><br><br>
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