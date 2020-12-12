<?php
	class cls_payment_type{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function view_payment_amount(){
			$res = $this->con()->query("SELECT * From tbl_payment_fees");
			return $res;
		}
		public function view_payment_annual(){
			$res = $this->con()->query("SELECT * From tbl_payment_fees where type='annual'");
			return $res;
		}
		public function view_payment_annual_amount(){
			$res = $this->con()->query("SELECT * From tbl_payment_fees where type='annual'");
			return $res;
		}
		public function view_payment_lifetime_amount(){
			$res = $this->con()->query("SELECT * From tbl_payment_fees where type='lifetime'");
			return $res;
		}
		public function view_payment_renewal(){
			$res = $this->con()->query("SELECT * From tbl_payment_fees where type='renewal'");
			return $res;
		}
		public function view_payment_search(){
			$res = $this->con()->query("SELECT * From tbl_payment_fees where type='search'");
			return $res;
		}
		public function edit_payment_view($amount_id){
			$res = $this->con()->query("SELECT * From tbl_payment_fees where id='$amount_id'");
			return $res;
		}
		public function select_amount_annual(){
			$res = $this->con()->query("SELECT * From tbl_payment_fees where type='annual'");
			return $res;
		}
		public function edit_payment_amount($annualfees,$id){
			$ss = $this->con()->query("update tbl_payment_fees set amount_fees = '$annualfees' where id = '$id'");
			return $ss;
		}
		
	}
?>