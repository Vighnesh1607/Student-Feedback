<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="admin.css">
</head>
<body>

<h2>Login Form</h2>

<form action="admin.php" method="post">
    <label for="login_email">Email:</label><br>
    <input type="email" id="login_email" name="login_email" required><br><br>

    <label for="login_password">Password:</label><br>
    <input type="password" id="login_password" name="login_password" required><br><br>

    <a href="dispdata.php">
    <input type="submit" value="login" name="login"><br><br></a>

</form>

<?php
include 'Connection.php';

if(isset($_POST['login']))
{
    // Prepare the SQL statement using prepared statements
    $query = "SELECT * FROM admin WHERE login_email=? AND login_password=?";
    $stmt = mysqli_prepare($conn, $query);

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "ss", $_POST['login_email'], $_POST['login_password']);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if there is a matching row
    if(mysqli_num_rows($result) == 1)
    {
        echo "<script>alert('Successfully Login');</script>";
        session_start();
        $_SESSION['login_username'] = $_POST['login_email'];
        header("location: dispdata.php");
    }
    else
    {
        echo "<script>alert('Please enter valid data');</script>";
    }
}
?>

</body>
</html>
