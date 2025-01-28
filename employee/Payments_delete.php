<?php 

	include('../dbconnect/dbconnect.php');
	
	$id=$_REQUEST['id'];
	
	$sql="delete from payments where Payment_id ='$id'";
	mysqli_query($conn,$sql);
	
?>

<script>
alert('Deleted..');
document.location="Payments_view.php";
</script>
