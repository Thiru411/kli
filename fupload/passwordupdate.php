<?php
// Function to generate a random password
function generateRandomPassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $charCount = strlen($chars);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charCount - 1);
        $password .= $chars[$randomIndex];
    }
    return $password;
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select a random user ID from the users table
$sql_select_user_id = "SELECT username FROM users_table ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql_select_user_id);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row['username'];

    // Generate a random password
    $new_password = generateRandomPassword();

    // Write the generated password into a file
    $password_file = fopen('password.txt', 'w') or die('Unable to create file');
    fwrite($password_file, $new_password);
    fclose($password_file);

    // Create a zip archive
    $zip = new ZipArchive();
    $zip_file = 'password.zip';
    if ($zip->open($zip_file, ZipArchive::CREATE) === TRUE) {
        // Add the password file to the zip archive
        $zip->addFile('password.txt');
        $zip->close();

        // Update the user's password in the database
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql = "UPDATE users_table SET password = '$hashed_password' WHERE username = $user_id";

        if ($conn->query($sql) === TRUE) {
            echo "Password updated successfully for user ID: $user_id. New password is in the zip file.";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Failed to create zip file.";
    }

    // Clean up: remove the password file
    unlink('password.txt');
} else {
    echo "No users found in the database.";
}

$conn->close();
?>
