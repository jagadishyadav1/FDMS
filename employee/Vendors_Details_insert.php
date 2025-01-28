<?php

include('../dbconnect/dbconnect.php');


$User_name=$_POST['User_name'];
$User_address=$_POST['User_address'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$owner_name=$_POST['owner_name'];
$GSTN=$_POST['GSTN'];

$sql="insert into User_details values(null,'$User_name','$User_address','$email','$contact_no','$owner_name','$GSTN')";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Inserted');
document.location="Vendors_Details.php";
</script>