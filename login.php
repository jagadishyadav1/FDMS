<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Login Form</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #ffffff;
        }

        form {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            margin: 10px 0;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .signup-link {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
            margin-top: 10px;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form name="form1" method="post" action="logcheck.php">
        <p>Login</p>
        <p>USER_NAME:
            <input name="username" type="text" id="username" placeholder="Enter username">
        </p>
        <p>PASSWORD:
            <input name="password" type="text" id="password" placeholder="Enter password">
        </p>
        <p>
            <input type="submit" name="Submit" value="Submit">
        </p>
		<a href="Vendors_Details.php" class="signup-link">Sign Up</a>
    </form>
    
</body>
</html>

