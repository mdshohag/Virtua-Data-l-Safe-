<?php
	class cls_employee_roster{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function add_employee_roster($company_code,$company_roster_code,$employeeid,$employee_name,$employee_designation,$birth_date,$employee_ssn){
			$result = $this->con()->query("INSERT INTO tbl_employee_roster (company_code,company_roster_code,employeeid,employee_name,employee_designation,employee_date_of_birth,employee_ssn) VALUES ('$company_code','$company_roster_code','$employeeid','$employee_name','$employee_designation','$birth_date','$employee_ssn')");
			return $result;
		}
		
		public function view_tbl_employee_roster(){
			$res = $this->con()->query("SELECT * From tbl_employee_roster");
			return $res;
			
		}
		public function edit_hr_company_view($hr_company_id){
			$res = $this->con()->query("SELECT * From tbl_hr_company where comapny_code='$hr_company_id'");
			return $res;
			
		}
		public function edit_hr_company($company_name,$company_address,$vs_code_company,$no_of_employee,$last_payment_date,$id){
			$result = $this->con()->query("UPDATE tbl_hr_company SET company_name='$company_name', company_address='$company_address',vs_code_company ='$vs_code_company', no_of_employee_registered='$no_of_employee', last_payment_date='$last_payment_date' where comapny_code='$id'");
			return $result;
		}
		
		public function hr_company_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_hr_company Where comapny_code='$id'");
			return $result;
		}
		
	}
?>