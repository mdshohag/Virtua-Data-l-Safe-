<?php
include('include/header.php');
?>
	<!-- end header -->
	<section id="featured" class="bg slid">
	<!-- start slider -->

			
	<!-- start slider -->
	<div class="container-fluid bdgck" style="margin-bottom:-28px;">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
			<div id="banner">
				
					<img src="img/Contact_Us_Photo.jpg" height="485" alt="" />
				   
					
			</div>
	<!-- end slider -->
			</div>
			
		</div>
	</div>	



	</section>
	<section id="main-contain">
		
		<div class="container conts">
		<section id="contss">
		<div class="row" style="margin-bottom:-10px;">
			<div class="col-lg-3">
				<div class="address">
				<h4 style="color:#56a02c;"></h4>
					<p>VPR VENTURE GROUP LLC<br>
					15389 SOUTH DIXIE HWY<br>
					PALMETTO BAY FL 33157<br><br>
					Support@TheVirtualSafe.com<br>
					Ph: 1-800-604-5309
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-lg-offset-2">
	<!-- Slider -->
			<div class="contact">
				 
                <form id="contact" action="javascript:void(0)" method="post" onsubmit="submit_forms()" >
				<fieldset>
					<legend>Contact US</legend>
                    <div class="form-group">
					<span class="err captcha-err-name"></span><br>
						<label for="exampleInputName">Your Full Name: <span style="color:red;">*</span></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  />
                    </div>
                    <div class="form-group">
					<span class="err captcha-err-email"></span><br>
						<label for="exampleInputEmail">Your Email: <span style="color:red;">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />
                    </div>
                    <div class="form-group">
					<label for="exampleInputName">Message</label>
                        <textarea class="form-control" name="messages" id="messages" rows="5"  placeholder="Message"></textarea>
                       
                    </div>
					<div class="form-group">
						<img src="contact_captcha.php?rand=<?php echo rand(); ?>" id="captchaimgs" height="50" width="350">
						<br> 
						<span class="err captcha-err"></span><br>
						 Enter the code above here:<input placeholder="Captcha" type="text" id="captcha_code">
						<br>
						 Can't read the image? <a class="ccc" href="javascript:void(0);" onClick="refresh_captchas();">Click here to refresh</a>
						
                    </div>
                    
                    <div class="text-center"><button name="submit" type="submit" id="contact-submit" class="btn btn-lg">Send Message</button></div><br>
					</fieldset>
                </form>
              <br>

			</div>
	<!-- end slider -->
			</div>
						
		</div>
		</section>
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
	
	<!--<section class="callaction">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="cta-text">
						<center><h1><a href="login.php" class="btn btn-lg btn-primary">INDIVIDUAL PORTAL</a></h1></center>
						
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="cta-text">
						<center><h1><a href="login.php" class="btn btn-lg btn-primary">AGENT PORTAL</a></h1></center>
					</div>
				</div>	
			</div>
		</div>
	</section>-->
	
	<!--<section id="content">
		
		<!-- divider -->
		<!--<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<center><h1><button type="button" class="btn btn-lg btn-warning">Disclaimers</button></h1></center>
			</div>
		</div>
		</div>
		<!-- end divider -->		
	<!--</section>-->
	
	
<?php
include('include/footer.php');
?>