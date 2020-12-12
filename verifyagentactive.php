<?php

include('include/header.php');

if(empty($_GET['id_code']))
{
	echo "<script>location.href='index.php';</script>";
}

//$idcode = $_GET['id_code'];

if(isset($_GET['id_code']))
{
	 $id = $_GET['id_code'];
	
	
	 $ok = $db->query("update tbl_insurance_agent set active='1' where mail_verify ='$id'");
	// return $ok;
}
?>
<!-- end header -->
	<section id="featured" class="bg slid">
	<!-- start slider -->

			
	<!-- start slider -->
	<div class="container-fluid bdgckx" style="margin-bottom:-28px;">
		<div class="row">
			<div class="col-lg-12">
	
			</div>
			
		</div>
	</div>	



	</section>
<section id="main-contain">
		
	
<div class="container-fluid register-div" style="background-color:;">

<div class="row">

    <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
	<div style=" margin-left:40px;margin-right:40px;">
		<br><br><br><br>
		
		<h1 class="vv-lg-top hidden-xs"> Congratulations! <br> <!--Your Account is active, -->Please  <a href="login">Login</a> your account. </h1>
		
			<br>
			<br>
			<br>
			<br>
			<br><br>
			<br>
			<br>
			<br>
		
		
	</div>
		
	</div>
</div>

</div>
	</section>
<?php
include('include/footer.php');
?>