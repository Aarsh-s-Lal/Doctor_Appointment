<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cca";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['mail']; // Corrected to 'mail'
        $password = $_POST['pass']; // Corrected to 'pass'
        $name = $_POST['name'];
        $profession = $_POST['profession'];

        $sql = "INSERT INTO users (email, password, name, profession) VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("ssss", $email, $password, $name, $profession); 

        if ($stmt->execute()) {
            header("Location: home.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
    }
    $conn->close();
}
?>
