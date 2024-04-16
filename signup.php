<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['mail'];
    $password = $_POST['pass'];
    $name = $_POST['name'];
    $profession = $_POST['profession'];

    // Database connection settings
    $servername = "mydb.c94wcsksm5ln.eu-north-1.rds.amazonaws.com";
    $username = "admin"; // Replace with your database username
    $db_password = "aarsh123"; // Replace with your database password
    $dbname = "cca"; // Replace with your database name

    try {
        // Create database connection
        $conn = new PDO("mydb.c94wcsksm5ln.eu-north-1.rds.amazonaws.com", $username, $db_password);
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

