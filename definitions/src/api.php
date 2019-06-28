<?php
$server = $_SERVER;

$servername = "mysql";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=domain", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $server['PDO_MYSQL'] = "Connected successfully";
} catch (PDOException $e) {
    $server['PDO_MYSQL'] = "Connection failed: " . $e->getMessage();
}

ksort($server);
echo json_encode($server);
