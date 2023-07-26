<?php
// Database connection configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'contact';

// Create a connection to the database
$connection = mysqli_connect($host, $username, $password);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database if it doesn't exist
$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS $database";
mysqli_query($connection, $createDatabaseQuery);
mysqli_select_db($connection, $database);

// Create the users table if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    user VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    user_type VARCHAR(255) NOT NULL
)";
mysqli_query($connection, $createTableQuery);

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $userType = $_POST['user_type'];

    // Insert the user data into the database
    $insertQuery = "INSERT INTO users (name, lastname, email, user, password, user_type) VALUES ('$name', '$lastname', '$email', '$user', '$password', '$userType')";
    mysqli_query($connection, $insertQuery);
}
?>
