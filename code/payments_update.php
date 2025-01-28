<?php

include('../dbconnect/dbconnect.php');


$Payment_id=$_POST['Payment_id'];
$vendor_request_id=$_POST['vendor_request_id'];
$payment_amount=$_POST['payment_amount'];
$payment_transaction_no=$_POST['payment_transaction_no'];
$payment_date=$_POST['payment_date'];


$sql="update payments set Vendor_request_id='$vendor_request_id',Payment_amount='$payment_amount',Payment_transaction_no='$payment_transaction_no',Payment_date='$payment_date' where Payment_id='$Payment_id'";
mysqli_query($conn,$sql);


?>
<script>
alert('Values Updated');
document.location="Payments_view.php";
</script>