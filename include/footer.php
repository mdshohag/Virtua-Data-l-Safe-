<footer>
	
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="copyright">
						<p>&copy; 2017 Shohag - All Rights Reserved</p>
                       
					</div>
				</div>
				<div class="col-lg-7">
				
					<ul class="social-network">
					<!--<li>&copy; 2017 The Virtual Safe - All Rights Reserved</li>style="padding-left:100px;"-->
						 <li >
							<a href="index">Home<!--<i class="fa fa-home fa-2x" aria-hidden="true"></i>--></a>
						</li>
						<li><a href="service">Service</a></li>
						  <li><a href="search">Search</a></li>
						 <li><a href="about-us">About Us</a></li>
						  <li><a href="contact">Contact Us</a></li>
						  <li><a href="blog">Blog</a></li>
						  <li><a href="affiliates">Affiliates</a></li>
						  <li><a href="privacy">Privacy</a></li>
						<li><a href="terms">Terms</a></li>
						
						<li>Follow us:</li>
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						
						
					</ul>
				</div>
				<div class="col-lg-8">
				
					<ul class="social-network">
					
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="alert/alertify.min.js"></script>
<script>
$("#username").click(function(){
    $("#text-box__label").hide();
});
</script>
<script>
$("#pas").click(function(){
    $("#ppp").hide();
});
</script>
<script>
$("#test_pay").submit(function(e){
	e.preventDefault();
	
	var testpayment = $('[name="amt"]').val();
	var access_id = $('[name="access_id"]').val();
	var vsc_id = $('[name="vsc_id"]').val();
	
	if(testpayment == ""){
			alertify.error('Please Enter amount');
			return false;
		}
	$.ajax({
		type:"post",   
		url:"post_url/test_payment.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res >= 1){
				alertify.success("Successful");
				location.href = "access_search.php?accessid="+access_id +"&vscid="+vsc_id;
				//location.href='vscode/index.php';
			}else{
				alertify.error("Please enter 19.95$ ");
			}
		},error: function(){
			alertify.error("Error on Ajax !!");
		} 
	})		
	
})
</script>

<script>
	$(function(){
		$("#login").submit(function(e){
				e.preventDefault();
				var email = $('#email_log').val();
				var password = $('#password_log').val();
			
			if(email == ""){
				alertify.error('Email field is empty');
				return false;
			}		
			
			if(password == ""){
				alertify.error('Password field is empty');
				return false;
			}		
				$.ajax({
					type:"post",
					url:"post_url/post_mlogin.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
					
					if(res == 'no'){
						alertify.error('Username or Password does not match !!');
						return false;
					}
					location.href='member/agent_view';
				}
			})
			
		});
	});
</script>
<script>
	$(function(){
		$("#client_login").submit(function(e){
				e.preventDefault();
				var email = $('#email_log').val();
				var password = $('#password_log').val();
			
			if(email == ""){
				alertify.error('Email field is empty');
				return false;
			}		
			
			if(password == ""){
				alertify.error('Password field is empty');
				return false;
			}		
				$.ajax({
					type:"post",
					url:"post_url/client_login.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
					
					if(res == 'no'){
						alertify.error('Username or Password does not match !!');
						return false;
					}
					location.href='member/index';
				}
			})
			
		});
	});
</script>
<script>
	$(function(){
		$("#vscaccess").submit(function(e){
				e.preventDefault();
				
				var vsc = $('#vsc').val();
			
			
			if(vsc == ""){
				alertify.error('Please Enter Virtual Safe code');
				return false;
			}		
				
				$.ajax({
					type:"post",
					url:"post_url/vscaccess.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
					
					if(res == 'userOrPass'){
						alert('The Virtual Safe code you entered is invalid.  Please enter a valid code or make a payment.');
						return false;
					}else if(res == 'DateExpire'){
						alert('Date has been expired. Please pay and get valid code');
						return false;
					}
					location.href='http://localhost/benefits_hts/vscode/index.php';
				}
			})
			
		});
	});
