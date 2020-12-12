<?php
	class cls_insurance_agent{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function new_affiliates(){
			$q = $this->con()->query("select * from tbl_insurance_agent where status = 'Pending'");
			return $q;
		
		}
		public function all_agent_list(){
			$q = $this->con()->query("select * from tbl_insurance_agent");
			return $q;
		
		}
		public function agent_view($agent){
			$rest = $this->con()->query("select * from tbl_insurance_agent where agent_id='$agent'");
			return $rest;
		
		}
		public function agent_view_tvsc($agent){
			$rest = $this->con()->query("select * from tbl_vs_client where agent_id='$agent'");
			return $rest;
		
		}
		
		public function accept_regt($id){
		
				$result = $this->con()->query("UPDATE tbl_insurance_agent SET status = 'Approved', active='1' WHERE agent_id='$id'");
				return $result;
		
		}
		public function check_eamil($email){
			$q = $this->con()->query("select agent_email from tbl_insurance_agent where agent_email = '$email'");
			return $q;
		
		}
		
		public function agent_registration($first_name,$last_name,$address,$email,$password,$id_code){
		
		
			$yes = 2;
			
			$res = $this->con()->query("SELECT agent_email From tbl_insurance_agent where agent_email='$email'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			
			$result=$this->con()->query("INSERT INTO tbl_insurance_agent (first_name,last_name,agent_address,agent_email,password,status,user_type,mail_verify) VALUES ('$first_name','$last_name','$address','$email','$password','Pending','agent','$id_code')");
			return $result;
			
		}
		public function affiliate_agent_registration($first_name,$last_name,$ss_tax_id,$insurance_company,$agents_license,$email,$password,$id_code){
		
		
			$yes = 2;
			
			$res = $this->con()->query("SELECT agent_email From tbl_insurance_agent where agent_email='$email'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			
			$result=$this->con()->query("INSERT INTO tbl_insurance_agent (first_name,last_name,ss_tax_id,agent_company_code,agents_license,agent_email,password,status,user_type,mail_verify) VALUES ('$first_name','$last_name','$ss_tax_id','$insurance_company','$agents_license','$email','$password','Pending','agent','$id_code')");
			return $result;
			
		}
		public function information_agent($agnt_id){
			$upp=$this->con()->query("SELECT * FROM tbl_insurance_agent where agent_id='$agnt_id'");
			return $upp;
		}
		public function information_agent_data($user_id,$agnt_id){
			$upp=$this->con()->query("SELECT * FROM tbl_insurance_agent where agent_id='$user_id' and agent_id='$agnt_id'");
			return $upp;
		}
		
		
		public function update_agent_information($frist_name,$last_name,$address,$ss_tax_id,$companycode,$agents_license,$user_id,$client_id){
			$update = $this->con()->query("UPDATE tbl_insurance_agent SET first_name='$frist_name',last_name='$last_name',agent_address='$address', ss_tax_id='$ss_tax_id',agent_company_code='$companycode',agents_license='$agents_license' where agent_id='$user_id' and agent_id='$client_id'");
			return $update;
		}
		
		public function agent_password_update($new_password,$uid){
			$ss = $this->con()->query("update tbl_insurance_agent set password = '$new_password', active='1' where mail_verify = '$uid'");
			return $ss;
		}
		public function agent_password_reset($new_password,$uid){
			$ss = $this->con()->query("update tbl_insurance_agent set password = '$new_password', active='1' where mail_verify = '$uid'");
			return $ss;
		}
		public function insurance_agent_id(){
			$rest = $this->con()->query("SELECT * FROM tbl_insurance_agent where active='1'");
			return $rest;
		
		}
		public function insurance_agent_report(){
			$rest = $this->con()->query("SELECT tbl_insurance_agent.agent_id,tbl_insurance_agent.first_name, tbl_insurance_agent.last_name, tbl_insurance_agent.agent_email, tbl_insurance_agent.agent_address,  sum(case when tbl_vs_client.status ='Annual' then 1 else 0 end) as AnualTotal, sum(case when tbl_vs_client.status ='Lifetime' then 1 else 0 end) as LifetimeTotal, count(tbl_vs_client.status) as TotalClnt
FROM `tbl_insurance_agent`  inner join tbl_vs_client  on tbl_vs_client.agent_id=tbl_insurance_agent.agent_id
group by tbl_insurance_agent.first_name, tbl_insurance_agent.last_name, tbl_insurance_agent.agent_email, tbl_insurance_agent.agent_address");
			return $rest;
		
		}
		
		public function agent_view_tvsc_annual($agent){
			$rest = $this->con()->query("select * from tbl_vs_client where agent_id='$agent' And status='Annual'");
			return $rest;
		
		}
		public function agent_view_tvsc_life($agent){
			$rest = $this->con()->query("select * from tbl_vs_client where agent_id='$agent' And status='Lifetime'");
			return $rest;
		
		}
		public function view_insurance_agent_deactive(){
			$rest = $this->con()->query("SELECT * FROM tbl_insurance_agent where status='Approved' and active='0'");
			return $rest;
		
		}	
		public function edit_insurance_agent_view($agent_id){
			$resft = $this->con()->query("SELECT * FROM tbl_insurance_agent where agent_id='$agent_id'");
			return $resft;
		
		}
		
		public function edit_agent_registration($first_name,$last_name,$address,$email,$password,$id_code,$insurance_agent_id){
		
				$result = $this->con()->query("UPDATE tbl_insurance_agent SET first_name='$first_name',last_name='$last_name',agent_address='$address',agent_email='$email',password='$password',mail_verify='$id_code' WHERE agent_id='$insurance_agent_id'");
				return $result;
		
		}
		
		
		public function agent_user_data($agent_id){
			$show = $this->con()->query("SELECT * FROM tbl_insurance_agent where agent_id='$agent_id'");
			return $show;
		
		}
		public function check_password($uid){
			$q = $this->con()->query("select password from tbl_insurance_agent where agent_id = '$uid'");
			return $q;
		
		}
		
		public function update_password_data($new_password,$uid){
			$ss = $this->con()->query("update tbl_insurance_agent set password = '$new_password' where agent_id = '$uid'");
			return $ss;
		}
		public function insurance_agent_deactivated($id){
			$rr = $this->con()->query("update tbl_insurance_agent set active = '0' where agent_id = '$id'");
			return $rr;
		}
		public function insurance_agent_activated($id){
			$rr = $this->con()->query("update tbl_insurance_agent set active = '1' where agent_id = '$id'");
			return $rr;
		}
		public function insurance_agent_delete($id){
			$result = $this->con()->query("DELETE FROM tbl_insurance_agent Where agent_id='$id'");
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
		
		public function forgotpassword($email){
		
			$pass = $this->con()->query("SELECT first_name, last_name, mail_verify FROM tbl_insurance_agent WHERE agent_email = '$email'");

			//$row_pass = $pass->fetch_assoc();

			return $pass;
		}
		
	}
?>