<?php
// Start session

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Sanitize inputs to prevent SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Hash the password
$password = $password;

// Query to check if username and password exist in database
$sql = "SELECT * FROM users_table WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
 $result->num_rows;
// If result has rows, login is successful
if ($result->num_rows > 0) {
    // Set session variables
    // Redirect to home page or wherever you want after successful login
    header("Location: fupload.php");
} else {
    echo "Invalid username or password";
}

$conn->close();
?>
