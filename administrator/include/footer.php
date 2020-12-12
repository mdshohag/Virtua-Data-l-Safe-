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
	
	<!-- datepicker -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	
	
	<script src="alert/alertify.min.js"></script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="invoice_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="roster_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="birth_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="valid_from_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="valid_to_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="issue_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="pay_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
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

		$("#invoice").submit(function(e){
				e.preventDefault();

			var companyname = $('[name="companyname"]').val();
			//var invoice_date = $('[name="invoice_date"]').val();

			if(companyname == ""){
						alertify.error('Please Select Company Name');
						return false;
					}
			/*if(invoice_date == ""){
				alertify.error('Please Input Date');
				return false;
			}*/
		//	var dataString ='name='+companyname +"&detes="+invoice_date;
			var dataString ='name='+companyname;
			 //alert(dataString);
			//return false;
			$.ajax({
				type:"post",
				url:"post_url/fetch.php",
				data:dataString,
				success:function(res){
					//alert(res);
					//return false;
					//$("#area").empty();
					$("#result").html(res);
				},error:function(){
					alert('Javascript Loading Problem');
				}
			})
		});
	})
	
    </script>
	
	<script>

  
    function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
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
						alertify.error("Javascript Loading Problem!!");
					}     
				})
			});
		})
	</script>
	<script>
	$("#edit_insurance_company").submit(function(e){
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
			url:"post_url/edit_insurance_company.php",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success: function(res){
				//alert(res);
				//return false;
				
				if(res == 1){
					alertify.success("Successful");
					location.href='manage_insurance_company.php';
				}else{
					alertify.error("not updated !!");
				}
			},error: function(){
				alertify.error("Javascript Loading Problem !!");
			}          
		})		
		
	})
	</script>
	<script type="text/javascript"> 
		$(".insurance_company_delete").click(function(){
			var insurance_comapny_id=$(this).attr('insurance_comapny_id');
			//alert(insurance_comapny_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete insurance company.').set('onok', function(closeEvent){  
				//alertify.alert(insurance_comapny_id);
			 var dataString ='insurance_comapny='+insurance_comapny_id;
			 
			 $.ajax({
			  type:"post",
			  url:"post_url/insurance_company_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='manage_insurance_company.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Insurance Company'});
		});
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
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	<script type="text/javascript">
		$(function(){
			
			$("#edit_bank_master").submit(function(e){
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
					url:"post_url/edit_bank_master.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						//alert(usertype);
						//return false;
						if(res == 1){
						
							alertify.success('Successful');
							location.href='manage_bank_master.php';
							
						}else{
							alertify.error('NOT insert');
						}
					},error:function(){
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	<script type="text/javascript"> 
		$(".bank_delete").click(function(){
			var bank_id=$(this).attr('bank_id');
			//alert(insurance_comapny_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete Bank master.').set('onok', function(closeEvent){  
				//alertify.alert(insurance_comapny_id);
			 var dataString ='bank_master_id='+bank_id;
			 
			 $.ajax({
			  type:"post",
			  url:"post_url/bank_master_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='manage_bank_master.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Bank Master'});
		});
	</script>
	<script type="text/javascript">
		$(function(){
			
			$("#addagent").submit(function(e){
				e.preventDefault();
				
				var fname = $('[name="fname"]').val();
				var lname = $('[name="lname"]').val();
				var address = $('[name="address"]').val();
				var email = $('[name="email_name"]').val();
			
				
				
				if(fname == ""){
						alertify.error('Please Enter  First name');
						return false;
					}
				if(lname == ""){
						alertify.error('Please Enter  Last name');
						return false;
					}
				if(address == ""){
						alertify.error('Please Enter Address');
						return false;
					}
					
					if(email == ""){
						alertify.error('Please Enter email');
						return false;
					}
					
					
				$.ajax({
					type:"post",
					url:"post_url/add_agent.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
						if(res >= 1){
							alertify.success('Successful');
							
							location.href='add_agent.php';
							
						}else if(res == 2){
							alertify.error('Email already exists');
						}else{
							alertify.error('Email already exists');
						}
					
					  
					},error:function(){
						alert('Javascript Loading Problem');
					}     
				})
			});
		})
	</script>
	
	<script type="text/javascript">
		$(function(){
			
			$("#edit_agent").submit(function(e){
				e.preventDefault();
				
				var fname = $('[name="fname"]').val();
				var lname = $('[name="lname"]').val();
				var address = $('[name="address"]').val();
				var companycode = $('[name="companycode"]').val();
				var email = $('[name="email_name"]').val();
				var password = $('[name="password_u"]').val();
				
				
				if(fname == ""){
						alertify.error('Please Enter  First name');
						return false;
					}
				if(lname == ""){
						alertify.error('Please Enter  Last name');
						return false;
					}
				if(address == ""){
						alertify.error('Please Enter Address');
						return false;
					}
				if(companycode == ""){
						alertify.error('Please Select Company Code');
						return false;
					}
					
					if(email == ""){
						alertify.error('Please Enter email');
						return false;
					}
					if(password == ""){
						alertify.error('Please Enter password');
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
				$.ajax({
					type:"post",
					url:"post_url/edit_agent.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
						if(res == 1){
							alertify.success('Successful');
							
							location.href='manage_agent.php';
							
						}else if(res == 2){
							alertify.error('Email already exists');
						}else{
							alertify.error('Not Update');
						}
					
					  
					},error:function(){
						alert('Javascript Loading Problem');
					}     
				})
			});
		})
	</script>
	<script type="text/javascript"> 
		$(".insurance_agent_delete").click(function(){
			var root_agent_id=$(this).attr('insurance_agent_id');
			//alert(root_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete Agent.').set('onok', function(closeEvent){  
				//alertify.alert(root_id);
			 var dataString ='agent_id='+root_agent_id;
			 
			 $.ajax({
			  type:"post",
			  url:"post_url/agent_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='manage_agent.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Agent Delete'});
		});
	</script>
	<script type="text/javascript"> 
		$(".agent_deactive").click(function(){
			var root_agent_did=$(this).attr('agent_id');
			//alert(root_agent_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to Deactivate Agent.').set('onok', function(closeEvent){  
				//alert(root_agent_id);
				//return false;
			 var dataString ='agent_in_id='+root_agent_did;
			 //alert(dataString);
				//return false;
			 $.ajax({
			  type:"post",
			  url:"post_url/agent_deactive.php",
			  data:dataString,
			  success:function(res){
				location.href='manage_agent.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Agent Deactivated'});
		});
	</script>
	<script type="text/javascript"> 
		$(".agent_active").click(function(){
			var root_agent_id=$(this).attr('agent_active');
			//alert(root_agent_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to Active Agent.').set('onok', function(closeEvent){  
				//alert(root_agent_id);
				//return false;
			 var dataString ='agent_act_id='+root_agent_id;
			 //alert(dataString);
				//return false;
			 $.ajax({
			  type:"post",
			  url:"post_url/agent_active.php",
			  data:dataString,
			  success:function(res){
				location.href='deactivated_agent.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Agent Active'});
		});
	</script>
	<script type="text/javascript">
		$(function(){
			
			$("#addhrcompany").submit(function(e){
				e.preventDefault();
				
				var company_name = $('[name="company_name"]').val();
				var company_address = $('[name="company_address"]').val();
				
				var no_of_employee = $('[name="no_of_employee"]').val();
				var last_payment_date = $('[name="last_payment_date"]').val();
				
				
				if(company_name == ""){
						alertify.error('Please Enter company name');
						return false;
					}
					
				if(company_address == ""){
					alertify.error('Please Enter company Address');
					return false;
				}
			
				if(no_of_employee == ""){
					alertify.error('Please Enter Number of Employee Registered');
					return false;
				}
				if(last_payment_date == ""){
					alertify.error('Please Enter last payment date');
					return false;
				}
				$.ajax({
					type:"post",
					url:"post_url/add_hr_company.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						//alert(res);
						//return false;
						if(res == 1){
						
							alertify.success('Successful');
							location.href='add_hr_company.php';
							
						}else{
							alertify.error('NOT insert');
						}
					},error:function(){
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	<script type="text/javascript">
		$(function(){
			
			$("#edithrcompany").submit(function(e){
				e.preventDefault();
				
				var company_name = $('[name="company_name"]').val();
				var company_address = $('[name="company_address"]').val();
				
				var no_of_employee = $('[name="no_of_employee"]').val();
				var last_payment_date = $('[name="last_payment_date"]').val();
				
				
				if(company_name == ""){
						alertify.error('Please Enter company name');
						return false;
					}
					
				if(company_address == ""){
					alertify.error('Please Enter company Address');
					return false;
				}
				
				if(no_of_employee == ""){
					alertify.error('Please Enter Number of Employee Registered');
					return false;
				}
				if(last_payment_date == ""){
					alertify.error('Please Enter last payment date');
					return false;
				}
				$.ajax({
					type:"post",
					url:"post_url/edit_hr_company.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						//alert(usertype);
						//return false;
						if(res == 1){
						
							alertify.success('Successful');
							location.href='show_hr_company.php';
							
						}else{
							alertify.error('NOT insert');
						}
					},error:function(){
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	<script type="text/javascript"> 
		$(".hr_comapny_delete").click(function(){
			var comapny_code_id=$(this).attr('comapny_code_id');
			//alert(insurance_comapny_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete HR Company.').set('onok', function(closeEvent){  
				//alertify.alert(insurance_comapny_id);
			 var dataString ='comapny_code='+comapny_code_id;
			 
			 $.ajax({
			  type:"post",
			  url:"post_url/hr_comapny_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='show_hr_company.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'HR Company'});
		});
	</script>
	
	<script type="text/javascript">
		$(function(){
			
			$("#add_hr_company_roster").submit(function(e){
				e.preventDefault();
				
				var company_code = $('[name="company_code"]').val();
				
				var company_status = $('[name="company_status"]').val();
				var roster_description = $('[name="roster_description"]').val();
				
				
				if(company_code == ""){
						alertify.error('Please Select company code');
						return false;
					}
					
				
				if(company_status == ""){
					alertify.error('Please Select company status');
					return false;
				}
				if(roster_description == ""){
					alertify.error('Please Enter Roster description');
					return false;
				}
				$.ajax({
					type:"post",
					url:"post_url/add_hr_company_roster.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						//alert(usertype);
						//return false;
						if(res == 1){
						
							alertify.success('Successful');
							location.href='add_hr_company_roster.php';
							
						}else{
							alertify.error('NOT insert');
						}
					},error:function(){
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	<script type="text/javascript">
		$(function(){
			
			$("#edit_hr_company_roster").submit(function(e){
				e.preventDefault();
				
				var company_code = $('[name="company_code"]').val();
				var roster_date = $('[name="roster_date"]').val();
				var company_status = $('[name="company_status"]').val();
				var roster_description = $('[name="roster_description"]').val();
				
				
				if(company_code == ""){
						alertify.error('Please Select company code');
						return false;
					}
					
				if(roster_date == ""){
					alertify.error('Please Enter Company Roster Create Date');
					return false;
				}
				if(company_status == ""){
					alertify.error('Please Select company status');
					return false;
				}
				if(roster_description == ""){
					alertify.error('Please Enter Roster description');
					return false;
				}
				$.ajax({
					type:"post",
					url:"post_url/edit_hr_company_roster.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						//alert(usertype);
						//return false;
						if(res == 1){
						
							alertify.success('Successful');
							location.href='show_hr_company_roster.php';
							
						}else{
							alertify.error('NOT Update');
						}
					},error:function(){
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	
	
	<script type="text/javascript">
	$(function(){
		
		$("#addvs_company").submit(function(e){
			e.preventDefault();
			
			var company_code = $('[name="company_code"]').val();
			var excfile = $('[name="excfile"]').val();
			
			if(company_code == ""){
					alertify.error('Please Select Company Code');
					return false;
				}
			if(excfile == ""){
					alertify.error('Upload Excel File is Empty');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/add_virtual_safe_company.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
						alertify.success('Successful');
						
						location.href='add_virtual_safe_company.php';
						
					}else{
						alertify.error('Not inserted');
					}
				
				  
				},error:function(){
					alert('Javascript Loading Problem');
				}     
			})
		});
	})
</script>
	<script type="text/javascript">
	$(function(){
		
		$("#company_payment").submit(function(e){
			e.preventDefault();
			
			var company_code = $('[name="company_code"]').val();
			var excfile = $('[name="excfile"]').val();
			
			if(company_code == ""){
					alertify.error('Please Select Company Code');
					return false;
				}
			if(excfile == ""){
					alertify.error('Upload Excel File is Empty');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/payment_company.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
						alertify.success('Successful');
						
						location.href='payment_company.php';
						
					}else{
						alertify.error('Not inserted');
					}
				
				  
				},error:function(){
					alert('Javascript Loading Problem');
				}     
			})
		});
	})
</script>
	<script type="text/javascript">
		$(function(){
			
			$("#add_employee_roster").submit(function(e){
				e.preventDefault();
				
				var company_code = $('[name="company_code"]').val();
				var company_roster_code = $('[name="company_roster_code"]').val();
				var employeeid = $('[name="employeeid"]').val();
				var employee_name = $('[name="employee_name"]').val();
				var employee_designation = $('[name="employee_designation"]').val();
				var birth_date = $('[name="birth_date"]').val();
				var employee_ssn = $('[name="employee_ssn"]').val();
				
				
				if(company_code == ""){
						alertify.error('Please Select company code');
						return false;
					}
					
				if(company_roster_code == ""){
					alertify.error('Please Enter Company Roster Code');
					return false;
				}
				if(employeeid == ""){
					alertify.error('Please Enter Employee ID');
					return false;
				}
				if(employee_name == ""){
					alertify.error('Please Enter Employee Name');
					return false;
				}
				if(employee_designation == ""){
					alertify.error('Please Enter Employee Designation');
					return false;
				}
				if(birth_date == ""){
					alertify.error('Please Enter Employee Date of Birth');
					return false;
				}
				if(employee_ssn == ""){
					alertify.error('Please Enter Employee SSN Code');
					return false;
				}
				$.ajax({
					type:"post",
					url:"post_url/add_employee_roster.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						//alert(usertype);
						//return false;
						if(res == 1){
						
							alertify.success('Successful');
							location.href='add_employee_roster.php';
							
						}else{
							alertify.error('NOT insert');
						}
					},error:function(){
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	
	
<script type="text/javascript">
	$(function(){
		
		$("#add_vs_code_master").submit(function(e){
			e.preventDefault();
			
			var vs_code_type = $('[name="vs_code_type"]').val();
			var issue_date = $('[name="issue_date"]').val();
			var vs_status = $('[name="vs_status"]').val();
			var vs_description = $('[name="vs_description"]').val();
			
			
			if(vs_code_type == ""){
					alertify.error('Please Select Virtual Safe Code Type');
					return false;
				}
				
			if(issue_date== ""){
					alertify.error('Please Enter VS Code Issue date');
					return false;
				}
			if(vs_status == ""){
					alertify.error('Please Select VS Status');
					return false;
				}
			if(vs_description == ""){
					alertify.error('Please Enter VS Code Description');
					return false;
				}
				
				
				
			$.ajax({
				type:"post",
				url:"post_url/add_vs_code_master.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_vs_code_master.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){
		
		$("#edit_vs_code_master").submit(function(e){
			e.preventDefault();
			
			var vs_code_type = $('[name="vs_code_type"]').val();
			var issue_date = $('[name="issue_date"]').val();
			var vs_status = $('[name="vs_status"]').val();
			var vs_description = $('[name="vs_description"]').val();
			
			
			if(vs_code_type == ""){
					alertify.error('Please Select Virtual Safe Code Type');
					return false;
				}
				
			if(issue_date== ""){
					alertify.error('Please Enter VS Code Issue date');
					return false;
				}
			if(vs_status == ""){
					alertify.error('Please Select VS Status');
					return false;
				}
			if(vs_description == ""){
					alertify.error('Please Enter VS Code Description');
					return false;
				}
				
				
				
			$.ajax({
				type:"post",
				url:"post_url/edit_vs_code_master.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='show_vs_code_master.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
</script>

<script type="text/javascript">
	$(function(){

		$('[name="companyid"]').on('change',function(e){
			e.preventDefault();
			//alert('dlkjls');
			//return false;
			var companyid = $('[name="companyid"]').val();
			//alert(companyid);
			//return false;
			if(companyid == ""){
				alertify.error('Select HR Company Code');
				return false;
			}
			

			var dataString ='para='+companyid;
			$.ajax({
				type:"post",
				url:"post_url/selectcompanyroster.php",
				data:dataString,
				success:function(res){
					//$("#xyz").empty();
					$("#company_roster_id").html(res);
				},error:function(){
					alert('Javascript Loading Problem');
				}
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){

		$('[name="company_roster_id"]').on('change',function(e){
			e.preventDefault();
			//alert('dlkjls');
			//return false;
			var company_roster_id = $('[name="company_roster_id"]').val();
			//alert(country);
			//return false;
			if(company_roster_id == ""){
				alertify.error('Select HR Company Roster ID');
				return false;
			}
			

			var dataString ='roster='+company_roster_id;
			$.ajax({
				type:"post",
				url:"post_url/selectcompany_employee.php",
				data:dataString,
				success:function(res){
					//$("#xyz").empty();
					$("#roster").html(res);
				},error:function(){
					alert('Javascript Loading Problem');
				}
			})
		});
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
						alertify.success('Successful');
						
						location.href='add_virtual_safe_client.php';
						
					}else if(res == 2){
						alertify.error('Email already exists');
					}else if(res == 4){
						alertify.error('Exist Already Virtual Safe Code');
					}else{
						alertify.error('Email already exists');
					}
				
				  
				},error:function(){
					alert('Javascript Loading Problem');
				}     
			})
		});
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
						alertify.success('Successful');
						
						location.href='show_virtual_safe_client.php';
						
					}else{
						alertify.error('Not Update');
					}
				
				  
				},error:function(){
					alert('Javascript Loading Problem');
				}     
			})
		});
	})
</script>
<script type="text/javascript"> 
		$(".tvs_id").click(function(){
			var root_tvs_id=$(this).attr('tvs_id');
			//alert(root_agent_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to DeactivateD Virtual Safe Client.').set('onok', function(closeEvent){  
				//alert(root_agent_id);
				//return false;
			 var dataString ='tvs_act_id='+root_tvs_id;
			 //alert(dataString);
				//return false;
			 $.ajax({
			  type:"post",
			  url:"post_url/tvs_deactivate.php",
			  data:dataString,
			  success:function(res){
				location.href='show_virtual_safe_client.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Deactivated Virtual Safe Client'});
		});
	</script>
	<script type="text/javascript"> 
		$(".tvs_active_id").click(function(){
			var active_tvs_id=$(this).attr('tvs_active_id');
			//alert(root_agent_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to Activated Virtual Safe Client.').set('onok', function(closeEvent){  
				//alert(root_agent_id);
				//return false;
			 var dataString ='tvs_activ_id='+active_tvs_id;
			 //alert(dataString);
				//return false;
			 $.ajax({
			  type:"post",
			  url:"post_url/tvs_activate.php",
			  data:dataString,
			  success:function(res){
				location.href='deactivated_tvs.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Activated Virtual Safe Client'});
		});
	</script>
	<script type="text/javascript"> 
		$(".client_id_delete").click(function(){
			var tvs_client_id_delete=$(this).attr('client_id_delete');
			var client_vscode_delete=$(this).attr('client_vscode');
			//alert(client_vscode_delete);
			//return false;
			var confirm = alertify.confirm('Are you sure want to Delete Virtual Safe Client.').set('onok', function(closeEvent){  
				//alert(root_agent_id);
				//return false;
			 var dataString ='tvs_cleint_id='+tvs_client_id_delete+"&vscode="+client_vscode_delete;
			 //alert(dataString); 
				//return false;
			 $.ajax({
			  type:"post",
			  url:"post_url/tvs_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='show_virtual_safe_client.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'DELETE Virtual Safe Client'});
		});
	</script>

<script type="text/javascript">
	$(function(){
		
		$("#add_vsc_asset").submit(function(e){
			e.preventDefault();
			
			var client_id = $('[name="client_id"]').val();
			var asset_type = $('[name="asset_type"]').val();
			
			
			if(client_id == ""){
					alertify.error('Please Select Client ID');
					return false;
				}
				
			if(asset_type== ""){
					alertify.error('Please Select Asset Type');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/add_vs_client_asset.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_vs_client_asset.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
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
			
			var client_id = $('[name="client_id"]').val();
			var location_testament = $('[name="location_testament"]').val();
			
			
			if(client_id == ""){
					alertify.error('Please Select Client ID');
					return false;
				}
				
			if(location_testament== ""){
					alertify.error('Please Enter Location of Client’s will and testament');
					return false;
				}
				
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
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_vs_client_location.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
</script>

	
<script type="text/javascript">
	$(function(){
		
		$("#addvsclient_insurance").submit(function(e){
			e.preventDefault();
			
			var client_id = $('[name="client_id"]').val();
			var insurancecompanycode = $('[name="insurancecompanycode"]').val();
			var insurance_name = $('[name="insurance_name"]').val();
			var policy_number = $('[name="policy_number"]').val();
			
			
			if(client_id == ""){
					alertify.error('Please Select Client ID');
					return false;
				}
				
			if(insurancecompanycode== ""){
					alertify.error('Please Select Insurance Company ');
					return false;
				}
			if(insurance_name == ""){
					alertify.error('Please Enter Insurance Name');
					return false;
				}
			if(policy_number == ""){
					alertify.error('Please Enter Policy Number');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/add_vs_client_insurance.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_vs_client_insurance.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
</script>
<script type="text/javascript">
	$(function(){
		
		$("#add_company_paytrack").submit(function(e){
			e.preventDefault();
			
			var companyid = $('[name="companyid"]').val();
			var company_roster_id = $('[name="company_roster_id"]').val();
			var pay_month = $('[name="pay_month"]').val();
			var pay_year = $('[name="pay_year"]').val();
			var pay_date = $('[name="pay_date"]').val();
			var pay_status = $('[name="pay_status"]').val();
			
			
			if(companyid == ""){
					alertify.error('Please Select Company Code');
					return false;
				}
				
			if(company_roster_id== ""){
					alertify.error('Please Select Company Roster Code');
					return false;
				}
			if(pay_month == ""){
					alertify.error('Please Enter Month paid');
					return false;
				}
			if(pay_year == ""){
					alertify.error('Please Enter Year Paid');
					return false;
				}
			if(pay_date == ""){
					alertify.error('Please Enter Payment Date');
					return false;
				}
			if(pay_status == ""){
					alertify.error('Please Select Pay Status');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/add_company_paytrack.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_company_paytrack.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
</script>	
<script type="text/javascript">
	$(function(){
		
		$("#edit_company_paytrack").submit(function(e){
			e.preventDefault();
			
			var companyid = $('[name="companyid"]').val();
			var company_roster_id = $('[name="company_roster_id"]').val();
			var pay_month = $('[name="pay_month"]').val();
			var pay_year = $('[name="pay_year"]').val();
			var pay_date = $('[name="pay_date"]').val();
			var pay_status = $('[name="pay_status"]').val();
			
			
			if(companyid == ""){
					alertify.error('Please Select Company Code');
					return false;
				}
				
			if(company_roster_id== ""){
					alertify.error('Please Select Company Roster Code');
					return false;
				}
			if(pay_month == ""){
					alertify.error('Please Enter Month paid');
					return false;
				}
			if(pay_year == ""){
					alertify.error('Please Enter Year Paid');
					return false;
				}
			if(pay_date == ""){
					alertify.error('Please Enter Payment Date');
					return false;
				}
			if(pay_status == ""){
					alertify.error('Please Select Pay Status');
					return false;
				}
				
			$.ajax({
				type:"post",
				url:"post_url/edit_company_paytrack.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='show_company_paytrack.php';
						
					}else{
						alertify.error('NOT Update');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
</script>	
<script type="text/javascript">
	$(function(){
		
		$("#addvsbank").submit(function(e){
			e.preventDefault();
			
			var client_id = $('[name="client_id"]').val();
			var bank_code = $('[name="bank_code"]').val();
			var bank_account = $('[name="bank_account"]').val();
			var acount_type = $('[name="acount_type"]').val();
			
			if(client_id == ""){
					alertify.error('Please Select Client Id');
					return false;
				}
				
			if(bank_code== ""){
					alertify.error('Please Select Bank Code');
					return false;
				}
			if(bank_account == ""){
					alertify.error('Please Enter bank account');
					return false;
				}
			if(acount_type == ""){
					alertify.error('Please Select acount type');
					return false;
				}
				
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
					if(res == 1){
					
						alertify.success('Successful');
						location.href='add_vs_client_bank.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
		});
	})
</script>
	
	
	<!-- old some script -->
	<script>
	function filesValidation(){
    var fileInput = document.getElementById('profile_pic');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png only.');
        fileInput.value = '';
        return false;
			}//else{
				// if (fileInput.files && fileInput.files[0]) {
                 //   var reader = new FileReader();

                 //   reader.onload = function(e) {
                  //      $('#blah').attr('src', e.target.result);
                  //  }

                  //  reader.readAsDataURL(fileInput.files[0]);
              //  }
			//}
		}
	</script>
	
	<script type="text/javascript">
		function filePreview(input){
			if(input.files && input.files[0]){
				var reader = new FileReader();
				reader.onload = function(e){
					$('#live + img').remove();
					$('#live').after('<img src="'+e.target.result+'" width="125" height="105" />');
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$('#profile_pic').change(function(){
			filePreview(this);
		});
	</script>
	<script type="text/javascript">
		$(function(){
			
			$("#adduser").submit(function(e){
				e.preventDefault();
				
				var username = $('[name="username"]').val();
				var password = $('[name="password"]').val();
				var repassword = $('[name="repassword"]').val();
				var usertype = $('[name="usertype"]').val();
				var fullname = $('[name="fullname"]').val();
				var fullname = $('[name="fullname"]').val();
				//var profile_img = $('#profile_pic').val();
				
				if(username == ""){
						alertify.error('Please Enter User id');
						return false;
					}
					
					if(password == ""){
						alertify.error('Please Enter password');
						return false;
					}
					if(repassword == ""){
						alertify.error('Please Enter repassword');
						return false;
					}
					if(usertype == ""){
						alertify.error('Please Select User Group');
						return false;
					}	
					if(fullname == ""){
						alertify.error('Please Enter User Full Name');
						return false;
					}
					//if(profile_img == ""){
					//	alertify.error('Please Your Profile Picture');
					//	return false;
					//}
					
					if(password != repassword) {
						alertify.error("Password and Retype password do not match"); 
						return false;
					}
				$.ajax({
					type:"post",
					url:"post_url/add_user.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						//alert(usertype);
						//return false;
						if(res == 1){
						
							alertify.success('Successful');
							location.href='adduser.php';
							
						}else if(res == 2){
							alertify.error('Email already exists');
						}else{
							alertify.error('Only JPG, JPEG and PNG file allowed !! MAX SIZE(275x275)');
							
						}
					
					  
					},error:function(){
						alertify.error("Javascript Loading Problem !!");
					}     
				})
			});
		})
	</script>
	<script>
	function filesValidation(){
    var fileInput = document.getElementById('edit_pic');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png only.');
        fileInput.value = '';
        return false;
			}else{
				 if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

						reader.onload = function(e) {
                       $('#cpic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fileInput.files[0]);
                }
			}
		}
	</script>
	
	<script>
	$("#edituser").submit(function(e){
		e.preventDefault();
		
		//var update_reg = $('[name="customer_id"]').val();
		//alert(update_reg);
		//return false;
		var username = $('[name="username"]').val();
		var fullname = $('[name="fullname"]').val();
		
		if(username == ""){
				alertify.error('Username field is empty');
				return false;
			}
		if(fullname == ""){
				alertify.error('Enter Full Name');
				return false;
			}
			
		$.ajax({
			type:"post",   
			url:"post_url/edituser.php",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success: function(res){
				//alert(res);
				//return false;
				
				if(res == 1){
					alertify.success("Successful");
					location.href='manageuser.php';
				}else{
					alertify.error("user not updated !!");
				}
			},error: function(){
				alertify.error("Javascript Loading Problem !!");
			}          
		})		
		
	})
	</script>
	<script type="text/javascript"> 
		$(".user_delete").click(function(){
			var root_user_id=$(this).attr('user_id');
			//alert(root_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete User.').set('onok', function(closeEvent){  
				//alertify.alert(root_id);
			 var dataString ='user='+root_user_id;
			 
			 $.ajax({
			  type:"post",
			  url:"post_url/user_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='manageuser.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'User'});
		});
	</script>
	
	<script type="text/javascript"> 
		$(".accept").click(function(){
			
			var user_email_id=$(this).attr('user_email');
			var root_user_id=$(this).attr('user_id');
			var username_id=$(this).attr('username');
			
			var confirm = alertify.confirm('Are you sure want to Approve Agent.').set('onok', function(closeEvent){  
				//alertify.alert(root_id);
			 var dataString ='user='+root_user_id +"&email="+user_email_id+"&name="+username_id;
			 //alert(dataString);
			//return false;
			 $.ajax({
			  type:"post",
			  url:"post_url/accept.php",
			  data:dataString,
			  success:function(res){
				location.href='pending.php';
			  }
			  ,error:function(){
			   alert('Javascript Loading Problem');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Agent Approve'});
		});
	</script>
	
	<script type="text/javascript">
		$(function(){
			
			$("#edit_payment").submit(function(e){
				e.preventDefault();
				
				var annualfees = $('[name="annualfees"]').val();
	
				if(annualfees == ""){
					alertify.error('Please Enter ');
					return false;
				}
			$.ajax({
				type:"post",
				url:"post_url/edit_payment_manage.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res == 1){
					
						alertify.success('Successful');
						location.href='payment_manage.php';
						
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Javascript Loading Problem !!");
				}     
			})
			});
		})
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
				alert('Javascript Loading Problem');
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
					alert('Javascript Loading Problem');
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
function goBack() {
    window.history.go(-1);
}
</script>

</body>

</html>