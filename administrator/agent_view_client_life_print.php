<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$conn = $cls_dbconfig->connection();
$cls_insurance_agent = new cls_insurance_agent();

$agent = $_GET['agent_id'];

$show_agent = $cls_insurance_agent->agent_view($agent);
$agent_data = $show_agent->fetch_assoc();

$show_tvsc = $cls_insurance_agent->agent_view_tvsc_life($agent);

 ?>
 <br/>
 <table style="width:400px;">
    <tr>
     <td><b>Agent Name :</b></td><td><?php echo $agent_data['first_name']; ?> <?php echo $agent_data['last_name']; ?></td>
     </tr>
	 <tr>
	  <td><b>Agent Address :</b></td><td><?php echo $agent_data['agent_address']; ?></td>
	 </tr> 
	 <tr>
	  <td><b>Agent Insurance company : </b></td><td><?php echo $agent_data['agent_company_code']; ?></td>
      </tr>
	 <tr>
		<td><b>Agent Email : </b></td><td><?php echo $agent_data['agent_email']; ?></td> 
	 </tr> 
	 <tr>
	  <td><b>Tax No : </b></td><td><?php echo $agent_data['ss_tax_id']; ?></td>
     </tr>
	 <tr>
	 <td><b>License : </b></td><td> <?php echo $agent_data['agents_license']; ?></td>
	 </tr>
	</table>		
									
									
									
									
									
									
									
									
									
									<br>
								<table width="900" border="1">
                                <thead>
                                    <tr style="background-color:gray;color:white;">
                                        <th><center>Serial No</center></th>
										 <th>Client Name</th>
										<th>Client Email</th>
										<th>Product Type</th>
										<th>Valid From</th>
										<th>Valid To</th>
										
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$i = 1;
										while($tvsc_data = $show_tvsc->fetch_assoc()){
									?>
									<tr>
										<td><center><?php echo $i++; ?></center></td>
										<td><center><?php echo $tvsc_data['client_first_name']; ?> <?php echo $tvsc_data['client_last_name']; ?></center></td>
										<td><center><?php echo $tvsc_data['client_email']; ?></center></td>
										<td><center><?php echo $tvsc_data['status']; ?></center></td>
										<td><center><?php echo $tvsc_data['valid_from']; ?></center></td>
										<td><center><?php echo $tvsc_data['valid_to']; ?></center></td>
										
									  </tr>
									
									<?php } ?>
                                </tbody>
                            </table>
							
<script type="text/javascript">
window.print();
</script>