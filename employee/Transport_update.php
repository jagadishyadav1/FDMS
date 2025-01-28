<?php

include('../dbconnect/dbconnect.php');

$Transport_id=$_POST['Transport_id'];

$Vendor_request_id=$_POST['Vendor_request_id'];
$vehicle_id=$_POST['vehicle_id'];
$Leaving_date=$_POST['Leaving_date'];
$Reached_date=$_POST['Reached_date'];
$status=$_POST['status'];

$sql="update transport set Vendor_request_id='$Vendor_request_id',vehicle_id='$vehicle_id',
Leaving_date='$Leaving_date',Reached_date='$Reached_date',status='$status' where Transport_id='$Transport_id' ";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Updated');
document.location="Transport_view.php";
</script>