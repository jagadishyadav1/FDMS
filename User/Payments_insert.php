<?php

include('../dbconnect/dbconnect.php');


$vendor_request_id=$_POST['vendor_request_id'];
$payment_amount=$_POST['payment_amount'];
$payment_transaction_no=$_POST['payment_transaction_no'];
$payment_date=$_POST['payment_date'];


$sql="insert into payments values(null,'$vendor_request_id','$payment_amount','$payment_transaction_no','$payment_date')";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Inserted');
document.location="Payments.php";
</script>