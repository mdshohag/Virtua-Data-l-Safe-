<?php
	require_once('../../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();

//fetch.php
/*OR Address LIKE '%".$search."%' 
  OR City LIKE '%".$search."%' 
  OR PostalCode LIKE '%".$search."%' 
  OR Country LIKE '%".$search."%'*/
//$connect = mysqli_connect("localhost", "root", "", "db_cadet_college");
	$renewal_dolors = $db->query("SELECT * From tbl_payment_fees where type='renewal'");
	$renewal = $renewal_dolors->fetch_assoc();
	$renewals = $renewal['amount_fees'];

$output = '';
//if(isset($_POST["name"]) && ($_POST["detes"]))
if(isset($_POST["name"]))
{
 $cname = $_POST["name"];
 //$date = $_POST["detes"];  AND tbl_vs_client.valid_to <= '$date'
 $result = $db->query("SELECT tbl_vs_client.*, tbl_hr_company.company_name FROM tbl_vs_client JOIN tbl_hr_company ON tbl_vs_client.company_id=tbl_hr_company.comapny_code WHERE tbl_vs_client.company_id = '$cname'");
}
else
{
 //$result = $db->query(" SELECT * FROM tbl_vs_client ORDER BY client_id ");
}

//$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
   <table class="table table bordered" style="width:1000px;">
    <tr style="background-color:gray;color:white;">
     <th>Serial No</th>
	 <th>Company Name</th>
     <th>Client Name</th>
     <th>Client Email</th>
     <th>Product Type</th>
	<th>Valid From</th>
	<th>Valid To</th>
     <th>Amount</th>
   
    </tr>
 ';
 $i = 1;
 $TotalAmount = 0;
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'. $i++ .'</td>
    <td>'.$row["company_name"].'</td>
    <td>'.$row["client_first_name"].' '.$row["client_last_name"].'</td>
    <td>'.$row["client_email"].'</td>
    <td>'.$row["status"].'</td>
    <td>'.$row["valid_from"].'</td>
    <td>'.$row["valid_to"].'</td>
    <td>'.$row["renewal_number"].' <span style="visibility: hidden;">'.$TotalAmount = $TotalAmount+$row["renewal_number"].'</span></td>
   
   
   </tr>
    
  ';
 }
$output .= '
   <tr>
    <td colspan="8" style="text-align:right;padding-right:50px;">Total Due Amount: $'.$TotalAmount = $TotalAmount+$row["renewal_number"].'</td>
    </tr>
    
  ';
  $output .= '
   <tr>
   <!-- <td colspan="8"><center><input style="color:#003366" type="button" onclick="printDiv(' . "'printableArea'" . ')" value="PRINT" /></center></td>-->
    <td colspan="8"><center><a href="company_report_print.php?company_id='.$cname.'" target="_blank" class="btn btn-danger">PRINT</a></center></td>
    </tr>
    
  ';

 echo $output;
}

else
{
 echo '<center><h3>Not Found Result</center></h3>';
}
