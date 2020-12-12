<?php include('include/header.php'); 

	
	$client_id = $_GET['client'];
	$author_id = $_GET['author_id'];
	$insurance_testament = $cls_virtual_safe_client->insurance_authorized_data($author_id,$client_id);
 
	$view_data = $insurance_testament->fetch_assoc();
 

?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<h3>Authorized Representative Details</h3>
								<div class="tab-content">
								
									<form class="form-horizontal" id="agent_authorized_update" method="post" enctype="multipart/form-data" ><br>
									 <div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Authorized">Authorized Representatives First Name : <span class="required">*</span> </label>
									 <input type="hidden" value="<?php echo $client_id; ?>" name="client">
									 <input type="hidden" name="author_id" value="<?php echo $author_id; ?>">
									 <div class="col-sm-5 col-xs-10">
										<input class="form-control" name="authorized_fname" id="authorized_fname" title="Enter Authorized Representatives First Name" value="<?php echo $view_data['auth_f_name'] ?>" required>
									 </div>
									 </div>
									 <div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Authorized">Authorized Representatives Last Name : <span class="required">*</span> </label>
									 <div class="col-sm-5 col-xs-10"><input class="form-control" name="authorized_lname" id="authorized_lname" title="Enter Authorized Representatives Last Name" value="<?php echo $view_data['auth_l_name'] ?>" required></div>
									 </div>
									 <div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Relation">Relation : <span class="required"></span> </label>
									 <div class="col-sm-5 col-xs-10"><input class="form-control" name="relation" id="relation" title="Enter Relation" value="<?php echo $view_data['relation'] ?>" ></div>
									 </div>
									 <div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Remark">Remark : </label>
									 <div class="col-sm-5 col-xs-10"> <textarea class="form-control Remark" name="remark" id="" title="Enter Remark"  rows="3"><?php echo $view_data['remark'] ?></textarea></div>
									 </div> 
									  
									  
									  <div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-default defaults">Save</button>
										  <a onclick="goBack()" class="btn btn-default defaults">Back</a>
										 <!-- <a authorized_delet="<//?php echo $author_id; ?>" class="btn btn-default defaults authorized_delete">Delete</a>-->
										</div>
									  </div>
									</form>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
<?php include('include/footer.php'); ?>