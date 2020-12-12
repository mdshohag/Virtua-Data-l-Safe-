<?php
	class cls_hr_company{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function view_vscode_type($vs_code_Company){
			$res = $this->con()->query("SELECT * From tbl_vscode_master where vs_code_type='$vs_code_Company'");
			return $res;
		}
		
		public function add_hr_company($company_name,$company_address,$no_of_employee,$last_payment_date){
			$result = $this->con()->query("INSERT INTO tbl_hr_company (company_name,company_address,no_of_employee_registered,last_payment_date) VALUES ('$company_name','$company_address','$no_of_employee','$last_payment_date')");
			return $result;
		}
		
		public function view_tbl_hr_company(){
			$res = $this->con()->query("SELECT * From tbl_hr_company");
			return $res;
			
		}
		public function edit_hr_company_view($hr_company_id){
			$res = $this->con()->query("SELECT * From tbl_hr_company where comapny_code='$hr_company_id'");
			return $res;
			
		}
		public function edit_hr_company($company_name,$company_address,$no_of_employee,$last_payment_date,$id){
			$result = $this->con()->query("UPDATE tbl_hr_company SET company_name='$company_name', company_address='$company_address', no_of_employee_registered='$no_of_employee', last_payment_date='$last_payment_date' where comapny_code='$id'");
			return $result;
		}
		
		public function hr_company_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_hr_company Where comapny_code='$id'");
			return $result;
		}
		
	}
?>