</script>
<script>
	$(function(){
		$("#vsc_pay_login").submit(function(e){
				e.preventDefault();
			
				$.ajax({
					type:"post",
					url:"post_url/vsc_pay_login.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
										
					location.href='vscode/index.php';
				}
			})
			
		});
	});
</script>
<script>
	$(function(){
		$("#vsauthorize").submit(function(e){
				e.preventDefault();
				
				var fname = $('#fname').val();
				var fname = $('#lname').val();
			
			
			if(fname == ""){
				alertify.error('Please Enter first name');
				return false;
			}	
			if(lname == ""){
				alertify.error('Please Enter last name');
				return false;
			}		
				
				$.ajax({
					type:"post",
					url:"post_url/vsauthorize.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
					
					if(res == 'userOrPass'){
						alert('Your First name and Last name invalid, Please valid name enter.');
						return false;
					}else if(res == 'DateExpire'){
						alert('Date has been expired. Please pay and get valid code');
						return false;
					}
					location.href='vscode/index.php';
				}
			})
			
		});
	});
</script>
<script type="text/javascript">
	$(function(){
		
		$("#affiliate").submit(function(e){
			e.preventDefault();
			
			var fname = $('[name="first_name"]').val();
			var lname = $('[name="last_name"]').val();
			var email = $('[name="email"]').val();
			var ss_tax_id = $('[name="ss_tax_id"]').val();
			var insurance_company = $('[name="insurance_company"]').val();
			var agents_license = $('[name="agents_license"]').val();
			var password = $('[name="password"]').val();
			var repassword = $('[name="password_confirmation"]').val();
			
			
			if(fname == ""){
					alertify.error('Please Enter  First name');
					return false;
				}
			if(lname == ""){
					alertify.error('Please Enter  Last name');
					return false;
				}
			
				
			if(email == ""){
				alertify.error('Please Enter email');
				return false;
			}
			if(ss_tax_id == ""){
				alertify.error('Please Enter Agent SS# or tax ID number');
				return false;
			}
			if(insurance_company == ""){
				alertify.error('Please Enter Agent insurance company name');
				return false;
			}
			if(agents_license == ""){
				alertify.error('Please Enter Agent License');
				return false;
			}
			if(password == ""){
				alertify.error('Please Enter password');
				return false;
			}
			if(repassword == ""){
					alertify.error('Please Enter confirmation password');
					return false;
				}
		
			if (password.length < 8) {
				alertify.error("Password must be between 8-16 characters"); 
				return false;
			} else if (password.length > 16) {
				alertify.error("Password must be between 8-16 characters"); 
				return false;
			} /*else if (password.search(/[a-zA-Z]/) == -1) {
			alertify.error("At last 1 character"); 
			return false;
			}*/ else if (password.search(/[A-Z]/) == -1) {
				alertify.error("At least 1 Upper Case letter"); 
				return false;
			}
			else if (password.search(/\d/) == -1) {
			alertify.error("At least 1 numeric character"); 
			return false;
			} 
			/*else if (password.search(/[\\$@!%*#?&'"^$*+?.()|[\]{}]/) == -1) {
				alertify.error("At last 1 numeric character"); 
				return false;
			}*/
				
			if(password != repassword) {
					alertify.error("Password and confirmation password do not match"); 
					return false;
				}
					
			$.ajax({
				url: "post_url/add_agent.php",
				type: "post",
				data: new FormData(this),
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function(res){
					//alert(res);
					//return false;
					if(res == 1){
						alertify.success('Successful');
						
						location.href='info.php';
						
					}else if(res == 2){
						alertify.error('Username already exists');
					}else{
						alertify.error('Username already exists');
					}
				
				  
				},error: function(){
					alert('Please try again');
				}     
			})
		});
	})
