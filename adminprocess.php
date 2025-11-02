<?php
session_start();
include_once './dbConn.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["pwd"];

    if (empty($username)) {
        $_SESSION['error'] = "Please enter a valid username";
        header("Location: adminlogin.php");
        exit();
    } elseif (empty($password)) {
        $_SESSION['error'] = "Please enter your password";
        header("Location: adminlogin.php");
        exit();
    } else {
        $stmt = $conn->prepare("SELECT * FROM admin WHERE Admin = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        $user = $result->fetch_assoc();

        if ($result->num_rows === 0 || !$user) {
            $_SESSION['error'] = "Username not found";
            header("Location: adminlogin.php");
            exit();
        } else {
            if ($user['Password'] !== md5($password)) {
                $_SESSION['error'] = "Password is incorrect";
                header("Location: adminlogin.php");
                exit();
            } else {
                header("Location: admininterface.php");
                exit();
            }
        }
    }

}
?>