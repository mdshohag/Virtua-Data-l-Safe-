<?php
	class cls_virtual_safe_client{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function paye_date($uui){
		
					$dd = $this->con()->query("SELECT * From tbl_vs_client where client_id='$uui' and valid_to >= CURDATE( ) ");
					return $dd;
					
		}
		public function select_date($uui){
		
			$dd = $this->con()->query("SELECT * From tbl_vs_client where client_id='$uui' ");
			return $dd;
					
		}
		public function agent_view_vs_client_data($client_emailid){
		
			$rues = $this->con()->query("SELECT * From tbl_vs_client where client_email='$client_emailid' ");
			return $rues;
					
		}
		public function agent_select_date($agent_client_id){
		
			$rest = $this->con()->query("SELECT * From tbl_vs_client where client_id='$agent_client_id' ");
			return $rest;
					
		}
		public function admin_view_paye_date($cuid){
					$dd = $this->con()->query("SELECT * From tbl_vs_client where client_id='$cuid'");
					return $dd;
		}
		
		public function get_vscode($acodee){
			$res = $this->con()->query("SELECT * From tbl_vs_client where client_id='$acodee'");
			return $res;
		}	
	public function view_vs_code($vs_code){
			$res = $this->con()->query("SELECT * From tbl_vscode_master where vs_code_type='$vs_code'");
			return $res;
		}
		public function view_hr_company(){
			$res = $this->con()->query("SELECT * From tbl_hr_company");
			return $res;
		}
		
		public function hr_company_select($hr_companyid){

			$result=$this->con()->query("SELECT * FROM tbl_hr_company_roster WHERE company_code='$hr_companyid'");
			return $result;
		}
		public function view_company_roster_id($company_roster_id){

			$result=$this->con()->query("SELECT * FROM tbl_employee_roster WHERE company_roster_code='$company_roster_id'");
			return $result;
		}
		
		public function select_client_data(){
			$q = $this->con()->query("select * from tbl_vs_client");
			return $q;
		
		}
		public function select_client_data_email($cuid){
			$q = $this->con()->query("select * from tbl_vs_client where agent_id='$cuid'");
			return $q;
		
		}
		public function check_eamil($email){
			$q = $this->con()->query("select client_email from tbl_vs_client where client_email = '$email'");
			return $q;
		
		}
		
		public function vs_registration($vs_id,$first_name,$last_name,$agentid,$email,$address,$vs_code,$password){
		
			$yes = 2;
			$res = $this->con()->query("SELECT client_email From tbl_vs_client where client_email='$email'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			$vsc_yes = 4;
			
			$rests = $this->con()->query("SELECT vs_code From tbl_vs_client where vs_code='$vs_code'");
			$countt = $rests->num_rows;
			
			if($countt != 0){
				return $vsc_yes;
				return false;
			}
			$amount_dolors = $this->con()->query("SELECT * From tbl_payment_fees where type='annual'");
			$amountss = $amount_dolors->fetch_assoc();
			$annualss = $amountss['amount_fees'];
			
			$amount_lifetime  = $this->con()->query("SELECT * From tbl_payment_fees where type='lifetime'");
			$lifetime = $amount_lifetime->fetch_assoc();
			$lifetimepay = $lifetime['amount_fees'];
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client (client_id,client_first_name, client_last_name, agent_id, client_email, client_address, vs_code, subscription_rcbl, lifetime_pay, company_client, client_password,active) VALUES ('$vs_id','$first_name','$last_name','$agentid','$email','$address','$vs_code','$annualss','$lifetimepay','N',md5('$password'),'1')");
			return $result;
			
		}
		public function basic_vs_registration($vs_id,$first_name,$last_name,$email,$vs_code,$password){
		
			$yes = 2;
			$res = $this->con()->query("SELECT client_email From tbl_vs_client where client_email='$email'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			$vsc_yes = 4;
			
			$rests = $this->con()->query("SELECT vs_code From tbl_vs_client where vs_code='$vs_code'");
			$countt = $rests->num_rows;
			
			if($countt != 0){
				return $vsc_yes;
				return false;
			}
			$amount_data = $this->con()->query("SELECT * From tbl_payment_fees where type='annual'");
			$amount = $amount_data->fetch_assoc();
			$annual = $amount['amount_fees'];
			
			$amount_lifetime  = $this->con()->query("SELECT * From tbl_payment_fees where type='lifetime'");
			$lifetime = $amount_lifetime->fetch_assoc();
			$lifetimepay = $lifetime['amount_fees'];
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client (client_id,client_first_name, client_last_name, client_email, vs_code, subscription_rcbl, lifetime_pay, company_client, client_password, active) VALUES ('$vs_id','$first_name','$last_name','$email','$vs_code','$annual','$lifetimepay','N','$password','1')");
			return $result;
			
		}
		public function information_tvs_client($agnt_id){
			$upp=$this->con()->query("SELECT * FROM tbl_vs_client where client_id='$agnt_id'");
			return $upp;
		}
		public function agent_view_information_tvs_client($agnt_id,$agent_client_id){
			$ress=$this->con()->query("SELECT * FROM tbl_vs_client where agent_id='$agnt_id' And client_id='$agent_client_id'");
			return $ress;
		}
		public function information_tvs_view_client($cuid){
			$upp=$this->con()->query("SELECT * FROM tbl_vs_client where client_id='$cuid'");
			return $upp;
		}
		public function information_user_data($user_id,$client_id){
			$upp=$this->con()->query("SELECT * FROM tbl_vs_client where client_id='$user_id' and client_id='$client_id'");
			return $upp;
		}
		public function agent_information_user_data($email_id,$user_id){
			$ar=$this->con()->query("SELECT * FROM tbl_vs_client where client_email='$email_id' and client_id='$user_id'");
			return $ar;
		}
		public function update_vs_client_information($frist_name,$last_name,$country_name,$city,$state,$address,$zip_code,$user_id,$client_id){
			$update = $this->con()->query("update tbl_vs_client set client_first_name= '$frist_name', client_last_name='$last_name', country_name='$country_name', city='$city', state='$state',  client_address='$address', zip_code='$zip_code' where client_id='$user_id' and client_id='$client_id'");
			return $update;
		}
		public function agent_update_vs_client_information($frist_name,$last_name,$country_name,$city,$state,$address,$zip_code,$email_id,$user_id){
			$update = $this->con()->query("update tbl_vs_client set client_first_name= '$frist_name', client_last_name='$last_name', country_name='$country_name', city='$city', state='$state',  client_address='$address', zip_code='$zip_code' where client_email='$email_id' and client_id='$user_id'");
			return $update;
		}
		
		public function tvsc_deactivated($id){
			$rr = $this->con()->query("update tbl_vs_client set active = '2' where client_id = '$id'");
			return $rr;
		}
		public function tvsc_activated($id){
			$rr = $this->con()->query("update tbl_vs_client set active = '1' where client_id = '$id'");
			return $rr;
		}
		
		public function check_password_client($uid){
			$q = $this->con()->query("select client_password from tbl_vs_client where client_id = '$uid'");
			return $q;
		
		}
		public function check_userid_client($uid){
			$q = $this->con()->query("select client_email from tbl_vs_client where client_id = '$uid'");
			return $q;
		
		}
		public function password_update($new_password,$uid){
			$ss = $this->con()->query("update tbl_vs_client set client_password = '$new_password', active='1' where client_id = '$uid'");
			return $ss;
		}
		
		public function clnt_password_update($new_password,$uid){
			$ss = $this->con()->query("update tbl_vs_client set client_password = '$new_password', active='1' where client_id = '$uid'");
			return $ss;
		}
		public function client_password_reset($new_password,$uid){
			$ss = $this->con()->query("update tbl_vs_client set client_password = '$new_password', active='1' where client_id = '$uid'");
			return $ss;
		}
		
		public function vs_registration_admin($vs_id,$first_name,$last_name,$email,$address,$vs_code,$password){
		
			$yes = 2;
			$res = $this->con()->query("SELECT client_email From tbl_vs_client where client_email='$email'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			$vsc_yes = 4;
			
			$rests = $this->con()->query("SELECT vs_code From tbl_vs_client where vs_code='$vs_code'");
			$countt = $rests->num_rows;
			
			if($countt != 0){
				return $vsc_yes;
				return false;
			}
			
			$amount_dolor = $this->con()->query("SELECT * From tbl_payment_fees where type='annual'");
			$amounts = $amount_dolor->fetch_assoc();
			$annuals = $amounts['amount_fees'];
			
			$amount_lifetime  = $this->con()->query("SELECT * From tbl_payment_fees where type='lifetime'");
			$lifetime = $amount_lifetime->fetch_assoc();
			$lifetimepay = $lifetime['amount_fees'];
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client (client_id,client_first_name, client_last_name, client_email, client_address, vs_code, subscription_rcbl, lifetime_pay, company_client, client_password,active) VALUES ('$vs_id','$first_name','$last_name','$email','$address','$vs_code','$annuals','$lifetimepay','N',md5('$password'),'1')");
			return $result;
			
		}
		public function view_vs_client(){
			$rest = $this->con()->query("SELECT * FROM tbl_vs_client where active='1'");
			return $rest;
		
		}
		public function view_vs_client_list(){
			$rest = $this->con()->query("SELECT * FROM tbl_vs_client where active='2'");
			return $rest;
		
		}
		public function view_vs_client_cuid($cuid){
			$rest = $this->con()->query("SELECT * FROM tbl_vs_client where agent_id='$cuid'");
			return $rest;
		
		}
		
		
		public function edit_vs_code_view($client_id){
			$shows = $this->con()->query("SELECT * FROM tbl_vs_client where client_id='$client_id'");
			return $shows;
		}
		
				
		public function vs_client_update($first_name,$last_name,$email,$address,$password, $vs_client_id){
			
			
			$up = $this->con()->query("update tbl_vs_client set client_first_name = '$first_name', client_last_name = '$last_name', client_email ='$email', client_address ='$address', client_password = md5('$password') where client_id = '$vs_client_id'");
			return $up;
		
		}
		
		public function edit_vs_code_view_agent($client_id,$cuid){
			$shows = $this->con()->query("SELECT * FROM tbl_vs_client where client_id='$client_id' and agent_id='$cuid'");
			return $shows;
		}
		
		public function vs_client_update_byagent($first_name,$last_name,$email,$address,$password,$vs_client_id,$cuid){
			
			
			$up = $this->con()->query("update tbl_vs_client set client_first_name = '$first_name', client_last_name = '$last_name', client_email ='$email', client_address ='$address', client_password = md5('$password') where client_id = '$vs_client_id' and agent_id='$cuid'");
			return $up;
		
		}
		
		
		public function view_vs_client_id(){
		
			$res = $this->con()->query("SELECT * FROM tbl_vs_client");
			return $res;
		}
		
		
		public function add_vs_client_asset($client_id,$asset_type,$asset_address,$company_name,$boat_name,$other_name,$remark){
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client_assest (client_id, asset_type, asset_address, company_name,boat_name, other_name, remark) VALUES ('$client_id','$asset_type','$asset_address','$company_name','$boat_name','$other_name','$remark')");
			return $result;
		
		}
		public function add_vs_client_asset_details($client_id,$asset_type,$asset_address,$company_name,$boat_name,$other_name,$remarks){
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client_assest (client_id, asset_type, asset_address, company_name, boat_name, other_name,remark) VALUES ('$client_id','$asset_type','$asset_address','$company_name','$boat_name','$other_name','$remarks')");
			return $result;
		
		}
		public function view_vs_client_asset_data_check($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_assest where client_id='$cuid'");
			return $data;
		}
		
		public function view_vs_client_asset($cuid){
			
			$rest=$this->con()->query("SELECT * FROM tbl_vs_client_assest where client_id='$cuid'");
			return $rest;
		
		}
		public function agent_view_vs_client_asset_data_check($agent_client_id){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_assest where client_id='$agent_client_id'");
			return $data;
		}
		public function agent_view_vs_client_asset($agent_client_id){
			
			$rest=$this->con()->query("SELECT * FROM tbl_vs_client_assest where client_id='$agent_client_id'");
			return $rest;
		
		}
		
		public function insurance_asset_data($insurance_asset_id,$client_id){
			$rr=$this->con()->query("SELECT * FROM tbl_vs_client_assest where id='$insurance_asset_id' and client_id='$client_id'");
			return $rr;
		}
		public function update_vs_client_asset($asset_type,$asset_address,$company_name,$boat_name,$other_name,$remark,$asset_id,$client_id){
			$updt=$this->con()->query("Update tbl_vs_client_assest set asset_type='$asset_type', asset_address='$asset_address', company_name='$company_name', boat_name='$boat_name', other_name='$other_name', remark='$remark' where id='$asset_id' and client_id='$client_id'");
			return $updt;
		}
		
		public function asset_delete($id,$client_id){
			$dlt = $this->con()->query("DELETE FROM tbl_vs_client_assest where id = '$id' and client_id='$client_id'");
			return $dlt;
		}
		
		public function add_vs_client_location_testament($client_id,$location_testament,$remark){
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client_location (client_id,location_testament,remark) VALUES ('$client_id','$location_testament','$remark')");
			return $result;
		
		
		}
		public function add_vs_client_location_testament_details($client_id,$typewill,$location_testament,$remarksss){
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client_location (client_id,typewill, location_testament,remark) VALUES ('$client_id','$typewill','$location_testament','$remarksss')");
			return $result;
		
		}
		
		public function view_vs_client_testament_data_check($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_location where client_id='$cuid'");
			return $data;
		}
		
		public function view_vs_testament_id($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_location where client_id='$cuid'");
			return $data;
		}
		public function agent_view_vs_client_testament_data_check($agent_client_id){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_location where client_id='$agent_client_id'");
			return $data;
		}
		public function agent_view_vs_testament_id($agent_client_id){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_location where client_id='$agent_client_id'");
			return $data;
		}
		
		
		public function insurance_testament_data($testament_id,$client_id){
			$dta = $this->con()->query("SELECT * FROM tbl_vs_client_location where id='$testament_id' and client_id='$client_id'");
			return $dta;
		}
		public function update_vs_client_location_testament($location_testament,$remark,$testament_id,$client_id){
			$updt=$this->con()->query("Update tbl_vs_client_location set location_testament='$location_testament', remark='$remark' where id='$testament_id' and client_id='$client_id'");
			return $updt;
		}
		public function testament_delete($id,$client_id){
			$dlt = $this->con()->query("DELETE FROM tbl_vs_client_location where id = '$id' and client_id='$client_id'");
			return $dlt;
		}
		public function add_vs_client_authorized($client_id,$authorized_fname,$authorized_lname,$relation,$remark){
			
			$result=$this->con()->query("INSERT INTO tbl_authorized_representive (client_id, auth_f_name, auth_l_name, relation, remark) VALUES ('$client_id','$authorized_fname','$authorized_lname','$relation','$remark')");
			return $result;
		
		
		}
		public function view_vs_client_authorized_data_check($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_authorized_representive where client_id='$cuid'");
			return $data;
		}
		public function view_vs_authorized_id($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_authorized_representive where client_id='$cuid'");
			return $data;
		}
		public function agent_view_vs_client_authorized_data_check($agent_client_id){
			$data = $this->con()->query("SELECT * FROM tbl_authorized_representive where client_id='$agent_client_id'");
			return $data;
		}
		public function agent_view_vs_authorized_id($agent_client_id){
			$data = $this->con()->query("SELECT * FROM tbl_authorized_representive where client_id='$agent_client_id'");
			return $data;
		}
		public function insurance_authorized_data($author_id,$client_id){
			$dta = $this->con()->query("SELECT * FROM tbl_authorized_representive where id='$author_id' and client_id='$client_id'");
			return $dta;
		}
		public function update_vs_client_authorized($authorized_fname,$authorized_lname,$relation,$remark,$author_id,$client_id){
			$updt=$this->con()->query("Update tbl_authorized_representive set auth_f_name='$authorized_fname', auth_l_name='$authorized_lname', relation='$relation', remark='$remark' where id='$author_id' and client_id='$client_id'");
			return $updt;
		}
		public function authorized_delete($authorized_id,$client_id){
			$dlt = $this->con()->query("DELETE FROM tbl_authorized_representive where id = '$authorized_id' and client_id='$client_id'");
			return $dlt;
		}
		
		public function insert_vs_client_authorized_details($client_id,$authorized_fname,$authorized_lname,$relation,$remark){
			
			$result=$this->con()->query("INSERT INTO tbl_authorized_representive (client_id, auth_f_name, auth_l_name, relation, remark) VALUES ('$client_id','$authorized_fname','$authorized_lname','$relation','$remark')");
			return $result;
		
		}
		
		/*public function add_vs_client_insurance($client_id,$insurancecompanycode,$insurance_name,$policy_number){
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client_insurance (client_id, insurance_comapny_code, insurance_name, policy_number) VALUES ('$client_id','$insurancecompanycode','$insurance_name','$policy_number')");
			return $result;
		
		}*/
		public function insert_vs_client_insurance($client_id,$insurancecompanycode,$insurance_name,$remark){
			
			$result=$this->con()->query("INSERT INTO tbl_vs_client_insurance (client_id, insurance_comapny_code, insurance_name, remark) VALUES ('$client_id','$insurancecompanycode','$insurance_name','$remark')");
			return $result;
		
		}
		
		public function view_vs_client_insurance_data_check($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_insurance where client_id='$cuid'");
			return $data;
		}
		public function agent_view_vs_client_insurance_data_check($agent_client_id){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_insurance where client_id='$agent_client_id'");
			return $data;
		}
		
		public function select_vs_client_insurance($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_insurance where client_id='$cuid'");
			return $data; 
		}
		public function view_vs_client_insurance($cuid){
			$data = $this->con()->query("SELECT tbl_vs_client_insurance.*, tbl_insurance_company.company_name FROM tbl_vs_client_insurance JOIN tbl_insurance_company ON tbl_vs_client_insurance.insurance_comapny_code=tbl_insurance_company.insurance_comapny_id where tbl_vs_client_insurance.client_id='$cuid'");
			return $data; 
		}
		public function view_Tvs_client_insurance_single_data($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_insurance where client_id='$cuid'");
			return $data; 
		}
		public function all_individual_client_report(){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client where agent_id='0' AND company_id='0'");
			return $data; 
		}
		public function annual_individual_client_report(){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client where agent_id='0' AND company_id='0' AND status='Annual'");
			return $data; 
		}
		public function lifetime_individual_client_report(){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client where agent_id='0' AND company_id='0' AND status='Lifetime'");
			return $data; 
		}
		public function view_vs_client_insurance_new($cuid){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_insurance where client_id='$cuid'");
			return $data; 
		}
		public function agent_view_vs_client_insurance($agent_client_id){
			$data = $this->con()->query("SELECT * FROM tbl_vs_client_insurance where client_id='$agent_client_id'");
			return $data; 
		}
		
		public function insurance_user_data($insurance_id,$client_id){
			$rest = $this->con()->query("SELECT * FROM tbl_vs_client_insurance where id='$insurance_id' and client_id='$client_id'");
			return $rest;
		}
		
		public function update_vs_client_insurance($insurancecompanycode,$insurance_name,$remark,$insurance_id,$client_id){
			$up = $this->con()->query("update tbl_vs_client_insurance set insurance_comapny_code = '$insurancecompanycode', insurance_name='$insurance_name', remark='$remark' where id = '$insurance_id' and client_id='$client_id'");
			return $up;
		}
		public function insurance_delete($id,$client_id){
			$delt = $this->con()->query("DELETE FROM tbl_vs_client_insurance where id = '$id' and client_id='$client_id'");
			return $delt;
		}
		
		public function client_user_data($client_id){
			$show = $this->con()->query("SELECT * FROM tbl_vs_client where client_id='$client_id'");
			return $show;
		
		}
		
		public function client_check_password($uid){
			$q = $this->con()->query("select client_password from tbl_vs_client where client_id = '$uid'");
			return $q;
		
		}
		public function client_update_password_data($new_password,$uid){
			$ss = $this->con()->query("update tbl_vs_client set client_password = '$new_password' where client_id = '$uid'");
			return $ss;
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
		
		
		public function view_insurance_company(){
			$res = $this->con()->query("SELECT * From tbl_insurance_company");
			return $res;
			
		}
		
		/*public function add_vs_bank($client_id,$bank_code,$bank_account,$acount_type){
			$rst=$this->con()->query("INSERT INTO tbl_vs_client_bank (client_id, bank_code, bank_account, bank_account_type) VALUES ('$client_id','$bank_code','$bank_account','$acount_type')");
			return $rst;
		}*/
		
		public function insert_vs_bank($client_id,$bank_code,$acount_type,$remark){
			$rst=$this->con()->query("INSERT INTO tbl_vs_client_bank (client_id, bank_code, bank_account_type,remark) VALUES ('$client_id','$bank_code','$acount_type','$remark')");
			return $rst;
		}
		public function insert_vs_bank_details($client_id,$bank_code,$acount_type,$remarkss){
			$rst=$this->con()->query("INSERT INTO tbl_vs_client_bank (client_id, bank_code, bank_account_type,remark) VALUES ('$client_id','$bank_code','$acount_type','$remarkss')");
			return $rst;
		}
		
				
		public function view_vs_client_bank_data_check($cuid){
			$dd = $this->con()->query("SELECT * FROM tbl_vs_client_bank where client_id='$cuid'");
			return $dd;
		}
		
		public function view_vs_client_bank($cuid){
			
			$tt=$this->con()->query("SELECT * from tbl_vs_client_bank where client_id='$cuid'");
			return $tt;
		/*SELECT tbl_vs_client_bank.*, tbl_bank_master.bank_name from tbl_vs_client_bank JOIN tbl_bank_master ON tbl_vs_client_bank.bank_code=tbl_bank_master.bank_id where tbl_vs_client_bank.client_id='$cuid'*/
		}
		public function agent_view_vs_client_bank_data_check($agent_client_id){
			$dd = $this->con()->query("SELECT * FROM tbl_vs_client_bank where client_id='$agent_client_id'");
			return $dd;
		}
		public function agent_view_vs_client_bank($agent_client_id){
			
			$tt=$this->con()->query("SELECT * from tbl_vs_client_bank where client_id='$agent_client_id'");
			return $tt;
		
		}
		
		public function bank_data($bank_id,$client_id){
			$sss = $this->con()->query("SELECT * FROM tbl_vs_client_bank where id='$bank_id' and client_id='$client_id'");
			return $sss;
		}
		
		public function update_vs_client_bank($bank_name,$acount_type,$remark,$tvs_bank_id,$client_id){
			$up = $this->con()->query("update tbl_vs_client_bank set bank_code = '$bank_name', bank_account_type='$acount_type', remark='$remark' where id = '$tvs_bank_id' and client_id='$client_id'");
			return $up;
		}
		
		public function bank_delete($id,$client_id){
			$deltt = $this->con()->query("DELETE FROM tbl_vs_client_bank where id = '$id' and client_id='$client_id'");
			return $deltt;
		}		
		
		public function view_vs_bank(){
			$result = $this->con()->query("select tbl_vs_client_bank.*, tbl_vs_client.client_first_name,tbl_vs_client.client_last_name,tbl_bank_master.bank_name from tbl_vs_client_bank JOIN tbl_vs_client ON tbl_vs_client_bank.client_id=tbl_vs_client.client_id JOIN tbl_bank_master ON tbl_vs_client_bank.bank_code=tbl_bank_master.bank_id ");
			return $result;
		}
		
		public function forgotpasswordclient($email){
		
			$pass = $this->con()->query("SELECT client_id, client_first_name, client_last_name FROM tbl_vs_client WHERE client_email = '$email'");

			//$row_pass = $pass->fetch_assoc();

			return $pass;
		}
		
		public function access_code_invalid(){
			$amount_dolors = $this->con()->query("SELECT * From tbl_payment_fees where type='search'");
			return $amount_dolors;
		}
		
		public function tvsc_delete($id){
			$r = $this->con()->query("DELETE FROM tbl_vs_client Where client_id='$id'");
			return $r;
		}
		public function tvsc_insurance_delete($id){
			$rr = $this->con()->query("DELETE FROM tbl_vs_client_insurance Where client_id='$id'");
			return $rr;
		}
		public function tvsc_assest_delete($id){
			$rrr = $this->con()->query("DELETE FROM tbl_vs_client_assest Where client_id='$id'");
			return $rrr;
		}
		public function tvsc_bank_delete($id){
			$rrrr = $this->con()->query("DELETE FROM tbl_vs_client_bank Where client_id='$id'");
			return $rrrr;
		}
		public function tvsc_testament_delete($id){
			$rrrrr = $this->con()->query("DELETE FROM tbl_vs_client_location Where client_id='$id'");
			return $rrrrr;
		}
		public function tvsc_vscode_delete($vscode){
			$rrrrrr = $this->con()->query("DELETE FROM tbl_vscode_master Where vs_code='$vscode'");
			return $rrrrrr;
		}
		
		public function view_country(){
			$result = $this->con()->query("SELECT * FROM tbl_country");
			return $result;
		}
		public function district_select($country){

			$result=$this->con()->query("SELECT * FROM tbl_cities WHERE country_id='$country'");
			return $result;
		}
		public function view_tbl_hr_report(){
			$result = $this->con()->query("SELECT tbl_vs_client.*, tbl_hr_company.company_name,tbl_insurance_agent.first_name,tbl_insurance_agent.last_name,tbl_insurance_agent.agent_email FROM tbl_vs_client Left JOIN tbl_hr_company ON tbl_vs_client.company_id=tbl_hr_company.comapny_code Left JOIN tbl_insurance_agent ON tbl_vs_client.agent_id=tbl_insurance_agent.agent_id");
			return $result;
		}	
		public function view_tbl_company_report($cname){
			$result = $this->con()->query("SELECT tbl_vs_client.*, tbl_hr_company.company_name FROM tbl_vs_client JOIN tbl_hr_company ON tbl_vs_client.company_id=tbl_hr_company.comapny_code WHERE tbl_vs_client.company_id = '$cname'");
			return $result;
		}
		
	}
?>