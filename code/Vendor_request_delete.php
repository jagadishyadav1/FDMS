<?php 

	include('../dbconnect/dbconnect.php');
	
	$id=$_REQUEST['id'];
	
	$sql="delete from vendor_request_details where Vendor_request_id ='$id'";
	mysqli_query($conn,$sql);
	
?>

<script>
alert('Deleted..');
document.location="Vendor_request_view.php";
</script>
