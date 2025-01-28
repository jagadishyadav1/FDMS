<?php

include('../dbconnect/dbconnect.php');

$Vendor_id=$_POST['Vendor_id'];

$vendor_name=$_POST['vendor_name'];
$vendor_address=$_POST['vendor_address'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$owner_name=$_POST['owner_name'];
$GSTN=$_POST['GSTN'];

$sql="update vendors_details set vendor_name='$vendor_name',vendor_address='$vendor_address',Email_id='$email',contact_no='$contact_no',owner_name='$owner_name',GSTN_No='$GSTN' where Vendor_id='$Vendor_id' ";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Updated');
document.location="Vendors_Details_view.php";
</script>