</script>
<script type="text/javascript">
function CheckPassword(password)   
{   
var password=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/;  
if(inputtxt.value.match(password))   
{   
alert('Correct, try another...')  
return true;  
}  
else  
{   
alert('Wrong...!')  
return false;  
}  
}   
</script>
<script type="text/javascript">
	$(function(){
		
		$("#basic_customer").submit(function(e){
			e.preventDefault();
			
			var fname = $('[name="first_name"]').val();
			var lname = $('[name="last_name"]').val();
			//var country_name = $('[name="country_name"]').val();
			//var city = $('[name="city"]').val();
			var email = $('[name="email"]').val();
			var password = $('[name="password"]').val();
			var repassword = $('[name="password_confirmation"]').val();
			
			
			if(fname == ""){
					alertify.error('Please Enter  First name');
					return false;
				}
			if(lname == ""){
					alertify.error('Please Enter  Last name');
					return false;
				}
				/*if(country_name == ""){
					alertify.error('Please Select Country');
					return false;
				}*/
				/*if(city == ""){
					alertify.error('Please Select City');
					return false;
				}*/
			
				
				if(email == ""){
					alertify.error('Please Enter email');
					return false;
				}
				
				
				
				if(password == ""){
					alertify.error('Please Enter password');
					return false;
				}
				if(repassword == ""){
						alertify.error('Please Enter confirmation password');
						return false;
					}
				if(password.length < 6) {
					alertify.error("Password at least 6 Character"); 
					return false;
				}
				if(password.length > 15) {
					alertify.error("The password will be less than 16 characters"); 
					return false;
				}
				
				
				
				if(password != repassword) {
						alertify.error("Password and confirmation password do not match"); 
						return false;
					}
			$.ajax({
				url:"post_url/add_basic_customer.php",
				type:"post",
				data:new FormData(this),
				async: false,
				cache:false,
				contentType: false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
						alertify.success('Successful');
						
						location.href='info.php';
						
					}else if(res == 2){
						alertify.error('Username already exists');
					}else{
						alertify.error('Username already exists');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})
</script>
<script>
	$(function(){
		$("#agentpasswd").submit(function(e){
				e.preventDefault();
					var new_password = $('[name="password"]').val();
					var retype_pass = $('[name="password_con"]').val();

					if(new_password == ""){
						alertify.error('New password field is empty');
						return false;
					}
					
					if(retype_pass == ""){
						alertify.error('Confirm password field is empty');
						return false;
					}
					if (new_password.length < 8) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} else if (new_password.length > 16) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} /* else if (new_password.search(/[a-zA-Z]/) == -1) {
					alertify.error("At last 1 character"); 
					return false;
					}*/ else if (new_password.search(/[A-Z]/) == -1) {
						alertify.error("At last 1 Upper Case letter"); 
						return false;
					}
					else if (new_password.search(/\d/) == -1) {
					alertify.error("At last 1 numeric character"); 
					return false;
					}
					/*else if (new_password.search(/[\\$@!%*#?&'"^$*+?.()|[\]{}]/) == -1) {
						alertify.error("At last 1 numeric character"); 
						return false;
					}*/
					
					if(new_password != retype_pass) {
								alertify.error("New Password and Confirm password do not match"); 
								return false;
							}		
				$.ajax({
					type:"post",
					url:"post_url/agent_password.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
					
					if(res == 1){
					
						alertify.error('NOT');
						
					}else{
						
						alertify.success('Successful');
						location.href='login.php';
					}
				},error:function(){
					alertify.error("Please try again");
				}
				
			})
			
		});
	});
	</script>
<script>
$(function(){
	$("#agentresetpassword").submit(function(e){
			e.preventDefault();
			var new_password = $('[name="password"]').val();
			var retype_pass = $('[name="password_con"]').val();

			if(new_password == ""){
				alertify.error('New password field is empty');
				return false;
			}
			if(retype_pass == ""){
				alertify.error('Confirm password field is empty');
				return false;
			}
			if(new_password.length < 8) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					}
			else if(new_password.length > 16) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					}
				else if (new_password.search(/[A-Z]/) == -1) {
					alertify.error("At last 1 Upper Case letter"); 
					return false;
				}
			else if (new_password.search(/\d/) == -1) {
				alertify.error("At last 1 numeric character"); 
				return false;
			}
			if(new_password != retype_pass) {
						alertify.error("New Password and Confirm password do not match"); 
						return false;
					}		
			$.ajax({
				type:"post",
				url:"post_url/agent_reset_password.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					
				//alert(res);
				//return false;
				
				if(res == 1){
				
					alertify.error('NOT');
					
				}else{
					
					alertify.success('Successful');
					location.href='login.php';
				}
			},error:function(){
				alertify.error("Please try again");
			}
			
		})
		
	});
});
</script>
<script>
$(function(){
	$("#clientresetpassword").submit(function(e){
			e.preventDefault();
			var new_password = $('[name="password"]').val();
			var retype_pass = $('[name="password_con"]').val();

			if(new_password == ""){
				alertify.error('New password field is empty');
				return false;
			}
			if(retype_pass == ""){
				alertify.error('Confirm password field is empty');
				return false;
			}
			if(new_password.length < 8) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					}
			else if(new_password.length > 16) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					}
			else if (new_password.search(/[A-Z]/) == -1) {
						alertify.error("At last 1 Upper Case letter"); 
						return false;
					}
			else if (new_password.search(/\d/) == -1) {
					alertify.error("At last 1 numeric character"); 
					return false;
					}

			if(new_password != retype_pass) {
						alertify.error("New Password and Confirm password do not match"); 
						return false;
					}		
			$.ajax({
				type:"post",
				url:"post_url/client_reset_password.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					
				//alert(res);
				//return false;
				
				if(res == 1){
				
					alertify.error('NOT');
					
				}else{
					
					alertify.success('Successful');
					location.href='client_login.php';
				}
			},error:function(){
				alertify.error("Please try again");
			}
			
		})
		
	});
});
</script>
	<script>
	$(function(){
		$("#clientpasswd").submit(function(e){
				e.preventDefault();
				var new_password = $('[name="password"]').val();
					var retype_pass = $('[name="password_con"]').val();

					if(new_password == ""){
						alertify.error('New password field is empty');
						return false;
					}
					
					if(retype_pass == ""){
						alertify.error('Confirm password field is empty');
						return false;
					}
					if (new_password.length < 8) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} else if (new_password.length > 16) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} /* else if (new_password.search(/[a-zA-Z]/) == -1) {
					alertify.error("At last 1 character"); 
					return false;
					}*/ else if (new_password.search(/[A-Z]/) == -1) {
						alertify.error("At least 1 Upper Case letter"); 
						return false;
					}
					else if (new_password.search(/\d/) == -1) {
					alertify.error("At least 1 numeric Character"); 
					return false;
					}
					/*else if (new_password.search(/[\\$@!%*#?&'"^$*+?.()|[\]{}]/) == -1) {
						alertify.error("At last 1 Special character"); 
						return false;
					}*/
					if(new_password != retype_pass) {
								alertify.error("New Password and Confirm password do not match"); 
								return false;
							}		
				$.ajax({
					type:"post",
					url:"post_url/client_password.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
					
					if(res == 1){
					
						alertify.error('NOT');
						
					}else{
						
						alertify.success('Successful');
						location.href='client_login.php';
					}
				},error:function(){
					alertify.error("Please try again");
				}
				
			})
			
		});
	});
	</script>

