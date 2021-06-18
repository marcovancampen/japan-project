<?php
$dsn = "mysql:host=localhost;dbname=japan";
$username = "root";
$password = "";
$connect = new PDO($dsn, $username, $password);
try {

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    die('sorry database probleem');
}
?>