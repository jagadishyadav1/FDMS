<?php

include('../dbconnect/dbconnect.php');


$vendor_name=$_POST['vendor_name'];
$vendor_address=$_POST['vendor_address'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$owner_name=$_POST['owner_name'];
$GSTN=$_POST['GSTN'];

$sql="insert into vendors_details values(null,'$vendor_name','$vendor_address','$email','$contact_no','$owner_name','$GSTN')";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Inserted');
document.location="Vendors_Details.php";
</script>