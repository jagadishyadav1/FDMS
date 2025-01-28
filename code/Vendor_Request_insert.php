<?php

include('../dbconnect/dbconnect.php');


$vendor_id=$_POST['vendor_id'];
$fuel_id=$_POST['fuel_id'];
$quantity=$_POST['quantity'];
$total_amount=$_POST['total_amount'];
$request_status=$_POST['request_status'];

$sql="insert into vendor_request_details values(null,'$vendor_id','$fuel_id','$quantity','$total_amount','$request_status')";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Inserted');
document.location="Vendor_Request.php";
</script>