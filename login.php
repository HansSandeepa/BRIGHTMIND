<?php
session_start();

$server = 'localhost';
$username = 'root';
$password = '';  
$port = 3307;   


$conn = mysqli_connect($server, $username, $password,'', $port);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username === '' || $password === '') {
        die('Error: Username and password are required. <a href="login.html">Go back</a>');
    }

    // Query to check user credentials
    $sql = "SELECT stuname, email, password FROM student WHERE stuname = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Store user data in session
            $_SESSION['username'] = $row['stuname'];
            $_SESSION['email'] = $row['email'];
            
            // Redirect to dashboard
            header('Location: Dashboard.php');
            exit();
        } else {
            echo 'Invalid password. <a href="login.html">Try again</a>';
        }
    } else {
        echo 'User not found. <a href="login.html">Try again</a>';
    }

    $stmt->close();
}

$conn->close();
?>