<?php
require_once './dbConn.php';

if(isset($_POST['sub'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tphone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $stmt = $conn->prepare('INSERT INTO contactdetails(name, email, tnumber, subline, message)VALUES(?, ?, ?, ?, ?)');
    $stmt->bind_param("sssss", $name, $email, $tphone, $subject, $message);
    $stmt->execute();

    header("Location: index.php");
    exit();
}





?>