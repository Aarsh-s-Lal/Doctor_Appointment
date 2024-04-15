<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['mail'];
    $password = $_POST['pass'];
    $name = $_POST['name'];
    $profession = $_POST['profession'];

    // Database connection settings
    $servername = "172.31.30.143";
    $username = "admin"; // Replace with your database username
    $password = "aarsh123"; // Replace with your database password
    $dbname = "cca"; // Replace with your database name

    try {
        // Create database connection
        $conn = new PDO("database2.c94wcsksm5ln.eu-north-1.rds.amazonaws.com", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement to insert data
        $stmt = $conn->prepare("INSERT INTO users (email, password, name, profession) VALUES (:email, :password, :name, :profession)");

        // Bind parameters
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':profession', $profession);

        // Execute the query
        $stmt->execute();

        echo "New record created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>
