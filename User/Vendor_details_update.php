<?php

include('../dbconnect/dbconnect.php');

$User_id=$_POST['User_id'];

$User_name=$_POST['User_name'];
$User_address=$_POST['User_address'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];


$sql="update user_details set User_name='$User_name',User_address='$User_address',Email_id='$email',contact_no='$contact_no' where User_id='$User_id' ";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Updated');
document.location="Vendor_details_edit.php";
</script>