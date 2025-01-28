<?php

include('../dbconnect/dbconnect.php');

$Fuel_id=$_POST['Fuel_id'];
$fuel_name=$_POST['fuel_name'];
$fuel_type=$_POST['fuel_type'];
$fuel_amount=$_POST['fuel_amount'];

$sql="update fuel_detail set Fuel_name='$fuel_name',Fuel_type='$fuel_type',Fuel_amount='$fuel_amount' where Fuel_id='$Fuel_id'";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Updated');
document.location="Fuel_details_view.php";
</script>