<?php 
include('include/header.php');

   //$fname = $_GET['firstname']; 
  // $lname = $_GET['lastname'];
	$fname = htmlspecialchars($_GET['firstname'], ENT_QUOTES, 'UTF-8');
	$lname = htmlspecialchars($_GET['lastname'], ENT_QUOTES, 'UTF-8');
	
?>
	<section id="content">
		
		<div class="container">
		<div class="row" style="padding-bottom:95px">
			 <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			 <h1>Search Result</h1>
			  <table class="table table-bordered" >
					<thead>
					  <tr style="background-color:#ffdd99;">
						<th>Account Number</th>
						<th>Reported Name</th>
						<th>Reported Address City/State</th>
					  </tr>
					</thead>
					<tbody>
					 <?php
                        $catp1 = $db->query("select * from tbl_vs_client where client_first_name like '%$fname%' or client_last_name like '%$lname%' ");
                        $catr1 = $catp1->fetch_array();
                        $search_i = $catr1[0];
//SELECT * FROM users WHERE fname like '%".$name."%' OR user_email like '%".$email."%'
                        if(!empty($search_i))
                        {

                        $catp = $db->query("select * from tbl_vs_client where client_first_name like '%$fname%' or client_last_name like '%$lname%' order by client_id asc limit 0, 20");
                        while($catr = $catp->fetch_assoc())

                        {
                            $restId = $catr['client_id'];
                            $ffname = $catr['client_first_name'];
                            $llname = $catr['client_last_name'];
                            $vs_code = $catr['vs_code'];
                            $client_address = $catr['client_address'];
                            

                    ?>
					  <tr >
						<td><a href="access_code.php?access_code=<?php echo $restId; ?>"><?php echo $restId; ?></a></td>
						<td><?php echo $ffname; ?> <?php echo $llname; ?></td>
						<td><?php echo $client_address; ?></td>
					  </tr>
					  <?php
                        }
                        } else {
                            ?>
							<tr>
                            <td colspan="3"><div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
                                No Result Found!!
                            </div></td>
						 </tr>
                            <?php
                        }
                      ?>
					</tbody>
				  </table>
			</div>
		</div>
		</div>
		
		<!-- divider -->
		<!--  <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
			
	</section>
	
<?php
include('include/footer.php');

?>
