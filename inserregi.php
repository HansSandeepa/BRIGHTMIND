<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!(empty($username) && empty($email) && empty($password))) {
    echo "All fields are required!";
    exit;
}

$con = mysqli_connect('localhost', 'root', '', 'brightmindDb', 3307);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}               

$INSERT = "INSERT INTO student (stuname, email, password)
VALUES ($username, $email, $password)";    


if ($con->query($INSERT) === TRUE){
    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
}
$con->close();

?>
