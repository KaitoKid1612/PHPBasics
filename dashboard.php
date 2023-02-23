<?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo '<h1>Login Success</h1><br>';
        echo '<a href="./session.php>Logout</a><br>';
    } else {
        echo '<a href="./session.php">Back to Login</a><br>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to my website</h1>
</body>
</html>