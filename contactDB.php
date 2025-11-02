<?php
require_once './dbConn.php';

//Create feedback table
$sql = "CREATE TABLE contactdetails(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100),
        tnumber VARCHAR(20),
        subline VARCHAR(100),
        message TEXT)";

if(!$conn->query($sql)) {
    echo "Error creating table".$conn->error."</br>";
}

?>