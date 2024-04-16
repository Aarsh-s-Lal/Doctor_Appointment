<?php
$host = 'mydb.c94wcsksm5ln.eu-north-1.rds.amazonaws.com';
$username = 'admin';
$password = 'aarsh123';
$database = 'mydb';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
