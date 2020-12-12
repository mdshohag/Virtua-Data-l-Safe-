<?php
	class cls_company_paytrack{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function add_company_paytrack($companyid,$company_roster_id,$pay_month,$pay_year,$pay_date,$pay_status){
			$result = $this->con()->query("INSERT INTO tbl_companypaytrack (comapny_code,company_roster_code,pay_month,pay_year,pay_date,pay_status) VALUES ('$companyid','$company_roster_id','$pay_month','$pay_year','$pay_date','$pay_status')");
			return $result;
		}
		
		public function view_company_paytrack(){
			$res = $this->con()->query("SELECT * From tbl_companypaytrack");
			return $res;
			
		}
		public function edit_company_paytrack_view($paytrack_id){
			$res = $this->con()->query("SELECT * From tbl_companypaytrack where id='$paytrack_id'");
			return $res;
			
		}
		public function update_company_paytrack($companyid,$company_roster_id,$pay_month,$pay_year,$pay_date,$pay_status,$paytrack_id){
			$result = $this->con()->query("UPDATE tbl_companypaytrack SET comapny_code='$companyid',company_roster_code='$company_roster_id',pay_month='$pay_month',pay_year='$pay_year',pay_date='$pay_date',pay_status='$pay_status' where id='$paytrack_id'");
			return $result;
		}
		
		public function hr_company_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_hr_company Where comapny_code='$id'");
			return $result;
		}
		
	}
?>