<?php
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$emailid=$_REQUEST['emailid'];
$contact_no=$_REQUEST['contact_no'];
$payAmount=$_REQUEST['payAmount'];

?>
<!DOCTYPE html>
<html>
<head>
<title>How to Integrate Razorpay payment gateway in PHP | tutorialswebsite.com</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-repeat: no-repeat;">
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Charge Rs.<?php echo $payAmount; ?> INR  </h4>
                    </div>
					 <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" readonly="" id="id" placeholder="Enter id" required="" autofocus="">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Name</label>
                           
						    <input type="text" class="form-control" name="billing_name" value="<?php echo $name; ?>" readonly="" id="billing_name" placeholder="Enter name" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="billing_email" value="<?php echo $emailid; ?>" readonly="" id="billing_email" placeholder="Enter email" required="">
                        </div>
                        
                  <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" class="form-control" name="billing_mobile" value="<?php echo $contact_no; ?>" readonly="" id="billing_mobile" min-length="10" max-length="10" placeholder="Enter Mobile Number" required="" autofocus="">
                        </div>
                        
                         <div class="form-group">
                            <label>Payment Amount</label>
                            <input type="text" class="form-control" readonly="" name="payAmount" id="payAmount" value="<?php echo $payAmount; ?>" placeholder="Enter Amount" required="" autofocus="">
                        </div>
						
	<!-- submit button -->
	<button  id="PayNow" class="btn btn-success btn-lg btn-block" >Submit & Pay</button>
                       
                    </div>
                </div>
            </div>
</div>
</div>
</body>
</html>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    //Pay Amount
    jQuery(document).ready(function($){

jQuery('#PayNow').click(function(e){

	var paymentOption='';
let id = $('#id').val();
let billing_name = $('#billing_name').val();
	let billing_mobile = $('#billing_mobile').val();
	let billing_email = $('#billing_email').val();
  var shipping_name = $('#billing_name').val();
	var shipping_mobile = $('#billing_mobile').val();
	var shipping_email = $('#billing_email').val();
var paymentOption= "netbanking";
var payAmount = $('#payAmount').val();
			
var request_url="submitpayment.php";
		var formData = {
			id:id,
			billing_name:billing_name,
			billing_mobile:billing_mobile,
			billing_email:billing_email,
			shipping_name:shipping_name,
			shipping_mobile:shipping_mobile,
			shipping_email:shipping_email,
			paymentOption:paymentOption,
			payAmount:payAmount,
			action:'payOrder'
		}
		
		$.ajax({
			type: 'POST',
			url:request_url,
			data:formData,
			dataType: 'json',
			encode:true,
		}).done(function(data){
		
		if(data.res=='success'){
				var orderID=data.order_number;
				var orderNumber=data.order_number;
				var options = {
    "key": data.razorpay_key, // Enter the Key ID generated from the Dashboard
    "amount": data.userData.amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Tutorialswebsite", //your business name
    "description": data.userData.description,
    "image": "https://www.tutorialswebsite.com/wp-content/uploads/2022/02/cropped-logo-tw.png",
    "order_id": data.userData.rpay_order_id, //This is a sample Order ID. Pass 
    "handler": function (response){

    window.location.replace("payment-success.php?oid="+orderID+"&amount="+data.userData.amount+"&id="+data.userData.id+"&rp_payment_id="+response.razorpay_payment_id+"&rp_signature="+response.razorpay_signature);

    },
    "modal": {
    "ondismiss": function(){
         window.location.replace("payment-success.php?oid="+orderID);
     }
},
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": data.userData.name, //your customer's name
        "email": data.userData.email,
        "contact": data.userData.mobile //Provide the customer's phone number for better conversion rates 
		
    },
    "notes": {
        "address": "Tutorialswebsite"
    },
    "config": {
    "display": {
      "blocks": {
        "banks": {
          "name": 'Pay using '+paymentOption,
          "instruments": [
           
            {
                "method": paymentOption
            },
            ],
        },
      },
      "sequence": ['block.banks'],
      "preferences": {
        "show_default_blocks": true,
      },
    },
  },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){

    window.location.replace("payment-failed.php?oid="+orderID+"&reason="+response.error.description+"&paymentid="+response.error.metadata.payment_id);

         });
      rzp1.open();
     e.preventDefault(); 
}
 
});
 });
    });
</script>
