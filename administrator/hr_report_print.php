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
							<div style="width:1100px;">
							<h3><center>HR REPORT</center></h3>
							</div>
							
								<table width="1100" border="1">
                                <thead>
                                    <tr style="background-color:gray;color:white;">
                                         <th>SL No</th>
                                        <th>Company Name</th>
                                        <th>Agent Name</th>
                                        <th>Agent Email</th>
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
										$cls_virtual_safe_client = new cls_virtual_safe_client();
										$view_tbl_hr = $cls_virtual_safe_client->view_tbl_hr_report();
										while($view_row = $view_tbl_hr->fetch_assoc()){
									?>
									<tr>
									<td><center><?php echo $SL++; ?></center></td>
									<td><center><?php echo $view_row['company_name']; ?></center></td>
									<td><center><?php echo $view_row['first_name']; ?> <?php echo $view_row['last_name']; ?></center></td>
									<td><center><?php echo $view_row['agent_email']; ?></center></td>
									<td><center><?php echo $view_row['client_first_name']; ?> <?php echo $view_row['client_first_name']; ?></center></td>
									<td><center><?php echo $view_row['client_email']; ?></center></td>
									<td><center><?php echo $view_row['status']; ?></center></td>
									<td><center><?php echo $view_row['valid_from']; ?></center></td>
									<td><center><?php echo $view_row['valid_to']; ?></center></td>
									
									</tr>
									
									<?php } ?>
									
                                </tbody>
                            </table>
							
<script type="text/javascript">
window.print();
</script>