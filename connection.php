<!-- connection.php -->
<?php

$host = ""; // RDS endpoint
$username = "admin"; // Replace with your database username
$password = "aarsh123"; // Replace with your database password
$dbname = "mydb"; // Replace with your database name

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
