<?php
$host = '';
$username = 'admin';
$password = 'aarsh123';
$database = 'cca';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
