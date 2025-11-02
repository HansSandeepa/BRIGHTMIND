<?php

mysqli_select_db($conn, 'brightmindDb');

// CREATE TABLE 
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

// INSERT DATA - Make sure variables are properly quoted
$sql = "INSERT INTO student (stuname, email, password) 
        VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully<br />";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br />";
}

// Close connection
if(isset($conn)) {
    mysqli_close($conn);
}
?>