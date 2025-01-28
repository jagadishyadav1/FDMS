<?php 

	include('../dbconnect/dbconnect.php');
	
	$id=$_REQUEST['id'];
	
	$sql="delete from vendors_details where Vendor_id ='$id'";
	mysqli_query($conn,$sql);
	
?>

<script>
alert('Deleted..');
document.location="Vendors_details_view.php";
</script>
