<?php
$server = 'localhost';
$username = 'root';
$password = '1234';  
$database = 'brightmindDb';
$port = 3307;
$conn = mysqli_connect($server,$username,$password,$database,$port);

if(!$conn){
    die('Connection failed:' . mysqli_connect_error());
} else {
    echo 'Connected successfully<br />';
}

// Create database if it doesn't exist
$createDb = "CREATE DATABASE IF NOT EXISTS brightmindDb";

// Use a different connection without specifying database for creating DB
$conn_temp = mysqli_connect($server, $username, $password, '', $port);
if (mysqli_query($conn_temp, $createDb)) {
    echo "Database created or already exists<br />";
    
    // Now select the database for the main connection
    mysqli_select_db($conn, $database);
    
    // Include other files after database is confirmed to exist
    include_once './mysql/Instructor.php';    //create lecture table (apurwa)
    
} else {
    echo "Error occurred while creating database: " . mysqli_error($conn_temp);
}

// Verify database selection
$retval = mysqli_select_db($conn, 'brightmindDb');
if(! $retval) {
    die('Could not select database: ' . mysqli_error($conn));
}
echo "Database brightmindDb selected successfully<br />";

// CREATE TABLE - Fixed syntax errors
$table = "CREATE TABLE IF NOT EXISTS Student (
    stuid int Auto_increment PRIMARY KEY,
    stuname VARCHAR(100) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($table) === TRUE) {
    echo "Table Student created successfully<br />";
} else {
    echo "Error creating table: " . $conn->error . "<br />";
}

// Close temporary connection
if(isset($conn_temp)) {
    mysqli_close($conn_temp);
}
?>