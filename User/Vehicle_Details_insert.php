<?php

include('../dbconnect/dbconnect.php');


$vehicle_no=$_POST['vehicle_no'];
$driver_name=$_POST['driver_name'];
$contact_no=$_POST['contact_no'];



$vehicle_photo=$_FILES["vehicle_photo"]['name'];
$tmp_location=$_FILES["vehicle_photo"]["tmp_name"];
$target="../uploads/".$vehicle_photo;
move_uploaded_file($tmp_location,$target);


$sql="insert into vehicle_details values(null,'$vehicle_no','$driver_name','$contact_no','$vehicle_photo')";
mysqli_query($conn,$sql);	


?>
<script>
alert('Values Inserted');
document.location="Vehicle_Details.php";
</script>