<?php

include('../dbconnect/dbconnect.php');


$User_id=$_POST['User_id'];
$fuel_id=$_POST['fuel_id'];

$User_lang=$_POST['User_lang'];
$User_latt=$_POST['User_latt'];
$quantity=$_POST['quantity'];
$total_amount=$_POST['total_amount'];
$request_status=$_POST['request_status'];
$Request_date=$_POST['Request_date'];

$sql="insert into user_request_details values(null,'$User_id','0','$User_lang','$User_latt','$fuel_id','$quantity','0','PENDING','$Request_date')";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Inserted');
document.location="Vendor_Request_view.php";
</script>