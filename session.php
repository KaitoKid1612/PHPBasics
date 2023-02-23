<?php
    echo 'Sessions are disabled';
    echo '<br>';

    session_start();
    if(isset($_POST['submit'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        if ($email=='leviet1612@gmail.com' && $password=='1234') {
            $_SESSION['email'] = $email;
            header('Location: dashboard.php');
        } else {
            echo 'email and password are invalid';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div>
            <label for="email">Your email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Your password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