<script>
	$(function(){
		$("#uppasswd").submit(function(e){
				e.preventDefault();
				var old_password = $('[name="old_password"]').val();
				var new_password = $('[name="password"]').val();
				var password_con = $('[name="password_con"]').val();
				
				if(old_password == ""){
					alertify.error('old password field is empty');
					return false;
				}	
					if(new_password == ""){
						alertify.error('New password field is empty');
						return false;
					}
					
					if(password_con == ""){
						alertify.error('Confirm password field is empty');
						return false;
					}
					
					if (new_password.length < 8) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} else if (new_password.length > 16) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} /* else if (new_password.search(/[a-zA-Z]/) == -1) {
					alertify.error("At last 1 character"); 
					return false;
					}*/ else if (new_password.search(/[A-Z]/) == -1) {
						alertify.error("At least 1 Upper Case letter"); 
						return false;
					}else if (new_password.search(/\d/) == -1) {
					alertify.error("At least 1 numeric character"); 
					return false;
					}
					/*else if (new_password.search(/[\\$@!%*#?&'"^$*+?.()|[\]{}]/) == -1) {
						alertify.error("At last 1 numeric character"); 
						return false;
					}*/
					
					if(new_password != password_con) {
								alertify.error("New Password and Confirm password do not match"); 
								return false;
							}		
				$.ajax({
					type:"post",
					url:"post_url/new_password.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						if(res==1){

							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="password_con"]').val("");

							alertify.success("Successful");
							location.href='client_login.php';
						//	window.location.reload();


						//location.href='customer/myaccount.php';
					}else{
							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="password_con"]').val("");
							alertify.error('old Password does not match !!');

							//return false;
					}
				}
				
			})
			
		});
	});
	</script>
