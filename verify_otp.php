<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_otp = $_POST['otp'];

    // Check if the entered OTP matches the one in the session
    if ($entered_otp == $_SESSION['otp']) {
        include('dbconnect/dbconnect.php');

        // Insert the user data into the database
        $User_name = $_POST['User_name'];
        $User_address = $_POST['User_address'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        $password = $_POST['password'];

       				$sql="insert into user_details values(null,'$User_name','$User_address','$email','$contact_no')";
					mysqli_query($conn,$sql);


					$sql1="insert into login values(null,'$email','$password','user')";
					mysqli_query($conn,$sql1);

        echo "<script>alert('Regestered Successfully.'); document.location='LR.php';</script>";
        exit();
    } else {
        $error = "Invalid OTP. Please try again.";
    }
}
?>

