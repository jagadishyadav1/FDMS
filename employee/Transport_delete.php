<?php 

	include('../dbconnect/dbconnect.php');
	
	$id=$_REQUEST['id'];
	
	$sql="delete from transport where Transport_id='$id'";
	mysqli_query($conn,$sql);
	
?>

<script>
alert('Deleted..');
document.location="Transport_view.php";
</script>
