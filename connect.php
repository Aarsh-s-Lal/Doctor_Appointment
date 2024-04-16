<?php
$host = 'mydb.c94wcsksm5ln.eu-north-1.rds.amazonaws.com';
$username = 'admin';
$password = 'aarsh123';
$database = 'mydb';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
