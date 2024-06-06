<?php
session_start();

// Check if the session username is set
if(isset($_SESSION["username"])){
    // Store the username to display after logout
    $username = $_SESSION["username"];
    // Destroy the session
    session_destroy();
    // Display logout success message
    echo $username . " logged out successfully.";
} else {
    // If the user is not logged in, redirect to the login page
    header("Location: Login.php");
    exit();
}
?>
