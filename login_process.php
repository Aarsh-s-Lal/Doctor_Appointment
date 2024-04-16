<!-- register.php -->
<?
include 'connection.php';

if(isset($_POST['signUp'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $profession = $_POST('profession'); // You should consider using a more secure hashing algorithm

    try {
        // Prepare SQL statement to insert data without specifying the 'id' column
        $stmt = $conn->prepare("INSERT INTO users (email, password, name, professsion) VALUES (:email, :password, :name, :profession)");
        // Bind parameters
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':profession', $profession);
        // Execute the query
        $stmt->execute();
        
        header("location: /services.html"); // Redirect to services.html after successful signup
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
