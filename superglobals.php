<?php
    echo 'Superglobals in php';
    echo '<br>';
    // print_r($_SERVER);
    // print_r($_GET);
    
    // if(isset($_POST['name'])){
    //     echo $_POST['name'];
    // }
    // if(isset($_POST['password'])){
    //     echo $_POST['password'];
    // }
    // $name = $_GET['name'] ?? '';//coalascing
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
            <label for="name">Your name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="password">Your password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    // $name = htmlspecialchars($_POST['name']);
    // $password = htmlspecialchars($_POST['password']);
?> 