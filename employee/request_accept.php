<?php
session_start();

$uname=$_SESSION['uname']; 
include('../dbconnect/dbconnect.php');
	
	$id=$_REQUEST['id'];
	$trs_amount=$_POST['trs_amount'];
	$emp_latt=$_POST['emp_latt'];
	$emp_lang=$_POST['emp_lang'];

 $sql="select * from vehicle_details where Vehicle_no='$uname' ";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
  $Vehicle_id=$row['Vehicle_id'];
 

	
	
	$sql2="update user_request_details set Vehicle_id='$Vehicle_id',Total_amount='$trs_amount',Request_status='ACCEPTED' where User_request_id ='$id'";
	mysqli_query($conn,$sql2);
	
	
	$sql3="insert into emp_location values(null,'$emp_latt','$emp_lang','$id')";
	mysqli_query($conn,$sql3);
	
?>

<script>
alert('Request Is Accepted..');
document.location="Request_Accepted_view.php";
</script>
