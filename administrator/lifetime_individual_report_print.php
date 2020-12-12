<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$conn = $cls_dbconfig->connection();


 ?>
 <br/>
							<br>
							<div style="width:900px;">
							<h3><center>LifeTime Individual Client List</center></h3>
							</div>
							
								<table width="900" border="1">
                                <thead>
                                    <tr style="background-color:gray;color:white;">
                                        <th><center>Serial NO</center></th>
										<th>Full Name</th>
										<th>Email Address</th>
										<th>Product Type</th>
										<th>Valid From</th>
										<th>Valid To</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										$i = 1;
										
										$cls_virtual_safe_client = new cls_virtual_safe_client();
										$view_individual = $cls_virtual_safe_client->lifetime_individual_client_report();
										while($view_data = $view_individual->fetch_assoc()){
									?>
									<tr>
									<td><center><?php echo $i++; ?></center></td>
										<td><center><?php echo $view_data['client_first_name']; ?> <?php echo $view_data['client_last_name']; ?></center></td>
										<td><center><?php echo $view_data['client_email']; ?></center></td>
									
										<td><center><?php echo $view_data['status']; ?></center></td>
										<td><center><?php echo $view_data['valid_from']; ?></center></td>
										<td><center><?php echo $view_data['valid_to']; ?></center></td>
										
									  </tr>
									
									<?php } ?>
                                </tbody>
                            </table>
							
<script type="text/javascript">
window.print();
</script>