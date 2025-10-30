<?php
$server = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$createDb = "CREATE DATABASE IF NOT EXISTS brightmindDb";

if (mysqli_query($conn, $createDb)) {
    header("Location: index.html");
} else {
    echo "Error occured while creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
exit();
