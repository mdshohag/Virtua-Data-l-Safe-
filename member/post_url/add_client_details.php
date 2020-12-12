<?php
	session_start();
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_virtual_safe_client = new cls_virtual_safe_client();
	//$cls_vscode_master = new cls_vscode_master();
	
	
	$client_id = $_REQUEST['client_id'];
	$user_id = $_POST['user_id'];
	$frist_name = htmlspecialchars($_REQUEST['frist_name'], ENT_QUOTES, 'UTF-8');
	$last_name = htmlspecialchars($_REQUEST['last_name'], ENT_QUOTES, 'UTF-8');
	$country_name = htmlspecialchars($_REQUEST['country_name'], ENT_QUOTES, 'UTF-8');
	$city = htmlspecialchars($_REQUEST['city'], ENT_QUOTES, 'UTF-8');
	$state = htmlspecialchars($_REQUEST['state'], ENT_QUOTES, 'UTF-8');
	$address = htmlspecialchars($_REQUEST['address'], ENT_QUOTES, 'UTF-8');
	$zip_code = htmlspecialchars($_REQUEST['zip_code'], ENT_QUOTES, 'UTF-8');
	
	// end general information
	
	$insurancecompanycode = htmlspecialchars($_REQUEST['insurance_company'], ENT_QUOTES, 'UTF-8');
	$insurance_name = htmlspecialchars($_REQUEST['insurance_name'], ENT_QUOTES, 'UTF-8');
	//$policy_number = htmlspecialchars($_REQUEST['policy_number'], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'], ENT_QUOTES, 'UTF-8');
	
	// end insurance
	
	$asset_type = htmlspecialchars($_REQUEST['asset_type'], ENT_QUOTES, 'UTF-8');
	$asset_address = htmlspecialchars($_REQUEST['asset_address'], ENT_QUOTES, 'UTF-8');
	$company_name = htmlspecialchars($_REQUEST['company_name'], ENT_QUOTES, 'UTF-8');
	$boat_name = htmlspecialchars($_REQUEST['boat_name'], ENT_QUOTES, 'UTF-8');
	$other_name = htmlspecialchars($_REQUEST['other_name'], ENT_QUOTES, 'UTF-8');
	$remarks = htmlspecialchars($_REQUEST['remarks'], ENT_QUOTES, 'UTF-8');
	
	// end Asset
	
	$bank_code = htmlspecialchars($_REQUEST['bank_code'], ENT_QUOTES, 'UTF-8');
	//$bank_account = htmlspecialchars($_REQUEST['bank_account'], ENT_QUOTES, 'UTF-8');
	$acount_type = htmlspecialchars($_REQUEST['acount_type'], ENT_QUOTES, 'UTF-8');
	$remarkss = htmlspecialchars($_REQUEST['remarkss'], ENT_QUOTES, 'UTF-8');
	
	// end Bank
	
	$typewill = htmlspecialchars($_REQUEST['typewill'], ENT_QUOTES, 'UTF-8');
	$location_testament = htmlspecialchars($_REQUEST['location_testament'], ENT_QUOTES, 'UTF-8');
	$remarksss = htmlspecialchars($_REQUEST['remarksss'], ENT_QUOTES, 'UTF-8');
	
	// end Testament
	$authorized_fname = htmlspecialchars($_REQUEST['authorized_fname'], ENT_QUOTES, 'UTF-8');
	$authorized_lname = htmlspecialchars($_REQUEST['authorized_lname'], ENT_QUOTES, 'UTF-8');
	$relation = htmlspecialchars($_REQUEST['relation'], ENT_QUOTES, 'UTF-8');
	$remark = htmlspecialchars($_REQUEST['remark'], ENT_QUOTES, 'UTF-8');

	
	// end Testament
 
echo $cls_virtual_safe_client->update_vs_client_information($frist_name,$last_name,$country_name,$city,$state,$address,$zip_code,$user_id,$client_id);

echo $cls_virtual_safe_client->insert_vs_client_insurance($client_id,$insurancecompanycode,$insurance_name,$remark);

echo $cls_virtual_safe_client->add_vs_client_asset_details($client_id,$asset_type,$asset_address,$company_name,$boat_name,$other_name,$remarks);

echo $cls_virtual_safe_client->add_vs_client_location_testament_details($client_id,$typewill,$location_testament,$remarksss);

echo $cls_virtual_safe_client->insert_vs_bank_details($client_id,$bank_code,$acount_type,$remarkss);

echo $cls_virtual_safe_client->insert_vs_client_authorized_details($client_id,$authorized_fname,$authorized_lname,$relation,$remark);
 
 

	

?>