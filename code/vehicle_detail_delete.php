<?php 

	include('../dbconnect/dbconnect.php');
	
	$id=$_REQUEST['id'];
	
	$sql="delete from vehicle_details where Vehicle_id ='$id'";
	mysqli_query($conn,$sql);
	
?>

<script>
alert('Deleted..');
document.location="vehicle_detail_view.php";
</script>
