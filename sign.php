<?php
include_once("./dbconn.php");
session_start();

// Move table creation here
$table = "CREATE TABLE IF NOT EXISTS user(
    s_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name char(20),
    upassword varchar(20),
    email char(40) default 'unknown',
    gr_project DECIMAL(3,1),
    qu_marks DECIMAL(3,1),
    in_assignment DECIMAL(3,1),
    city char(20) default 'unknown',
    UNIQUE(email,user_name)
)";

if (!mysqli_query($conn, $table)) {
    die('could not create table' . mysqli_error($conn));
}

$error_message = '';
$success = false;

if (isset($_POST['submite'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password == $confirm_password) {
        $sql = "INSERT IGNORE INTO user(user_name,upassword,email) values
               ('$username','$password','$email')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['username'] = $username; // Set session
            header("Location: Dashboard.php"); // Redirect to dashboard
            exit();
        } else {
            $error_message = 'Could not create account. Please try again.';
        }
    } else {
        $error_message = 'Passwords do not match!';
    }
}

$users = [
    ['dinith', 'dinith1234', 'dinth45@gmail.com', 5.8, 9.8, 3.4, 'Hambanthota'],
    ['hansana', 'hansana1234', 'hansana30@gmail.com', 5.6, 4.8, 2.4, 'Mathugama'],
    ['hirusha', 'hirusha1234', 'hirusha20@gmail.com', 3.8, 5.8, 7.4, 'Kurunegala'],
    ['anjana', 'anjana1234', 'anjana23@gmail.com', 5.8, 9.8, 3.4, 'Ambalanthota'],
];

foreach ($users as $user) {
    $sql = "INSERT IGNORE INTO user(user_name,upassword,email,gr_project, qu_marks, in_assignment,city) 
            VALUES ('$user[0]', '$user[1]','$user[2]', $user[3],$user[4],$user[5],'$user[6]')";
    mysqli_query($conn, $sql);
}
?>

<?php include_once("headerFooter/header.php"); ?>

<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/sign.css';
        document.head.appendChild(css);

        const css1 = document.createElement('link');
        cs1s.rel = 'stylesheet';
        css1.href = './css/error-masg.css';
        document.head.appendChild(css1);
    });
</script>

<section>
    <div id="signImg">
        <img src="./assets/lahiru/sign.jpg" alt="sign img">
    </div>
    <div id="signForm">
        <form class="form" id="signupForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="sigin">
                <h1>SIGN PAGE</h1><br />

                <?php if ($error_message): ?>
                    <div class="error-mg" style="color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px; padding: 10px; margin-bottom: 15px;">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>

                <label for="username">User Name:</label><br />
                <input type="text" name="username" id="username" required><br /><br />

                <label for="email">Email:</label><br />
                <input type="email" name="email" id="email" required><br /><br />

                <label for="password">Password:</label><br />
                <input type="password" name="password" id="password" required><br /><br />

                <label for="confirm-password">Confirm password:</label><br />
                <input type="password" name="confirm-password" id="confirm-password" required><br /><br /><br />

                <label class="checkbox">
                    <input class="checkbox" type="checkbox" name="checkbox" id="checkbox" required>
                    I agree to the <b>TERMS AND CONDITIONS</b>
                </label>

                <br /><br />
                <button type="submit" name="submite"><label class="submit">SUBMIT</label></button>
            </div>
            <p id="demo"></p>
        </form>
    </div>
</section>

<?php include_once('headerFooter/footer.php'); ?>