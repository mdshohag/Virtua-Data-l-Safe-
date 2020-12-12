<?php
	class cls_member_login{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function customer_access($uname,$pass){
		
			$no = "no";
			$yes = "yes";
			$pps = md5($pass);
			$result = $this->con()->query("SELECT * FROM tbl_insurance_agent WHERE agent_email = '$uname' and password = '$pps' and active='1'");
				  
			$check = $result->num_rows;
			if($check == 0){
				return $no;
			}
			
			$row = $result->fetch_assoc();
			session_start();
			//$_SESSION['id'] = $row['id'];
			$_SESSION['customer_id'] = $row['agent_id'];
			$_SESSION['customer_username'] = $row['agent_email'];
			$_SESSION['customer_name'] = $row['first_name'];
			$_SESSION['customer_lname'] = $row['last_name'];
			$_SESSION['customer_type'] = $row['user_type'];
			return $yes;
		/*$result = $this->con()->query("select * from
				  ( select nu.client_id, nu.active, nu.client_first_name, nu.client_last_name, nu.client_email, nu.client_password ,nu.status
					from tbl_vs_client nu
				  union all 
					select vu.agent_id as client_id, vu.active, vu.first_name as client_first_name, vu.last_name as client_last_name, vu.agent_email as client_email, vu.password as client_password, vu.status
					from tbl_insurance_agent vu
				) u
				where
				  u.client_email = '$uname' and 
				  u.client_password = '$pass' and active='1'");
				  
			$check = $result->num_rows;
			if($check == 0){
				return $no;
			}
			
			$row = $result->fetch_assoc();
			session_start();
			//$_SESSION['id'] = $row['id'];
			$_SESSION['customer_id'] = $row['client_id'];
			$_SESSION['customer_username'] = $row['client_email'];
			$_SESSION['customer_name'] = $row['client_first_name'];
			$_SESSION['customer_lname'] = $row['client_last_name'];
			$_SESSION['customer_type'] = $row['status'];
			return $yes;*/
		
		}
		
		public function client_access($uname,$pass){
			$no = "no";
			$yes = "yes";
			
			$ps = md5($pass);
			
			$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE client_email = '$uname' and client_password = '$ps' and active='1'");
			$check = $result->num_rows;
			if($check == 0){
				return $no;
			}
			
			$row = $result->fetch_assoc();
			session_start();
			//$_SESSION['id'] = $row['id'];
			$_SESSION['customer_id'] = $row['client_id'];
			$_SESSION['customer_username'] = $row['client_email'];
			$_SESSION['customer_name'] = $row['client_first_name'];
			$_SESSION['customer_lname'] = $row['client_last_name'];
			$_SESSION['customer_type'] = $row['status'];
		}
		public function client_access_code($vsc,$cod){
			
			$st = "";
			
			$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE vs_code = '$vsc' and client_id = '$cod' ");
			$check = $result->num_rows;
			if($check == 0){
				$st = "userOrPass";
				return $st;
			}
			else
			{
				$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE vs_code = '$vsc' and client_id = '$cod' and valid_to >= CURDATE( ) ");
				$checks = $result->num_rows;
				if($checks == 0){
					$st = "DateExpire";
					return $st;
				}
				else{
					$row = $result->fetch_assoc();
					session_start();
					//$_SESSION['id'] = $row['id'];
					$_SESSION['customer_id'] = $row['client_id'];
					$_SESSION['customer_username'] = $row['client_email'];
					$_SESSION['customer_name'] = $row['client_first_name'];
					$_SESSION['customer_lname'] = $row['client_last_name'];
					$_SESSION['customer_type'] = $row['status'];
				}
			}	
		}
		public function client_access_authorize($fname,$lname,$cod){
			
			$st = "";
			
			$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE client_first_name = '$fname' and client_last_name = '$lname' and client_id = '$cod' ");
			$check = $result->num_rows;
			if($check == 0){
				$st = "userOrPass";
				return $st;
			}
			else
			{
				$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE client_first_name = '$fname' and client_last_name = '$lname' and client_id = '$cod' and valid_to >= CURDATE( ) ");
				$checks = $result->num_rows;
				if($checks == 0){
					$st = "DateExpire";
					return $st;
				}
				else{
					$row = $result->fetch_assoc();
					session_start();
					//$_SESSION['id'] = $row['id'];
					$_SESSION['customer_id'] = $row['client_id'];
					$_SESSION['customer_username'] = $row['client_email'];
					$_SESSION['customer_name'] = $row['client_first_name'];
					$_SESSION['customer_lname'] = $row['client_last_name'];
					$_SESSION['customer_type'] = $row['status'];
				}
			}	
		}
		
		
		public function client_access_code_search($vsc_id,$client_id){
			
		
			
			$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE vs_code = '$vsc_id' and client_id = '$client_id' ");
			
					$row = $result->fetch_assoc();
					session_start();
					//$_SESSION['id'] = $row['id'];
					$_SESSION['customer_id'] = $row['client_id'];
					$_SESSION['customer_username'] = $row['client_email'];
					$_SESSION['customer_name'] = $row['client_first_name'];
					$_SESSION['customer_lname'] = $row['client_last_name'];
					$_SESSION['customer_type'] = $row['status'];
			
		}
		
		public function client_vsc_pay_login($vsc,$cod){
			
		
			
			$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE vs_code = '$vsc' and client_id = '$cod' ");
			
					$row = $result->fetch_assoc();
					session_start();
					//$_SESSION['id'] = $row['id'];
					$_SESSION['customer_id'] = $row['client_id'];
					$_SESSION['customer_username'] = $row['client_email'];
					$_SESSION['customer_name'] = $row['client_first_name'];
					$_SESSION['customer_lname'] = $row['client_last_name'];
					$_SESSION['customer_type'] = $row['status'];
			
		}
		public function agent_client_access($user_id,$uid){
			
			
			$result = $this->con()->query("SELECT * FROM tbl_vs_client WHERE client_email = '$user_id' and client_id = '$uid' and active='1'");
			
			
			$row = $result->fetch_assoc();
			session_start();
			//$_SESSION['id'] = $row['id'];
			$_SESSION['customer_id'] = $row['client_id'];
			$_SESSION['customer_username'] = $row['client_email'];
			$_SESSION['customer_name'] = $row['client_first_name'];
			$_SESSION['customer_lname'] = $row['client_last_name'];
			$_SESSION['customer_type'] = $row['status'];
			
		}
		
	}
?>