<?php
    //PDO - PHP Database Object
    define('DATABASE_SERVER', 'localhost');
    define('DATABASE_USERNAME', 'root');
    define('DATABASE_PASSWORD', '');
    define('DATABASE_NAME', 'phpbasic');

    $conn = null;
    try {
        $conn = new PDO("mysql:host=".DATABASE_SERVER.";dbname=".DATABASE_NAME, DATABASE_USERNAME, DATABASE_PASSWORD);
         // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        echo "Connected successfully";
    } catch (PDOException $e ){
        echo "Connection failed: " . $e->getMessage();
        $conn = null;
    }
?>