<script>
	$(function(){
		$("#verify_client").submit(function(e){
				e.preventDefault();
				var user_id = $('[name="user_id"]').val();
				var new_password = $('[name="password"]').val();
				var password_con = $('[name="password_con"]').val();
				
				if(user_id == ""){
					alertify.error('Usre Id field is empty');
					return false;
				}	
					if(new_password == ""){
						alertify.error('New password field is empty');
						return false;
					}
					
					if(password_con == ""){
						alertify.error('Confirm password field is empty');
						return false;
					}
					
					if (new_password.length < 8) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} else if (new_password.length > 16) {
						alertify.error("Password must be between 8-16 characters"); 
						return false;
					} /* else if (new_password.search(/[a-zA-Z]/) == -1) {
					alertify.error("At last 1 character"); 
					return false;
					}*/ else if (new_password.search(/[A-Z]/) == -1) {
						alertify.error("At least 1 Upper Case letter"); 
						return false;
					}else if (new_password.search(/\d/) == -1) {
					alertify.error("At least 1 numeric character"); 
					return false;
					}
					/*else if (new_password.search(/[\\$@!%*#?&'"^$*+?.()|[\]{}]/) == -1) {
						alertify.error("At last 1 numeric character"); 
						return false;
					}*/
					
					if(new_password != password_con) {
								alertify.error("New Password and Confirm password do not match"); 
								return false;
							}		
				$.ajax({
					type:"post",
					url:"post_url/client_new_password.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						if(res >= 1){

							//$('[name="user_id"]').val("");
							//$('[name="new_password"]').val("");
							//$('[name="password_con"]').val("");

							alertify.success("Successful");
							//location.href='client_login.php';
							location.href='member/vscode_agent';

					}else{
					//location.href='member/index';
							//$('[name="user_id"]').val("");
							//$('[name="new_password"]').val("");
							//$('[name="password_con"]').val("");
							alertify.error('User ID do not match, Please check your User ID!!');

							//return false;
					}
				},error:function(){
					alert('Please try again');
				} 
				
			})
			
		});
	});
	</script>
