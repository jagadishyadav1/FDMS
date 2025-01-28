<?php

include('../dbconnect/dbconnect.php');


$fuel_name=$_POST['fuel_name'];
$fuel_type=$_POST['fuel_type'];
$fuel_amount=$_POST['fuel_amount'];

$sql="insert into fuel_detail values(null,'$fuel_name','$fuel_type','$fuel_amount')";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Inserted');
document.location="Fuel_details.php";
</script>