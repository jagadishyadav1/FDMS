<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Forgot Password Form, Responsive web template, Bootstrap Web Templates, Flat Web Templates" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login/css/font-awesome.min.css" type="text/css" media="all">
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
            background-color: #eef2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            transition: transform 0.2s;
        }

        .form-container:hover {
            transform: scale(1.02);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        .text {
            width: calc(100% - 24px); /* Adjust to match button width */
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .text:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-submit {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .form-submit:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Forgot Password</h2>
        <form action="forgo_nextt.php" method="post">
            <input type="text" class="text" name="email_id" placeholder="Email Id" required="" autofocus>
            <input type="submit" name="signin" id="signin" class="form-submit" value="Submit" />
        </form>
        <div class="footer">
            <p>Remembered your password? <a href="login.php">Login here</a></p>
        </div>
    </div>

</body>
</html>
