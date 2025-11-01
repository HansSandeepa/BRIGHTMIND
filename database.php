<?php
$server = 'localhost';
$username = 'root';
$password = '';  
$port = 3307;   

// First connect without database
$conn = mysqli_connect($server, $username, $password, '', $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if not exists
$createDb = "CREATE DATABASE IF NOT EXISTS brightmindDb";

if (mysqli_query($conn, $createDb)) {
    mysqli_close($conn);
    
    // This part is database selected
    $conn = mysqli_connect($server, $username, $password, 'brightmindDb', $port);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
} else {
    echo "Error occurred while creating database: " . mysqli_error($conn);
}

// student table
$createTable = "CREATE TABLE IF NOT EXISTS student (
    stuid INT AUTO_INCREMENT PRIMARY KEY,
    stuname VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(6) NOT NULL
)";

if (mysqli_query($conn, $createTable)) {
    header("Location: login.html");
    exit();
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

