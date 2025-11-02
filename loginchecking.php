<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo "All fields are required!";
            exit;
        }

        $con = mysqli_connect('localhost', 'root', '', 'brightmindDb', 3307);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //  Use password_ verification
        $SELECT = "SELECT * FROM student WHERE stuname = '$username'";
        $result = mysqli_query($con, $SELECT);

        if ($result) {
            $Rows = mysqli_num_rows($result);

            if ($Rows > 0) {
                $row = mysqli_fetch_assoc($result);
                
                // Verify password 
                if (password_verify($password, $row['password'])) {
                    // Login successful
                    $_SESSION['user_id'] = $row['stuid']; 
                    $_SESSION['username'] = $row['stuname'];
                    $_SESSION['loggedin'] = true;
                    
                    // Redirect to Dashboard
                    header("Location: Dashboard.php");
                    exit();
        
                } else {
                    echo "Invalid password!";
                }
            } else {
                echo "No users found!<br>";
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }
        
        mysqli_close($con);
    } else {
        echo "Username and password fields are required!";
    }
} else {
    echo "Please submit the login form.";
}
?>