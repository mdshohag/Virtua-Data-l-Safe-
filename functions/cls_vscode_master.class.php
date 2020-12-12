<?php
	class cls_vscode_master{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function vs_code($vs_code){
		
			
			$results = $this->con()->query("INSERT INTO tbl_vscode_master (vs_code,vs_code_type,vs_code_status) VALUES ('$vs_code','Client','InActive')");
			return $results;
		}
		public function add_vscode_master($vs_code_type,$issue_date,$vs_status,$vs_description){
		
			$vscode = uniqid();
			
			$result = $this->con()->query("INSERT INTO tbl_vscode_master (vs_code,vs_code_type,vs_code_issue_date,vs_code_status,vs_code_description) VALUES ('$vscode','$vs_code_type','$issue_date','$vs_status','$vs_description')");
			return $result;
		}
		
		public function view_vscode_master(){
			$res = $this->con()->query("SELECT * From tbl_vscode_master");
			return $res;
			
		}
		public function view_vscode_master_all(){
			$res = $this->con()->query("SELECT * From tbl_vscode_master");
			return $res;
			
		}
		public function edit_vscode_master($vscode_id){
			$res = $this->con()->query("SELECT * From tbl_vscode_master where vs_code='$vscode_id'");
			return $res;
			
		}
		public function update_vscode_master($vs_code_type,$issue_date,$vs_status,$vs_description,$vscode_code){
			$result = $this->con()->query("UPDATE tbl_vscode_master SET vs_code_type='$vs_code_type', vs_code_issue_date='$issue_date', vs_code_status='$vs_status', vs_code_description='$vs_description' where vs_code='$vscode_code'");
			return $result;
		}
		
		public function bank_master_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_bank_master Where bank_id='$id'");
			return $result;
		}
		
	}
?>