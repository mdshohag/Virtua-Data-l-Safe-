<?php
	class cls_bank_master{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function add_bank_master($bank_name,$bank_address){
			$result = $this->con()->query("INSERT INTO tbl_bank_master (bank_name,bank_address) VALUES ('$bank_name','$bank_address')");
			return $result;
		}
		
		public function view_bank_master(){
			$res = $this->con()->query("SELECT * From tbl_bank_master");
			return $res;
			
		}
		public function edit_bank_master_view($master_bank_id){
			$res = $this->con()->query("SELECT * From tbl_bank_master where bank_id='$master_bank_id'");
			return $res;
			
		}
		public function edit_bank_master($bank_name,$bank_address,$id){
			$result = $this->con()->query("UPDATE tbl_bank_master SET bank_name='$bank_name', bank_address='$bank_address' where bank_id='$id'");
			return $result;
		}
		
		public function bank_master_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_bank_master Where bank_id='$id'");
			return $result;
		}
		
	}
?>