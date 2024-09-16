<?php
// Start session
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

// Display username
echo "Welcome, ".$_SESSION['username']."!";
?>
