<?php
session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'lms';
$port = 3307;

// Connect to MySQL using mysqli (OO style)
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $port);
if ($conn->connect_error) {
    // Stop execution and show connection error
    die('Connection failed: ' . $conn->connect_error);
}

// Only handle form submission on POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and basic-validate input
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

    if ($username === '' || $email === '' || $password === '' || $confirm_password === '') {
        die('Error: All fields are required. <a href="sign.html">Go back</a>');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Error: Invalid email address. <a href="sign.html">Go back</a>');
    }

    if ($password !== $confirm_password) {
        die('Error: Passwords do not match. <a href="sign.html">Go back</a>');
    }

    if (strlen($password) < 6) {
        die('Error: Password must be at least 6 characters. <a href="sign.html">Go back</a>');
    }

    // Hash the password before storing
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO student (stuname, email, password) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        // Prepare failed and show error 
        die('Prepare failed: ' . $conn->error);
    }

    // Bind parameters and execute
    $stmt->bind_param('sss', $username, $email, $password_hashed);
    if ($stmt->execute()) {
          
    // Store user info in session
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    
    // Redirect to dashboard
    header('Location: Dashboard.php');
    exit();

    } else {
        // Execution failed
        echo 'Execute failed: ' . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
