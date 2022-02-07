<?php

$servername = "localhost";
$username = "root";
$password = "";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $conn = new PDO("mysql:host=$servername;dbname=nftdropcalender.info.mysql", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Please contact the makers of this website with is error: " . $e->getMessage();
}
