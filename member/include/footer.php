<?php
$view_insurance_company = $cls_insurance_company->view_insurance_company();
$view_bank_master = $cls_bank_master->view_bank_master();

?>				
<br>
										  <br>
										  <br><br>
										  <br>
										  <br>
			<footer>
				<div class="container-fluid">
				
					<p class="copyright">&copy; 2017 The Virtual Safe - All Rights Reserved</p>
				</div>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
	
	
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	
	
	<script src="alert/alertify.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	<script>
    $(document).ready(function() {
        $('#dataTables-inbox').DataTable({
            responsive: true
        });
    });
    </script>
	
	
	<script>
	
	$(function(){
		$("#password").submit(function(e){
			e.preventDefault();
			var old_password = $('[name="old_password"]').val();
			var new_password = $('[name="new_password"]').val();
			var retype_pass = $('[name="retype_pass"]').val();

				
		if(old_password == ""){
				alertify.error('old password field is empty');
				return false;
			}	
						
			if(new_password == ""){
				alertify.error('New password field is empty');
				return false;
			}
			if(retype_pass == ""){
				alertify.error('retype password field is empty');
				return false;
			}
			if (new_password.length < 8) {
				alertify.error("Password at least 8 Character"); 
				return false;
			} else if (new_password.length > 16) {
				alertify.error("The password will be less than 17 characters"); 
				return false;
			} /*else if (new_password.search(/[\\$@!%*#?&'"^$*+?.()|[\]{}]/) == -1){
			alertify.error("At last 1 special"); 
			return false;
			} else if (new_password.search(/[a-zA-Z]/) == -1) {
			alertify.error("At last 1 character"); 
			return false;
			}*/ else if (new_password.search(/[A-Z]/) == -1) {
				alertify.error("At last 1 Upper Case letter"); 
				return false;
			} else if (new_password.search(/\d/) == -1) {
				alertify.error("At last 1 numeric character"); 
				return false;
			}
			if(new_password != retype_pass) {
						alertify.error("New Password and Retype password do not match"); 
						return false;
					}
			
			$.ajax({
					type:"post",
					url:"post_url/pass_change.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						if(res==1){

							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="retype_pass"]').val("");

							alertify.success("Successful");
						//	window.location.reload();


						//location.href='customer/myaccount.php';
					}else{
							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="retype_pass"]').val("");
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
		$("#client_password").submit(function(e){
			e.preventDefault();
			var old_password = $('[name="old_password"]').val();
			var new_password = $('[name="new_password"]').val();
			var retype_pass = $('[name="retype_pass"]').val();

				
		if(old_password == ""){
				alertify.error('old password field is empty');
				return false;
			}	
			
			if(new_password == ""){
				alertify.error('New password field is empty');
				return false;
			}
			if(retype_pass == ""){
				alertify.error('retype password field is empty');
				return false;
			}
			if (new_password.length < 8) {
				alertify.error("Password at least 8 Character"); 
				return false;
			} else if (new_password.length > 16) {
				alertify.error("The password will be less than 17 characters"); 
				return false;
			} /*else if (new_password.search(/[\\$@!%*#?&'"^$*+?.()|[\]{}]/) == -1) {
			alertify.error("At last 1 special"); 
			return false;
			} else if (new_password.search(/[a-zA-Z]/) == -1) {
			alertify.error("At last 1 character"); 
			return false;
			}*/ else if (new_password.search(/[A-Z]/) == -1) {
				alertify.error("At last 1 Upper Case letter"); 
				return false;
			}else if (new_password.search(/\d/) == -1) {
				alertify.error("At last 1 numeric character"); 
				return false;
			}
			
			if(new_password != retype_pass) {
						alertify.error("New Password and Retype password do not match"); 
						return false;
					}
			
			$.ajax({
					type:"post",
					url:"post_url/client_pass_change.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						if(res==1){

							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="retype_pass"]').val("");

							alertify.success("Successful");
						//	window.location.reload();


						//location.href='customer/myaccount.php';
					}else{
							$('[name="old_password"]').val("");
							$('[name="new_password"]').val("");
							$('[name="retype_pass"]').val("");
							alertify.error('old Password does not match !!');

							//return false;
					}
				}
			})
			
		});
	});
	</script>
