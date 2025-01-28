<?php
session_start();

include('dbconnect/dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$User_name=$_POST['User_name'];
$User_address=$_POST['User_address'];
$mail_id=$_POST['email'];
$contact_no=$_POST['contact_no'];
$password=$_POST['password'];

    // Generate a random OTP
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp; // Store OTP in session
    $_SESSION['mail_id'] = $mail_id; // Store email for later use

    // Send the OTP via email
    //$subject = "Your OTP Code";
    $message = "Your OTP code is: $otp";
//    mail($mail_id, $subject, $message);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vtechprojectmail@gmail.com';                 // SMTP username
$mail->Password = 'ttnftyfthdlaoohy';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('vtechprojectmail@gmail.com', 'Mailer');
 $mail->addAddress($mail_id, 'Your OTP Code');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your OTP Code';
$mail->Body    = '<div style="background-color:#FFFF99; font-size:26px;" align="center">Your OTP Code : '.$otp.'<br></b></div>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


    // Redirect to OTP verification page
   // header("Location: verify_otp.php");
   ?>
   <!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
</head>
<body>
    <form method="post" action="verify_otp.php">
        <label for="otp">Enter the OTP sent to your email:</label>

        <input type="text" name="otp" required>
        <input type="hidden" name="User_name" value="<?php echo $User_name; ?>">
        <input type="hidden" name="User_address" value="<?php echo $User_address; ?>">
        <input type="hidden" name="email" value="<?php echo $mail_id; ?>">
        <input type="hidden" name="contact_no" value="<?php echo $contact_no; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
        <input type="submit" value="Verify OTP">
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>

   <?php
    exit();
}
?>
