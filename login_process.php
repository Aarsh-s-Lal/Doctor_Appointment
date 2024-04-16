<?php
include 'connection.php';

if (isset($_POST['login'])) {
    $mail = $_POST['mail'];
    $password = $_POST['pass'];
    $name = $_POST['name'];
    $profession = $_POST['profession'];

    $query = "SELECT * FROM users";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Redirect to index.html upon successful login
        header("Location: services.html");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>