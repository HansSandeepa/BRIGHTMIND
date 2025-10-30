<?php
$dbhost = 'localhost';
$dbuser = 'root';  
$dbpass = '';
$port = 3307;

// Connect to mysql 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, '', $port);

if(!$conn){
    echo 'Can not connect: ' . mysqli_connect_error();
} else {
    echo 'successful connect';  
}

/*
// LMS Database Create
$sql = 'CREATE DATABASE LMS';
$create = mysqli_query($conn, $sql);  

if(!$create){  
    echo 'Cannot create database: ' . mysqli_error($conn);  
} else {
    echo 'Create successful database';  
}
*/

$retval = mysqli_select_db($conn, 'LMS');

if(!$retval){
    die('could not select database: ' . mysqli_error($conn)); // Fixed error here
} else {
    echo "Database LMS selected successfully ";
}
    
/*    
// Create student table 
$student = "CREATE TABLE IF NOT EXISTS student (
               stuid INT AUTO_INCREMENT PRIMARY KEY, 
               stuname VARCHAR(100),
               email VARCHAR(100),
               password CHAR(8)
               )";
    
if(mysqli_query($conn, $student)){
    echo " student table created successfully.";
} else {
    echo " Error creating table" . mysqli_error($conn);
}*/
  

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    
    // Check if passwords match
    if($password !== $confirm_password) {
        echo " Error: Passwords do not match!";
        echo "<br><a href='sign.html'>Go Back</a>";
        exit();
    }


// Data insert student table
$data = "INSERT INTO student 
         VALUES
        (1, 'W.P.Kamal Perera', 'kamalperera123@gmail.com', 'kamal123')"; // Fixed typo in INSERT
        
if($conn->query($data) === TRUE){
    echo " Successfully insert data";
} else {
    echo " Error data: " . $conn->error . "<br/>";
}
 
?>