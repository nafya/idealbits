<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Step 1: Connect to MySQL database
$mysqli = new mysqli("localhost", "root", "Nafiya@2002", "database");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form is submitted
if(isset($_POST['login'])) {
    // Get user input
    $username = $_POST['User_id'];
    $password = $_POST['Password'];

    // Step 2: Query the database to check if the user exists
    
    $sql = "SELECT * FROM user WHERE User_id = '$username' AND Password = '$password'";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // User exists, grant access
        // Start a session and store user data if needed
        session_start();
        $_SESSION['User_id'] = $username;
        // Redirect to the buysell.html page
        header("Location:savexp.php");
        exit();
    } else {
        // User does not exist or invalid credentials
        echo "Invalid credentials. Please try again.";
    }
}

// Close database connection
$mysqli->close();
?>
