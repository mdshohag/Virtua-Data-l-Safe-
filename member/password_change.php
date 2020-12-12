<?php include('include/header.php'); 

$agent_id = $_SESSION['customer_id'];
 $user_data_id = $cls_insurance_agent->agent_user_data($agent_id);
 
 $user_data = $user_data_id->fetch_assoc();
 

?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Password Change</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<form class="form-horizontal" id="password" method="post" enctype="multipart/form-data" >
									 
									  
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Old Password</label>
										<div class="col-sm-9">
										<input type="hidden" value="<?php echo $agent_id; ?>" name="userdataid">
										  <input class="form-control" name="old_password" type="password" id="old_password" placeholder="Old Password">
										</div>
									  </div>
									  
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">New Password</label>
										<div class="col-sm-9">
										  <input class="form-control" name="new_password" type="password" id="new_password" placeholder="New Password">
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputUser" class="col-sm-3 control-label">Retype New Password</label>
										<div class="col-sm-9">
										  <input class="form-control" name="retype_pass" type="password" class="textfield" id="retype_pass" placeholder="Retype New Password">
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-success">Update</button>
										</div>
									  </div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('include/footer.php'); ?>