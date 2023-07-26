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
$createTableQuery = "CREATE TABLE IF NOT EXISTS potencial (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    province VARCHAR(255) NOT NULL,
    service VARCHAR(255) NOT NULL,
    birthdayr0 VARCHAR(255) NOT NULL,
    placebirthr0 VARCHAR(255) NOT NULL,
    marriagedayr0 VARCHAR(255) NOT NULL,
    placemarriager0 VARCHAR(255) NOT NULL,
    deathdayr0 VARCHAR(255) NOT NULL,
    placedeathr0 VARCHAR(255) NOT NULL,
    moreinfo VARCHAR(255) NOT NULL
)";
mysqli_query($connection, $createTableQuery);

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $province = $_POST['province'];
    $service = $_POST['service'];
    $birthdayr0 = $_POST['birthdayr0'];
    $placebirthr0 = $_POST['placebirthr0'];
    $marriagedayr0 = $_POST['marriagedayr0'];
    $placemarriager0 = $_POST['placemarriager0'];
    $deathdayr0 = $_POST['deathdayr0'];
    $placedeathr0 = $_POST['placedeathr0'];
    $moreinfo = $_POST['moreinfo'];

    // Insert the user data into the database
    $insertQuery = "INSERT INTO potencial (nombre y apellido, email, provincia, servicio, fecha nacim r0, lugar nacim r0, fecha matrim r0, lugar matrim r0, fecha defun r0, lugar defun r0, info) VALUES ('$fullname', '$email', '$province', '$service', '$birthdayr0', '$placebirthr0', '$marriagedayr0', '$placemarriager0', '$birthdeathr0', '$placedeathr0', '$moreinfo')";
    mysqli_query($connection, $insertQuery);
}
?>
