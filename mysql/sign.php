<?php

mysqli_select_db($conn, 'brightmindDb');

// CREATE TABLE 
$table = "CREATE TABLE IF NOT EXISTS Student (
    stuid int Auto_increment PRIMARY KEY,
    stuname VARCHAR(100) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(6) NOT NULL
)";

if ($conn->query($table) === FALSE) {
    echo "Error creating table: " . $conn->error . "<br />";
}

//INSERT DATA
$count = "SELECT COUNT(*) AS total FROM Student";
$result = $conn->query($count);
$row = $result->fetch_assoc();
if ($row['total'] == 0) {
    $sql = "INSERT INTO Student (stuname,email,password) 
        VALUES 
        ('John Doe', 'jondoe23@gmail.com','12345'),
        ('Jane Smith', 'jonesmity00@gmail.com','789654'),
        ('Defny Tera', 'defnytera332gmail.com','112233');";


    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
    } 
}
?>

