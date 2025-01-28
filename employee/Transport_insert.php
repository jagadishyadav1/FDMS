<?php

include('../dbconnect/dbconnect.php');


$Vendor_request_id=$_POST['Vendor_request_id'];
$vehicle_id=$_POST['vehicle_id'];
$Leaving_date=$_POST['Leaving_date'];
$Reached_date=$_POST['Reached_date'];
$status=$_POST['status'];

$sql="insert into transport values(null,'$Vendor_request_id','$vehicle_id','$Leaving_date','$Reached_date','$status')";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Inserted');
document.location="Transport.php";
</script>