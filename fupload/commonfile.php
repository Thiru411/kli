<?php
// Check if today is Monday or Thursday
$allowed_days = ['Monday', 'Tuesday'];
$current_day = date('l'); // Get the current day of the week

// If the current day is not in the allowed days array, redirect to an error page
if (!in_array($current_day, $allowed_days)) {
    header("Location: access_denied.php");
    exit(); // Stop further execution
}