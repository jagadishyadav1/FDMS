<?php

include('../dbconnect/dbconnect.php');

$Vehicle_id=$_POST['Vehicle_id'];
$vehicle_no=$_POST['vehicle_no'];
$driver_name=$_POST['driver_name'];
$contact_no=$_POST['contact_no'];
$vehicle_photo=$_POST['vehicle_photo'];


$sql="update vehicle_details set vehicle_no='$vehicle_no',driver_name='$driver_name',contact_no='$contact_no',vehicle_photo='$vehicle_photo' where Vehicle_id='$Vehicle_id'";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Updated');
document.location="vehicle_detail_view.php";
</script>