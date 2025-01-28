<?php
session_start();

$uname=$_SESSION['uname']; 
include('../dbconnect/dbconnect.php');
	
	$id=$_REQUEST['id'];

 

	
	
	$sql2="update user_request_details set Request_status='DELEVERED' where User_request_id ='$id'";
	mysqli_query($conn,$sql2);
	
	
	
	
?>

<script>
alert('Request Is Delevered..');
document.location="Request_Accepted_view.php";
</script>
