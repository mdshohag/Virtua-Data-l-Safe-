<?php include('include/header.php'); ?>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
		<div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<center><h1 class="panel-title">Pending Insurance Agent</h1></center>
								
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<table class="full">
									<tr>
									<td><a href="all_agent.php" class="btn btn-primary">All Agent List</a>&nbsp;</td>
									<td><a href="manage_agent.php" class="btn btn-success">Active List</a>&nbsp;</td>
									<td><a href="deactivated_agent.php" class="btn btn-primary">Deactivated List</a>&nbsp;</td>
									<td><a href="pending.php" class="btn btn-warning">Pending List</a></td>
									</tr>
								</table>
								<table class="media">
									<tr>
									<td><a href="all_agent.php" class="btn btn-primary">All Agent List</a>&nbsp;</td>
									
									<td><a href="manage_agent.php" class="btn btn-success">Active List</a>&nbsp;</td>
									</tr>
									<tr>
									<td><a href="deactivated_agent.php" class="btn btn-primary">Deactivated List</a></td>
									<td><a href="pending.php" class="btn btn-warning">Pending List</a></td>
									
									</tr>
								</table>
									<h3>Agent Pending  List</h3>
						<table class="table table-bordered rm" >
									<thead>
									  <tr style="background-color:#FCFCFC;">
										<th>Serial No </th>
										<th>First Name </th>
										<th>Last Name</th>
										<th>Gmail</th>
										<th>Status</th>
										<th>Action</th>
										
									  </tr>
									</thead>
									<tbody>
										
									<?php
									$sl = 1;
									 while($vs_insurance = $view_vs_new_affliates->fetch_assoc())

										{
									
									?>
									  <tr style="background-color:#FCFCFC;">
										
										<td><p> <?php echo $sl++; ?> </p></td>
										<td><p> <?php echo ucfirst($vs_insurance['first_name']); ?> </p></td>
										<td><p><?php echo ucfirst($vs_insurance['last_name']); ?></p></td>
										<td><p><?php echo $vs_insurance['agent_email']; ?></p></td>
										<td><p><?php echo $vs_insurance['status']; ?></p></td>
										<td><button user_id="<?php echo $vs_insurance['agent_id']; ?>" user_email="<?php echo $vs_insurance['agent_email']; ?>" username="<?php echo $vs_insurance['first_name']; echo ' '; echo $vs_insurance['last_name']; ?> "  class="btn btn-primary accept">Click Now</button></td>
										<!--<td><a href="#<//?php echo $vs_insurance['agent_id']; ?>">DELETE</a></td>-->
									  </tr>
									   <?php
								  
								  }
								 
								  ?>
									</tbody>
								  </table>
							</div>
							<!--<div class="row">
							
							</div>-->
						</div>
					</div>
					
					<div class="row">
					
					</div>
				
				</div>
			</div>
			</div>
			<!-- END MAIN CONTENT -->
			
<?php include('include/footer.php'); ?>