<script type="text/javascript">
	$(function(){
		
		$("#forgotpassword").submit(function(e){
			e.preventDefault();
			var email = $('[name="email"]').val();
				
				if(email == ""){
					alertify.error('Username field is empty');
					return false;
				}
			
			$.ajax({
				type:"post",
				url:"post_url/forgotpassword.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
						
						alert('Please check your email');
						
						location.href='login.php';
						
					}else{
						
						alert('Please check your email');
						
						location.href='login.php';
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})
	
</script>
<script type="text/javascript">
	$(function(){
		
		$("#clientforgotpassword").submit(function(e){
			e.preventDefault();
			var email = $('[name="email"]').val();
				
				if(email == ""){
					alertify.error('Username field is empty');
					return false;
				}
			
			$.ajax({
				type:"post",
				url:"post_url/clientforgotpassword.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
						alert('Please check your email');
						
						location.href='client_login.php';
						
					}else{
						alert('Please check your email');
						
						location.href='client_login.php';
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})
</script>
<script>
function submit_form()
{
	var country = $('[name="country"]').val();
	var city = $('[name="city"]').val();
	var state = $('[name="state"]').val();
	var zip_code = $('[name="zip_code"]').val();
	var first_name = $("#first_name").val();
	if( first_name == "" )
	{
		$(".captcha-err_f").text("Please Enter first Name");
		$("#first_name").focus();
	}
	
	
	var last_name = $("#last_name").val();
	if( last_name == "" )
	{
		$(".captcha-err_l").text("Please Enter Last Name");
		$("#last_name").focus();
	}
	var captcha_code = $("#captcha_code").val();
	if( captcha_code == "" )
	{
		$(".captcha-err").text("Please enter the text from the image");
		$("#captcha_code").focus();
	}
	
	//alert(res);
	//return false;
	else
	{
		$.ajax({
			method: "POST",
			url: "cptcha.php",
			data: { captcha: captcha_code, first_name: first_name,last_name:last_name,country:country,city:city,state:state,zip_code:zip_code}
		})
		.done(function( data ) {
			if( data == 1 )
			{
				$("#captcha_code").val('');
				$("#first_name").val('');
				$("#last_name").val('');
				refresh_captcha();
				window.location.href = "search_result?firstname="+first_name +"&lastname="+last_name +"&countrys="+country +"&citys="+city +"&states="+state +"&zip_codes="+zip_code;
			}
			else
			{
				$(".captcha-err_c").text("Text entered does not match the text in the box.");
				$("#captcha_code").focus();
			}
		});
	}
}
function refresh_captcha()
{
	return document.getElementById("captcha_code").value="",document.getElementById("captcha_code").focus(),document.images['captchaimg'].src = document.images['captchaimg'].src.substring(0,document.images['captchaimg'].src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>	

<script>
$( "#advance" ).click(function() {
  $( ".advance" ).toggle();
});
</script>
<script>
	function submit_forms()
{
	var messages = $('[name="messages"]').val();
	var name = $('[name="name"]').val();
	
	if(name == ""){
		$(".captcha-err-name").text("Please enter Name");
	}
	var email = $('[name="email"]').val();
	
	if(email == ""){
		$(".captcha-err-email").text("Please enter email");
	}
	var captcha_code = $("#captcha_code").val();
	if( captcha_code == "" )
	{
		
		$(".captcha-err").text("Please enter captcha code");
		$("#captcha_code").focus();
	}
	
	else
	{
		$.ajax({
			method: "POST",
			url: "thank_you_contact.php",
			data: { captcha: captcha_code, name: name,email: email,messages: messages }
		})
		.done(function( data ) {
			if( data == 1 )
			{
				$("#captcha_code").val('');
				refresh_captchas();
				alert("Thank you for contacting The Virtual Safe, your message has been forwarded to our customer service");
				window.location.href = "message_confirm.php?names="+name +"&emails="+email +"&messagess="+messages;
					
			}
			else
			{
				$(".captcha-err").text("Invalid captcha! Please try again.");
				$("#captcha_code").focus();
			}
		});
	}
}
function refresh_captchas()
{
	return document.getElementById("captcha_code").value="",document.getElementById("captcha_code").focus(),document.images['captchaimgs'].src = document.images['captchaimgs'].src.substring(0,document.images['captchaimgs'].src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<script type="text/javascript">
	$(function(){

		$('[name="country_name"]').on('change',function(e){
			e.preventDefault();
			//alert('dlkjls');
			//return false;
			var country = $('[name="country_name"]').val();
			//alert(country);
			//return false;
			if(country == ""){
				alertify.error('Select Country name');
				return false;
			}
			var dataString ='para='+country;
			$.ajax({
				type:"post",
				url:"post_url/selectdistrict.php",
				data:dataString,
				success:function(res){
					//$("#xyz").empty();
					$("#xyz").html(res);
				},error:function(){
					alert('Please try again');
				}
			})
		});
	})
</script>

<script>
function goBack() {
    window.history.go(-1);
}
</script>
</body>
</html>