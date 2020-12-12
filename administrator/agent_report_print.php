<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();


 ?>
 <br/>
							<br>
							<div style="width:1100px;">
							<h3><center>Active All Agent Report</center></h3>
							</div>
							
								<table width="1100" border="1">
                                <thead>
                                    <tr style="background-color:gray;color:white;">
                                        <th>Serial NO</th>
										<th>Full Name</th>
										<th>Address</th>
										<th>Email Address</th>
										<!-- delete<th>Lifetime Client</th>-->
										<th>Annual Client</th>
										<th>Total Client</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								<?php
										$SL = 1;
										$cls_insurance_agent = new cls_insurance_agent();
										$view_insurance_agent = $cls_insurance_agent->insurance_agent_report();
										while($row = $view_insurance_agent->fetch_assoc()){
									?>
									<tr>
									<td><center><?php echo $SL++; ?></center></td>
									<td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></center></td>
									<td><center><?php echo $row['agent_address']; ?></center></td>
									<td><center><?php echo $row['agent_email']; ?></center></td>
									<!-- delete<td><center><//?php echo $row['LifetimeTotal']; ?></center></td>-->
									<td><center><?php echo $row['AnualTotal']; ?></center></td>
									<td><center><?php echo $row['TotalClnt']; ?></center></td>
									</tr>
									
									<?php 
									} 
									?>
                                </tbody>
                            </table>
							
<script type="text/javascript">
window.print();
</script>