<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="studentlogin.css">
</head>
<body>

<h2>Login Form</h2>

<form action="login.php" method="post">
    <label for="login_email">Email:</label><br>
    <input type="email" id="login_email" name="login_email" required><br><br>

    <label for="login_password">Password:</label><br>
    <input type="password" id="login_password" name="login_password" required><br><br>

    <input type="submit" value="Login"><br><br>
     
    If not Registered <a href="studentsignup.php">Click here</a> to Register
</form>

</body>
</html>
