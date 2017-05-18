<?php
$servername = "localhost";
$username = "mor";
$password = "morh123";

try {
    $conn = new PDO("mysql:host=$servername; dbname=transdb; charset=utf8", $username, $password);
     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: ".$e -> getMessage();
}