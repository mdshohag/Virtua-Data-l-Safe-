<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	
	$cname = $_GET['company_id'];
	
	$renewal_dolors = $db->query("SELECT * From tbl_payment_fees where type='renewal'");
	$renewal = $renewal_dolors->fetch_assoc();
	$renewals = $renewal['amount_fees'];


 ?>
 <br/>
							<br>
							<div style="width:1100px;">
							<h3><center>Company Report</center></h3>
							</div>
							
								<table width="1100" border="1">
                                <thead>
                                    <tr style="background-color:gray;color:white;">
                                        <th>Serial No</th>
										 <th>Company Name</th>
										 <th>Client Name</th>
										 <th>Client Email</th>
										 <th>Product Type</th>
										<th>Valid From</th>
										<th>Valid To</th>
										 <th>Amount</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								<?php
										$SL = 1;
										$TotalAmount = 0;
										$view_tbl_hr = $cls_virtual_safe_client->view_tbl_company_report($cname);
										while($row = $view_tbl_hr->fetch_assoc()){
									?>
									<tr>
									<td><center><?php echo $SL++; ?></center></td>
									<td><center><?php echo $row['company_name']; ?></center></td>
									<td><center><?php echo $row['client_first_name']; ?> <?php echo $row['client_first_name']; ?></center></td>
									<td><center><?php echo $row['client_email']; ?></center></td>
									<td><center><?php echo $row['status']; ?></center></td>
									<td><center><?php echo $row['valid_from']; ?></center></td>
									<td><center><?php echo $row['valid_to']; ?></center></td>
									<td><center><?php echo $row['renewal_number']; ?></center></td>
									</tr>
									
									<?php 
									$TotalAmount = $TotalAmount+$row['renewal_number'];
									} ?>
									<tr>
									<td colspan="8" style="text-align:right;padding-right:20px;">Total Due Amount: $<?php echo $TotalAmount; ?></td>
									</tr>
                                </tbody>
                            </table>
							
<script type="text/javascript">
window.print();
</script>