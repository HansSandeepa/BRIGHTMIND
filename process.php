<?php
require_once './dbConn.php';
session_start();


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate input
    if(empty($username) && empty($email) && empty($password)) {
        echo "All fields are required!";
        exit;
    }
    
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert into database
    $insert = "INSERT INTO student (stuname, email, password) 
               VALUES ('$username', '$email', '$hashed_password')";
    
    if($conn->query($insert) === TRUE){
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        
        // Redirect to index page
        header("Location: Dashboard.php");
        exit;
    } else {
        echo "Error: " . $conn->error; 
    }
}

// Login functionality
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(empty($email) || empty($password)) {
        echo "Email and password are required!";
        exit;
    }
    
    $sql = "SELECT * FROM student WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        
        // Verify password
        if(password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['username'] = $row['stuname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['user_id'] = $row['stuid'];
            
            header("Location: ./Dashboard.php");
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}
?>