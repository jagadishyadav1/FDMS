<?php

include('../dbconnect/dbconnect.php');

$Vendor_request_id=$_POST['Vendor_request_id'];

$vendor_id=$_POST['vendor_id'];
$fuel_id=$_POST['fuel_id'];
$quantity=$_POST['quantity'];
$total_amount=$_POST['total_amount'];
$request_status=$_POST['request_status'];

$sql="update vendor_request_details set Vendor_id='$vendor_id',Fuel_id='$fuel_id',Quantity='$quantity',Total_amount='$total_amount',Request_status='$request_status' where Vendor_request_id='$Vendor_request_id' ";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Updated');
document.location="Vendor_Request_view.php";
</script>