<?php
	class cls_hr_company_roster{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function add_hr_company_rostery($company_code,$roster_date,$company_status,$roster_description){
			$result = $this->con()->query("INSERT INTO tbl_hr_company_roster (company_code,company_roster_create_date,company_roster_status,roster_description) VALUES ('$company_code','$roster_date','$company_status','$roster_description')");
			return $result;
		}
		
		public function view_tbl_hr_company_roster(){
			$res = $this->con()->query("SELECT * From tbl_hr_company_roster");
			return $res;
			
		}
		public function edit_hr_company_roster_view($hr_company_roster_id){
			$res = $this->con()->query("SELECT * From tbl_hr_company_roster where company_roster_code='$hr_company_roster_id'");
			return $res;
			
		}
		public function edit_hr_company_roster($company_code,$roster_date,$company_status,$roster_description,$id){
			$result = $this->con()->query("UPDATE tbl_hr_company_roster SET company_code='$company_code', company_roster_create_date='$roster_date',company_roster_status ='$company_status', roster_description='$roster_description' where company_roster_code='$id'");
			return $result;
		}
		
		public function hr_company_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_hr_company Where comapny_code='$id'");
			return $result;
		}
		public function view_tbl_hr_company_client(){
			$result = $this->con()->query("SELECT tbl_vs_client.*, tbl_hr_company.company_name FROM tbl_vs_client JOIN tbl_hr_company ON tbl_vs_client.company_id=tbl_hr_company.comapny_code WHERE tbl_vs_client.company_client = 'Y'");
			return $result;
		}
		
	}
?>