<script type="text/javascript">
	$(function(){
		
		$("#add_insurance_company").submit(function(e){
			e.preventDefault();
			
			var icname = $('[name="icname"]').val();
			var address = $('[name="address"]').val();
			var description = $('[name="description"]').val();
			
			
			if(icname == ""){
					alertify.error('Please Enter Insurance Company Name');
					return false;
				}
				
				if(address == ""){
					alertify.error('Please Enter Insurance Company Address');
					return false;
				}
				if(description == ""){
					alertify.error('Please Enter Insurance Company Description ');
					return false;
				}
			$.ajax({
				type:"post",
				url:"post_url/add_insurance_company.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_insurance_company.php';
						
					}else{
						alertify.error('NOT insert');
						
					}
				
				  
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script>
$("#add_information").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var frist_name = $('[name="frist_name"]').val();
	var last_name = $('[name="last_name"]').val();
	var ss_tax_id = $('[name="ss_tax_id"]').val();
	var companycode = $('[name="companycode"]').val();
	var agents_license = $('[name="agents_license"]').val();
	var address = $('[name="address"]').val();
	
	if(frist_name == ""){
			alertify.error('Please Enter Frist Name');
			return false;
		}
	if(last_name == ""){
			alertify.error('Please Enter Last Name');
			return false;
		}
	if(ss_tax_id == ""){
			alertify.error('Please Enter Agent SS# or tax ID number');
			return false;
		}
		if(companycode == ""){
			alertify.error('Please Enter Company Name');
			return false;
		}
		if(agents_license == ""){
			alertify.error('Please Enter Agent License');
			return false;
		}
		
	
	if(address == ""){
			alertify.error('Please Enter Address');
			return false;
		}
		
	$.ajax({
		type:"post",   
		url:"post_url/add_information.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				alertify.success("Successful");
				location.href='agent_view.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>

<script type="text/javascript">
	$(function(){
		
		$("#addvs_client").submit(function(e){
			e.preventDefault();
			
			var fname = $('[name="fname"]').val();
			var lname = $('[name="lname"]').val();
			var email = $('[name="email_name"]').val();
			var address = $('[name="address"]').val();
			
		
			
			
			if(fname == ""){
					alertify.error('Please Enter  First name');
					return false;
				}
			if(lname == ""){
					alertify.error('Please Enter  Last name');
					return false;
				}
			
			if(email == ""){
					alertify.error('Please Enter Client Email');
					return false;
				}
			if(address == ""){
					alertify.error('Please Enter Address');
					return false;
				}
			$.ajax({
				type:"post",
				url:"post_url/add_virtual_safe_client.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
						alert('A email has been sent to email for future Processing');
						
						location.href='add_virtual_safe_client.php';
						
					}else if(res == 2){
						alertify.error('Exist Already Email');
					}else if(res == 4){
						alertify.error('Exist Already Virtual Safe Code');
					}else{
						alertify.error('Exist Already Email');
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
		
		$("#vs_client_details").submit(function(e){
			e.preventDefault();
			
			var fname = $('[name="fname"]').val();
			var lname = $('[name="lname"]').val();
			var email = $('[name="email_name"]').val();
			var address = $('[name="address"]').val();
			
		
			
			
			if(fname == ""){
					alertify.error('Please Enter  First name');
					return false;
				}
			if(lname == ""){
					alertify.error('Please Enter  Last name');
					return false;
				}
			
			if(email == ""){
					alertify.error('Please Enter Client Email');
					return false;
				}
			if(address == ""){
					alertify.error('Please Enter Address');
					return false;
				}
			$.ajax({
				type:"post",
				url:"post_url/agent_add_virtual_safe_client.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
					
						//alert('A email has been sent to email for future Processing');
						window.location.href = "view_client?emailid="+email;
						//location.href='add_virtual_safe_client.php';
						
					}else if(res == 2){
						alertify.error('Exist Already Email');
					}else if(res == 4){
						alertify.error('Exist Already Virtual Safe Code');
					}else{
						alertify.error('Exist Already Email');
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
		
		$("#upvs_client").submit(function(e){
			e.preventDefault();
			
			var fname = $('[name="fname"]').val();
			var lname = $('[name="lname"]').val();
			
			var email = $('[name="email_name"]').val();
			var address = $('[name="address"]').val();
						
			
			
			
			
			if(fname == ""){
					alertify.error('Please Enter  First name');
					return false;
				}
			if(lname == ""){
					alertify.error('Please Enter  Last name');
					return false;
				}
			
			if(email == ""){
					alertify.error('Please Enter Client Email');
					return false;
				}
			if(address == ""){
					alertify.error('Please Enter Address');
					return false;
				}
			
				
			$.ajax({
				type:"post",
				url:"post_url/edit_virtual_safe_client.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					
					if(res >= 1){
						alert('A email has been sent to email for future Processing');
						
						location.href='show_virtual_safe_client.php';
						
					}else{
						alertify.error('Not Update');
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

	$('[name="client_id"]').on('change',function(e){
			e.preventDefault();

		var client_id = $('[name="client_id"]').val();
		
		if(client_id == ""){
			alertify.error('Select Client Email');
			return false;
		}
		var dataString ='client_vsc='+client_id;
		 //alert(dataString);
		//return false;
		$.ajax({
			type:"post",
			url:"post_url/client_data.php",
			data:dataString,
			success:function(res){
				//alert(res);
				//return false;
				//$("#area").empty();
				$("#result").html(res);
			},error:function(){
				alert('Please try again');
			}
		})
	});
	})

</script>
<script type="text/javascript">
	$(function(){
		
		$("#addvs_client_details").submit(function(e){
			e.preventDefault();
			
			var client_id = $('[name="client_id"]').val();
			var fname = $('[name="frist_name"]').val();
			var lname = $('[name="last_name"]').val();
		
			
			if(client_id == ""){
					alertify.error('Please Select client Email');
					return false;
				}
			if(fname == ""){
					alertify.error('Please Enter  First name');
					return false;
				}
			if(lname == ""){
					alertify.error('Please Enter  Last name');
					return false;
				}
			
			
				
			$.ajax({
				type:"post",
				url:"post_url/add_client_details.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
						alertify.success('Successful');
						
						location.href='add_client_detail.php';
						
					}else{
						alertify.error('Not Insert');
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
		
		$("#add_bank_master").submit(function(e){
			e.preventDefault();
			
			var bank_name = $('[name="bank_name"]').val();
			var bank_address = $('[name="bank_address"]').val();
			
			
			if(bank_name == ""){
					alertify.error('Please Enter bank name');
					return false;
				}
				
				if(bank_address == ""){
					alertify.error('Please Enter Bank Address');
					return false;
				}
			$.ajax({
				type:"post",
				url:"post_url/add_bank_master.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_bank_master.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}
			})
		});
	})
</script>

<script>
$("#information_update").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var frist_name = $('[name="frist_name"]').val();
	var last_name = $('[name="last_name"]').val();
	var country_name = $('[name="country_name"]').val();
	var city = $('[name="city"]').val();
	var state = $('[name="state"]').val();
	var address = $('[name="address"]').val();
	var zip_code = $('[name="zip_code"]').val();
	
	if(frist_name == ""){
			alertify.error('Please Enter Frist Name');
			return false;
		}
	if(last_name == ""){
			alertify.error('Please Enter Last Name');
			return false;
		}
	if(country_name == ""){
			alertify.error('Please Enter Country Name');
			return false;
		}
	if(city == ""){
			alertify.error('Please Enter City Name');
			return false;
		}
	if(state == ""){
			alertify.error('Please Enter state Name');
			return false;
		}
	if(address == ""){
			alertify.error('Please Enter Address');
			return false;
		}
	if(zip_code == ""){
			alertify.error('Please Enter Zip code');
			return false;
		}
		
	$.ajax({   
		url:"post_url/edit_information.php",
		type:"post",
		data:new FormData(this),
		async: false,
		cache:false,
		contentType:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
				//location.href='index.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script>
$("#agent_information_update").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var frist_name = $('[name="frist_name"]').val();
	var last_name = $('[name="last_name"]').val();
	var country_name = $('[name="country_name"]').val();
	var city = $('[name="city"]').val();
	var state = $('[name="state"]').val();
	var address = $('[name="address"]').val();
	var zip_code = $('[name="zip_code"]').val();
	
	if(frist_name == ""){
			alertify.error('Please Enter Frist Name');
			return false;
		}
	if(last_name == ""){
			alertify.error('Please Enter Last Name');
			return false;
		}
	if(country_name == ""){
			alertify.error('Please Enter Country Name');
			return false;
		}
	if(city == ""){
			alertify.error('Please Enter City Name');
			return false;
		}
	if(state == ""){
			alertify.error('Please Enter state Name');
			return false;
		}
	if(address == ""){
			alertify.error('Please Enter Address');
			return false;
		}
	if(zip_code == ""){
			alertify.error('Please Enter Zip code');
			return false;
		}
		
	$.ajax({
		type:"post",   
		url:"post_url/agent_edit_information.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				 window.history.go(-1);
				alertify.success("Successful");
				//location.href='index.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script type="text/javascript">
function showDiv(elem){
   if(elem.value == 'yes'){
     document.getElementById('hidden_div').style.display = "block";
	 }
	 if(elem.value == 'no')
      document.getElementById('hidden_div').style.display = "none";
	  
}
</script>


<script type="text/javascript">
function showDivp(elem){
   if(elem.value == 'Property'){
     document.getElementsByClassName('property_div')[0].style.display = "block";
	 }

	else if(elem.value == 'Stocks'){
      document.getElementsByClassName('property_div')[0].style.display = "none";
	  document.getElementsByClassName('asset_address')[0].value = "";
	  
	  document.getElementsByClassName('boat_div')[0].style.display = "none";
	   document.getElementsByClassName('boat_name')[0].value = "";
	   document.getElementsByClassName('other_div')[0].style.display = "none";
	    document.getElementsByClassName('other_name')[0].value = "";
	  }
	  else if(elem.value == 'Boat'){
		document.getElementsByClassName('property_div')[0].style.display = "none";
		document.getElementsByClassName('asset_address')[0].value = "";
		document.getElementsByClassName('stocks_div')[0].style.display = "none";
		document.getElementsByClassName('company_name')[0].value = "";
		document.getElementsByClassName('other_div')[0].style.display = "none";
	    document.getElementsByClassName('other_name')[0].value = "";
	  
	  }
	  else if(elem.value == 'Other'){
		
	  document.getElementsByClassName('property_div')[0].style.display = "none";
		document.getElementsByClassName('asset_address')[0].value = "";
		document.getElementsByClassName('stocks_div')[0].style.display = "none";
		document.getElementsByClassName('company_name')[0].value = "";
		 document.getElementsByClassName('boat_div')[0].style.display = "none";
	   document.getElementsByClassName('boat_name')[0].value = "";
	  
	  }
     if(elem.value == 'Stocks'){
		document.getElementsByClassName('stocks_div')[0].style.display = "block";
	 } 
	 if(elem.value == 'Boat'){
		document.getElementsByClassName('boat_div')[0].style.display = "block";
	 }
	 if(elem.value == 'Other'){
		document.getElementsByClassName('other_div')[0].style.display = "block";
	 }
	 
	 else if(elem.value == 'Property'){
		document.getElementsByClassName('stocks_div')[0].style.display = "none";
		document.getElementsByClassName('company_name')[0].value = "";
		document.getElementsByClassName('boat_div')[0].style.display = "none";
	    document.getElementsByClassName('boat_name')[0].value = "";
		document.getElementsByClassName('other_div')[0].style.display = "none";
	    document.getElementsByClassName('other_name')[0].value = "";
	  
	  
	  }
	  
	  
	
}
</script>

	
<script type="text/javascript">
	$(function(){
		
		$("#addvsclient_location").submit(function(e){
			e.preventDefault();
			
			
			$.ajax({
				type:"post",
				url:"post_url/add_vs_client_location.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
					
						alertify.success('Successful');
						location.href='index.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>	
<script type="text/javascript">
	$(function(){
		
		$("#agent_addvsclient_location").submit(function(e){
			e.preventDefault();
			
			
			$.ajax({
				type:"post",
				url:"post_url/agent_add_vs_client_location.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
						location.href = location.href;
						alertify.success('Successful');
							
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){
		
		$("#add_authorized").submit(function(e){
			e.preventDefault();
			
			
			$.ajax({
				type:"post",
				url:"post_url/add_authorized.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
					
						alertify.success('Successful');
						location.href='index.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){
		
		$("#agent_add_authorized").submit(function(e){
			e.preventDefault();
			
			$.ajax({
				type:"post",
				url:"post_url/agent_add_authorized.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
						location.href = location.href;
						alertify.success('Successful');
							
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script>
$("#authorized_update ").submit(function(e){
	e.preventDefault();
	
	
	$.ajax({
		type:"post",   
		url:"post_url/edit_autorized.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
				//location.href='index.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script>
$("#agent_authorized_update ").submit(function(e){
	e.preventDefault();
	
	
	$.ajax({
		type:"post",   
		url:"post_url/agent_edit_autorized.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script type="text/javascript"> 
	$(".authorized_delete").click(function(){
		var authorized_delet_id=$(this).attr('authorized_delet');
		//alert(asset_delete_id);
		//return false;
		var confirm = alertify.confirm('Are you sure want to delete Authorized Representative .').set('onok', function(closeEvent){  
		//	alertify.alert(insurance_delete_id);
		 var dataString ='authorized='+authorized_delet_id;
		 
		 $.ajax({
		  type:"post",
		  url:"post_url/authorized_delete.php",
		  data:dataString,
		  success:function(res){
			window.history.go(-1);
			//location.href='index.php';
		  }
		  ,error:function(){
		   alert('Please try again');
		  }
			  
		 });

	   });
		 confirm.set({'title':'Authorized Representative'});
	});
</script>	
<script type="text/javascript">
	$(function(){
		
		$("#add_insurance").submit(function(e){
			e.preventDefault();
			
			
			var insurancecompanycode = $('#insurancecompanycode').val();
			//var client_id = $('#client_id').val();
			//alert(client_id);
				//	return false;
			var insurance_name = $('#insurance_name').val();
			//var policy_number = $('#policy_number').val();
			
			if(insurancecompanycode== ""){
					alertify.error('Please Select Insurance Company ');
					return false;
				}
			if(insurance_name == ""){
					alertify.error('Please Enter Insurance Type');
					return false;
				}
			
				
			$.ajax({
				url:"post_url/add_vs_client_insurance.php",
				type:"post",
				data:new FormData(this),
				async:false,
				cache:false,
				contentType: false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
					
						alertify.success('Successful');
						location.href='index.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){
		
		$("#agent_add_insurance").submit(function(e){
			e.preventDefault();
			
			
			var insurancecompanycode = $('#insurancecompanycode').val();
			//var client_id = $('#client_id').val();
			//alert(client_id);
				//	return false;
			var insurance_name = $('#insurance_name').val();
			//var policy_number = $('#policy_number').val();
			
			if(insurancecompanycode== ""){
					alertify.error('Please Select Insurance Company ');
					return false;
				}
			if(insurance_name == ""){
					alertify.error('Please Enter Insurance Type');
					return false;
				}
			
				
			$.ajax({
				type:"post",
				url:"post_url/agent_add_vs_client_insurance.php",
				data:new FormData(this),
				contentType: false,
				async:false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
						location.href = location.href;
						alertify.success('Successful');
						//location.href='index.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>

<script>
$("#insurance_update ").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var insurancecompanycode = $('[name="insurancecompanycode"]').val();
	var insurance_name = $('[name="insurance_name"]').val();
	//var policy_number = $('[name="policy_number"]').val();
	
	if(insurancecompanycode == ""){
			alertify.error('Please Select Insurance Company');
			return false;
		}
	if(insurance_name == ""){
			alertify.error('Enter Insurance Type');
			return false;
		}
	
		
	$.ajax({
		type:"post",   
		url:"post_url/edit_insurance.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
				//location.href='index.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script>
$("#agent_insurance_update ").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var insurancecompanycode = $('[name="insurancecompanycode"]').val();
	var insurance_name = $('[name="insurance_name"]').val();
	//var policy_number = $('[name="policy_number"]').val();
	
	if(insurancecompanycode == ""){
			alertify.error('Please Select Insurance Company');
			return false;
		}
	if(insurance_name == ""){
			alertify.error('Enter Insurance Type');
			return false;
		}
	
		
	$.ajax({
		type:"post",   
		url:"post_url/agent_edit_insurance.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				 window.history.go(-1);
				alertify.success("Successful");
				
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script>
function goBack() {
    window.history.go(-1);
}
</script>
<script type="text/javascript"> 
	$(".insurance_delete").click(function(){
		var insurance_delete_id=$(this).attr('insurance_delet');
		//alert(insurance_delete_id);
		//return false;
		var confirm = alertify.confirm('Are you sure want to delete Insurance.').set('onok', function(closeEvent){  
		//	alertify.alert(insurance_delete_id);
		 var dataString ='insurance='+insurance_delete_id;
		 
		 $.ajax({
		  type:"post",
		  url:"post_url/insurance_delete.php",
		  data:dataString,
		  success:function(res){
			window.history.go(-1);
			//location.href='index.php';
		  }
		  ,error:function(){
		   alert('Please try again');
		  }
			  
		 });

	   });
		 confirm.set({'title':'Insurance'});
	});
</script>

<script type="text/javascript">
	$(function(){
		
		$("#add_vsc_asset").submit(function(e){
			e.preventDefault();
			
			
			var asset_type = $('[name="asset_type"]').val();
			
			if(asset_type== ""){
					alertify.error('Please Select Asset Type');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/add_vs_client_asset.php",
				data:new FormData(this),
				contentType:false,
				async:false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
					
						alertify.success('Successful');
						location.href='index.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){
		
		$("#agent_add_vsc_asset").submit(function(e){
			e.preventDefault();
			
			
			var asset_type = $('[name="asset_type"]').val();
			
			if(asset_type== ""){
					alertify.error('Please Select Asset Type');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/agent_add_vs_client_asset.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
						location.href = location.href;
						alertify.success('Successful');
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script>
$("#asset_update").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var asset_type = $('[name="asset_type"]').val();
	
	if(asset_type == ""){
			alertify.error('Please Select Asset type');
			return false;
		}
	$.ajax({
		type:"post",   
		url:"post_url/edit_asset.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
				//location.href='index.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script>
$("#agent_asset_update").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var asset_type = $('[name="asset_type"]').val();
	
	if(asset_type == ""){
			alertify.error('Please Select Asset type');
			return false;
		}
	$.ajax({
		type:"post",   
		url:"post_url/agent_edit_asset.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script> 
<script type="text/javascript"> 
	$(".asset_delete").click(function(){
		var asset_delete_id=$(this).attr('asset_delet');
		//alert(asset_delete_id);
		//return false;
		var confirm = alertify.confirm('Are you sure want to delete Asset .').set('onok', function(closeEvent){  
		//	alertify.alert(insurance_delete_id);
		 var dataString ='asset='+asset_delete_id;
		 
		 $.ajax({
		  type:"post",
		  url:"post_url/asset_delete.php",
		  data:dataString,
		  success:function(res){
			window.history.go(-1);
			//location.href='index.php';
		  }
		  ,error:function(){
		   alert('Please try again');
		  }
			  
		 });

	   });
		 confirm.set({'title':'Asset'});
	});
</script>

<script type="text/javascript">
	$(function(){
		
		$("#addvsbank").submit(function(e){
			e.preventDefault();
			
			
				
			$.ajax({
				type:"post",
				url:"post_url/add_vs_client_bank.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
					
						alertify.success('Successful');
						location.href='index.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){
		
		$("#agent_addvsbank").submit(function(e){
			e.preventDefault();
			
			
				
			$.ajax({
				type:"post",
				url:"post_url/agent_add_vs_client_bank.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
						location.href = location.href;
						alertify.success('Successful');
												
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})
</script>
<script>
$("#bank_update ").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var bank_name = $('[name="bank_name"]').val();
	
	var acount_type = $('[name="acount_type"]').val();
	
	if(bank_name == ""){
			alertify.error('Please Select Bank Name');
			return false;
		}
	
	if(acount_type == ""){
			alertify.error('Enter Acount Type');
			return false;
		}
		
	$.ajax({
		type:"post",   
		url:"post_url/edit_bank.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
				//location.href='index.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script>
$("#agent_bank_update ").submit(function(e){
	e.preventDefault();
	
	//var update_reg = $('[name="customer_id"]').val();
	//alert(update_reg);
	//return false;
	var bank_name = $('[name="bank_name"]').val();
	
	var acount_type = $('[name="acount_type"]').val();
	
	if(bank_name == ""){
			alertify.error('Please Select Bank Name');
			return false;
		}
	
	if(acount_type == ""){
			alertify.error('Enter Acount Type');
			return false;
		}
		
	$.ajax({
		type:"post",   
		url:"post_url/agent_edit_bank.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script type="text/javascript"> 
	$(".bank_delete").click(function(){
		var bank_delete_id=$(this).attr('bank_delet');
		//alert(asset_delete_id);
		//return false;
		var confirm = alertify.confirm('Are you sure want to delete Bank .').set('onok', function(closeEvent){  
		//	alertify.alert(insurance_delete_id);
		 var dataString ='bank='+bank_delete_id;
		 
		 $.ajax({
		  type:"post",
		  url:"post_url/bank_delete.php",
		  data:dataString,
		  success:function(res){
			window.history.go(-1);
			//location.href='index.php';
		  }
		  ,error:function(){
		   alert('Please try again');
		  }
			  
		 });

	   });
		 confirm.set({'title':'Bank'});
	});
</script>
<script>
$("#testament_update ").submit(function(e){
	e.preventDefault();
	
	//var typewill = $('[name="typewill"]').val();
	
	/*if(typewill == ""){
			alertify.error('Please Select testament');
			return false;
		}*/
	var location_testament = $('[name="location_testament"]').val();
	
	if(location_testament == ""){
			alertify.error('Please Enter Location of Client’s will and testament');
			return false;
		}
	$.ajax({
		type:"post",   
		url:"post_url/edit_testament.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
				//location.href='index.php';
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script>
$("#agent_testament_update ").submit(function(e){
	e.preventDefault();
	
	//var typewill = $('[name="typewill"]').val();
	
	/*if(typewill == ""){
			alertify.error('Please Select testament');
			return false;
		}*/
	var location_testament = $('[name="location_testament"]').val();
	
	if(location_testament == ""){
			alertify.error('Please Enter Location of Client’s will and testament');
			return false;
		}
	$.ajax({
		type:"post",   
		url:"post_url/agent_edit_testament.php",
		data:new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(res){
			//alert(res);
			//return false;
			
			if(res == 1){
				window.history.go(-1);
				alertify.success("Successful");
			}else{
				alertify.error("Not updated !!");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
</script>
<script type="text/javascript"> 
	$(".testament_delete").click(function(){
		var testament_delet_id=$(this).attr('testament_delet');
		//alert(asset_delete_id);
		//return false;
		var confirm = alertify.confirm('Are you sure want to delete Testament .').set('onok', function(closeEvent){  
		//	alertify.alert(insurance_delete_id);
		 var dataString ='testament='+testament_delet_id;
		 
		 $.ajax({
		  type:"post",
		  url:"post_url/testament_delete.php",
		  data:dataString,
		  success:function(res){
			window.history.go(-1);
			//location.href='index.php';
		  }
		  ,error:function(){
		   alert('Please try again');
		  }
			  
		 });

	   });
		 confirm.set({'title':'Location Testament'});
	});
</script>

<script>
$(function(){
	$("#signouts").click(function(e){
		e.preventDefault();
		//alert('ok');
		$.ajax({
			type:'post',
			url:'post_url/signout.php',
			success:function(res){
				//alert(res);
				if(res == '1'){
					location.href='index.php';
				}else{
					alertify.error('Error on Logout');
				}
			}
		})
	});
})
</script>
<script>
$(function(){
	$("#signouts").click(function(e){
		e.preventDefault();
		//alert('ok');
		$.ajax({
			type:'post',
			url:'post_url/signout.php',
			success:function(res){
				//alert(res);
				if(res == '1'){
					location.href='index.php';
				}else{
					alertify.error('Error on Logout');
				}
			}
		})
	});
})
</script>
<script> 
var i=1;  
      
 $(document).ready(function(){  
       $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<div id="rows'+i+'"><br><div class="form-group"><div class="col-sm-offset-9 col-sm-3"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removes">X</button></div></div><br><br><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="InsuranceCompanyCode"> Insurance Company : <span class="required">*</span> </label><div class="col-sm-6 col-xs-10"><input name="insurancecompanycode[]" id="insurancecompanycode" class="form-control" title="Enter Insurance Company Name" placeholder="Insurance Company Name" value="" type="text" required></div></div><br><br><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="InsuranceName">  Insurance Type: <span class="required">*</span> </label><div class="col-sm-6 col-xs-10"><input name="insurance_name[]" id="insurance_name" class="form-control" title="Enter Insurance Type" placeholder="Insurance Type" value="" type="text" required></div></div><br><br><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark Or Address : </label><div class="col-sm-6 col-xs-10"> <textarea class="form-control Remark" name="remark[]" id="" title="Enter Remark" placeholder="Enter Insurance Comapny Remark Or Address"  rows="3"></textarea></div></div><div id="save_file" class="form-group"><div class="col-sm-offset-5 col-sm-7"><br><button type="submit" class="btn btn-success">Save</button></div></div> </div>');  
		   //$("h1, h2, p").removeClass("blue");
		   //$("#save_file").show();
		   //<br><br><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Policy_Number">  Policy Number: <span class="required">*</span> </label><div class="col-sm-6 col-xs-10"><input name="policy_number[]" id="policy_number" class="form-control" title="Policy Number" placeholder="Policy Number" value="" type="text" required></div></div>
		  
      }); 
     	 
      $(document).on('click', '.btn_removes', function(){  
           var button_id = $(this).attr("id");   
           $('#rows'+button_id+'').remove();  
		   $('#add').show();
      });
 });  
 </script>
 <script>
$('#add').click( function () {
$('#add').hide();
});
</script>
 <!-- <div class="form-group"><div class="col-sm-offset-5 col-sm-7"><button type="submit" class="btn btn-success">Save</button></div></div>-->
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add_row').click(function(){  
           i++;  
           $('#dynamic_form').append('<div id="row'+i+'"><br><div class="form-group"><div class="col-sm-offset-9 col-sm-3"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div><div class="form-group" ><label class="col-sm-4 col-xs-12 control-label" for="Asset_Type"> Asset Type : <span class="required">*</span> </label><div class="col-sm-6 col-xs-10"><select name="asset_type[]" id="asset_type" class="form-control" title="Select a Asset Type" onchange="showDivp(this)" required><option value="">-- Select Asset Type--</option><option value="Property">Property</option><option value="Stocks">Stocks</option><option value="Boat">Boat</option><option value="Other">Other</option></select></div></div><div class="property_div" style="display:none"><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Asset_Address">If Property Address detail : </label><div class="col-sm-6 col-xs-10"> <textarea class="form-control asset_address" name="asset_address[]" id="" title="Enter Asset Address" placeholder="Enter Asset Address"  rows="3"></textarea></div></div></div><div class="stocks_div" style="display:none"><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Stock, Company Name : </label><div class="col-sm-6 col-xs-10"> <textarea class="form-control company_name" name="company_name[]" id="" title="Enter Company Name" placeholder="Enter Company Name"  rows="3"></textarea></div></div></div><div class="boat_div" style="display:none"><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Boat: </label><div class="col-sm-6 col-xs-10"> <textarea class="form-control boat_name" name="boat_name[]" id="" title="Enter boat name" placeholder="Enter Boat Name"  rows="3"></textarea></div></div></div><div class="other_div" style="display:none"><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Company_Name">If Other: </label><div class="col-sm-6 col-xs-10"> <textarea class="form-control other_name" name="other_name[]" id="" title="Enter Other Name" placeholder="Enter Other Name"  rows="3"></textarea></div></div></div><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark : </label><div class="col-sm-6 col-xs-10"> <textarea class="form-control Remark" name="remark[]" id="" title="Enter Remark" placeholder="Enter Remark"  rows="3"></textarea></div></div><div id="save_butn" class="form-group"><div class="col-sm-offset-5 col-sm-7"><button type="submit" class="btn btn-success">Save</button></div></div></div>');  
		  // $("h1, h2, p").removeClass("blue");
		   //$("#save_butn").show();
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
		    $('#add_row').show();
      });
 });  
 </script>
 <script>
 $('#add_row').click( function () {
$('#add_row').hide();
});
</script>
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add_form').click(function(){  
           i++;  
           $('#dynamic_div').append('<div id="row'+i+'"><br><div class="form-group"><div class="col-sm-offset-9 col-sm-3"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Bank_Code">  Bank Name: <span class="required">*</span> </label><div class="col-sm-6 col-xs-10"> <input type="text" name="bank_code[]" id="bank_code" class="form-control" title="Enter a Bank name" placeholder="Enter a Bank name" required></div></div><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Bank_Account_Type"> Bank Account Type : <span class="required">*</span> </label><div class="col-sm-6 col-xs-10"><select name="acount_type[]" id="acount_type" class="form-control" title="Select a Bank Account Type" required> <option value="">-- Select Bank Account Type --</option><option value="Checking">Checking</option><option value="Saving">Saving</option><option value="Certificate of Deposit">Certificate of Deposit</option><option value="Money Market">Money Market</option><option value="Other">Other</option></select></div></div><div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Remark">Remark Or Bank Address : </label><div class="col-sm-6 col-xs-10"> <textarea class="form-control Remark" name="remark[]" id="" title="Enter Remark" placeholder="Enter Remark Or Bank Address"  rows="3"></textarea></div></div><div id="save_butns" class="form-group">	<div class="col-sm-offset-5 col-sm-7">  <button type="submit" class="btn btn-success">Save</button></div></div></div>');  
		   <!--<div class="form-group"><label class="col-sm-4 col-xs-12 control-label" for="Bank_Account"> Account No: <span class="required">*</span> </label><div class="col-sm-6 col-xs-10"><input name="bank_account[]" id="bank_account" class="form-control" title="Bank Account" placeholder="Bank Account" value="" type="text" required></div></div>-->
		    //$("h1, h2, p").removeClass("blue");
		//   $("#save_butns").show();
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
		    $('#add_form').show();
      });
 });  
 </script>
 <script>
 $('#add_form').click( function () {
$('#add_form').hide();
});
</script>
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add_data').click(function(){  
           i++;  
           $('#dynamic_fld').append('<div id="row'+i+'"><br><div class="form-group"><div class="col-sm-offset-9 col-sm-3"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div><div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Location_testament">Location of Client’s will and testament : <span class="required">*</span> </label><div class="col-sm-5 col-xs-10"><textarea class="form-control" name="location_testament[]" id="location_testament" title="Enter Location of Client’s will and testament" placeholder="Enter Location"  rows="3" required></textarea></div></div><div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Remark">Remark : </label><div class="col-sm-5 col-xs-10"> <textarea class="form-control Remark" name="remark[]" id="" title="Enter Remark" placeholder="Enter Remark"  rows="3"></textarea></div></div> <div class="form-group" id="save_butn_t"><div class="col-sm-offset-5 col-sm-7"><button type="submit" class="btn btn-success">Save</button></div></div></div>'); 
			 //$("h1, h2, p").removeClass("blue");
		  // $("#save_butn_t").show();<!--<div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="typewill">Type Testament : <span class="required">*</span> </label><div class="col-sm-5 col-xs-10"><select class="form-control" name="typewill[]" id="typewill" title="Select Type Testament" required><option value="">Select Type Testament</option><option value="Residence">Residence</option><option value="Attorney">Attorney</option><option value="Bank">Bank</option><option value="Other">Other</option></select></div></div>-->
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
		   $('#add_data').show();
      });
 });  
 </script>
 <script>
 $('#add_data').click( function () {
$('#add_data').hide();
});
</script>
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add_author').click(function(){  
           i++;  
           $('#dynamic_fldss').append('<div id="row'+i+'"><br><div class="form-group"><div class="col-sm-offset-9 col-sm-3"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div><div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Authorized">Authorized Representatives First Name : <span class="required">*</span> </label><div class="col-sm-5 col-xs-10"><input class="form-control" name="authorized_fname[]" id="authorized_fname" title="Enter Authorized Representatives First Name" placeholder="Enter Authorized Representatives First Name" required></div></div><div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Authorized">Authorized Representatives Last Name : <span class="required">*</span> </label><div class="col-sm-5 col-xs-10"><input class="form-control" name="authorized_lname[]" id="authorized_lname" title="Enter Authorized Representatives Last Name" placeholder="Enter Authorized Representatives Last Name" required></div></div><div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Relation">Relation : <span class="required"></span> </label><div class="col-sm-5 col-xs-10"><input class="form-control" name="relation[]" id="relation" title="Enter Relation" placeholder="Enter Relation" ></div></div><div class="form-group"><label class="col-sm-5 col-xs-12 control-label" for="Remark">Remark : </label><div class="col-sm-5 col-xs-10"> <textarea class="form-control Remark" name="remark[]" id="" title="Enter Remark" placeholder="Enter Remark"  rows="3"></textarea></div></div> <div class="form-group" id="save_butn_t"><div class="col-sm-offset-5 col-sm-7"><button type="submit" class="btn btn-success">Save</button></div></div></div>'); 
			 //$("h1, h2, p").removeClass("blue");
		  // $("#save_butn_t").show();
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
		   $('#add_author').show();
      });
 });  
 </script>
 <script>
 $('#add_author').click( function () {
$('#add_author').hide();
});
</script>

<script>
$("#test_pay").submit(function(e){
	e.preventDefault();
	
	var testpayment = $('[name="testpayment"]').val();
	
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
				location.href='vscode.php';
			}else{
				alertify.error("Please enter 75$ ");
			}
		},error: function(){
			alertify.error("Please try again");
		}          
	})		
	
})
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



</body>
 <!--$('#dynamic_field').append('<tr id="row'+i+'"><tr><td>Insurance Company Name: <span class="required">*</span></td><td><select name="insurancecompanycode[]" class="form-control" title="Select a Insurance Company Code"><option value="">-- Select Insurance Company --</option></select></td>  </tr><tr> <td>Insurance Name: <span class="required">*</span></td> <td> <input type="text" name="name[]" placeholder="Enter Insurance Name" class="form-control name_list" /></td>  </tr>	<tr> <td>Policy Number: <span class="required">*</span></td><td> <input type="text" name="name[]" placeholder="Enter Policy Number" class="form-control name_list" /></td></tr><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  -->
</html>