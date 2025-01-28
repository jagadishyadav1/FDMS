<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Glassmorphism Login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>
                <form name="form1" method="post" action="logcheck.php">
                   <p>USER_NAME:
            <input name="username" type="text" id="username" placeholder="Enter username">
        </p>
        <p>PASSWORD:
            <input name="password" type="text" id="password" placeholder="Enter password">
        </p>
                    <button class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="Vendors_Details.php" class="signup-link">Register</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
