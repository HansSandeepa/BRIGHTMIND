<?php

include_once './dbConn.php';

mysqli_select_db($conn, 'brightmindDb');

//create admin table
$sql = "CREATE TABLE admin(
        UserId INT AUTO_INCREMENT PRIMARY KEY,
        Admin VARCHAR(20),
        Password VARCHAR(100))";

if(!mysqli_query($conn, $sql)) {
    echo "Error creatin admin table". mysqli_error($conn);
}

//insert data to table
$username = "hirusha";
$password = md5("123");

$escapedusername = mysqli_real_escape_string($conn, $username);
$escapedupassword = mysqli_real_escape_string($conn, $password);

$countResult = mysqli_query($conn, "SELECT COUNT(*) AS count FROM admin");
if ($countResult) {
    $countRow = mysqli_fetch_assoc($countResult);
    if ((int)$countRow['count'] === 0) {
        $check = mysqli_query($conn, "SELECT * FROM admin WHERE Admin = '$escapedusername'" );
        if($check && $check->num_rows == 0) {
            $sql = ("INSERT INTO admin(Admin, Password)VALUES('$escapedusername', '$escapedupassword')");
            if(!mysqli_query($conn, $sql)) {
                echo "Error inserting data". mysqli_error($conn);
            }
        } else {
            echo "Admin is already exists";
        }
    }
} else {
    echo "Error checking table count: " . mysqli_error($conn);
}
?>