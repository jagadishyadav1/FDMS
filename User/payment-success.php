
<?php 
if(isset($_GET)){
    
    //echo "<pre>";
    //print_r($_GET);
    //echo "</p>";
	$id=$_REQUEST['id'];
	$order_id=$_REQUEST['oid'];
	$amount=$_REQUEST['amount'];
	$payment_date=date('Y-m-d');
	
	
	include('../dbconnect/dbconnect.php');






$sql="insert into payments values(null,'$id','$amount','$order_id','$payment_date')";
mysqli_query($conn,$sql);


$sql2="update user_request_details set Request_status='PAID' where User_request_id='$id'";
mysqli_query($conn,$sql2);

}
?>
<script>
alert('Payment Is Done Successfully....');
document.location="Payments_view.php";
</script>
