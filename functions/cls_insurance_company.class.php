<?php
	class cls_insurance_company{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function add_insurance_company($icname,$address,$description){
			$result = $this->con()->query("INSERT INTO tbl_insurance_company (company_name,company_address,company_description) VALUES ('$icname','$address','$description')");
			return $result;
		}
		
		public function view_insurance_company(){
			$res = $this->con()->query("SELECT * From tbl_insurance_company");
			return $res;
			
		}
		public function edit_insurance_company_view($insurance_company_id){
			$res = $this->con()->query("SELECT * From tbl_insurance_company where insurance_comapny_id='$insurance_company_id'");
			return $res;
			
		}
		public function edit_insurance_company($icname,$address,$description,$id){
			$result = $this->con()->query("UPDATE tbl_insurance_company SET company_name='$icname', company_address='$address', company_description='$description' WHERE insurance_comapny_id='$id'");
			return $result;
		}
		
		public function insurance_company_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_insurance_company Where insurance_comapny_id='$id'");
			return $result;
		}
		
	}
?>