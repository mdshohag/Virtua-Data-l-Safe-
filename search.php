<?php include('include/header.php');



?>
<section id="featured" class="bg slid">
	<section id="contents">
		<!-- content-search background-color:#fff; -->
		<div class="container-fluid conts" style="margin-top:-0px;">
		<section id="contss">
		<div class="row" style="margin-left:0px; margin-bottom: 2px;">
		<!--<center><h2 style="color:#56a02c;">SEARCH</h2></center>--><br>
			 <div class="col-xs-12 col-sm-12 col-md-6">
				
				<div class="aligncentersd">								
					<p>To conduct a Member search in our database please enter the individual’s first and last name then press the search button at the bottom of the page.<br>

						The result of this search will list the account number, first and last name(s) and address of all our members with that criteria.<br>
						Use the member’s last known address as an identifier and click on his/her respective account number.<br>
						Each of our members has received a unique access code for his/her beneficiary to allow the beneficiary to gain access to the member’s  virtual safe.<br>
						If you are the beneficiary and have the access code, you will be prompted to enter it at that time.<br>
						If you do not have the access code, you must pay a non-refundable fee of $19.95 to gain full access to the members information.<br> Please be advised that only Authorized Representative designated by the Member will be allowed access to the Member’s Virtual Safe. 
</p>

				</div>	
				
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="alignright">								
					<img src="img/Search_Page.jpg"  class="img-responsive" alt="" />
				</div>	
			</div>
			
		</div>
		
		<div class="row" style="margin-left:1px;">
			
			<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="search-cont">
				<p style="">Begin your search by entering the persons first and last name.</p>
				<p style="">If your search yields too many results, you can narrow the results by performing "advanced" searches with the option of adding the middle name, city, state and or zip code.</p>
			</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
			<form  class="form-inline" id="contact" action="javascript:void(0)" method="post" onsubmit="submit_form()">
				
					<div class="form-group">
					<br>
					</div>
					<div class="form-group">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<span class="err captcha-err_f"></span>--><br>
                     <i class="fa fa-chevron-right fontico" aria-hidden="true"></i>  &nbsp;&nbsp;&nbsp;  <input type="text" style="width: 258px" name="first_name" id="first_name" class="form-control first_names" placeholder="First Name">
					</div>
				
					<div class="form-group">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<span class="err captcha-err_l"></span>--><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 258px" name="last_name" id="last_name" class="form-control last_names" placeholder="Last Name" >
					</div><br><br>
					<div class="form-group">
						<i class="fa fa-chevron-right" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;  <a id="advance"> Advanced Search</a>
					</div><br>
					<div class="advance" style="display: none">
					<div class="form-group"><br>
				
                     &nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="country" id="country" class="form-control " placeholder="country ">
					</div>
				
					<div class="form-group"><br>
					 &nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="city" id="city" class="form-control" placeholder="city " >
					</div>
					<div class="form-group"><br>
					
					&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="state" id="state" class="form-control" placeholder="state " >
					</div>
					<div class="form-group"><br>
					 &nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="zip_code" id="zip_code" class="form-control" placeholder="Zip code" >
					</div>
					</div>	<br>			
				<div class="captcha_form">
					<div class="form-group ww">
						<span class="err captcha-err_c"></span>
					</div>
					<div class="form-group">
						<span class="err captcha-err"></span>
					</div><br>
					&nbsp;&nbsp;&nbsp;<div class="form-group use">
					
						<input placeholder="Captcha" type="text" tabindex="2" id="captcha_code">
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="form-group"><br>
						 <img src="captcha.php?rand=<?php echo rand(); ?>" id="captchaimg" height="50" width="200"><br>
						   <i class="fa fa-refresh" aria-hidden="true"></i> <a class="ccc" href="javascript:void(0);" onClick="refresh_captcha();">Refresh</a>
					</div>
				</div>
					<br>
					
					
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<button class="btn btn-warning btn-sm" name="submit" type="submit" id="contact-submit">Search</button>
				
				&nbsp;&nbsp;&nbsp;<a class="btn btn-warning btn-sm" >Clear</a>
				
				
			</form>
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
	</section>
	
<?php
include('include/footer.php');

?>
