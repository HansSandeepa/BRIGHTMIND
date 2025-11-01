<?php
session_start();

echo '<pre>';
print_r($_SESSION);
echo '<pre>';

 // Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo htmlspecialchars($username); ?></title>
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="css/Dashbord.css">
</head>

<body>
    <!-- side navgation bar -->
    <div class="sidebar">
        <!-- side bar logo and close button -->
        <div class="sidebarHeader">
            <div class="logo" id="sideLogo">
                <img src="./assets/lightbulb 1.png" alt="Logo" id="sideLogoImg" class="logoImg">
                <p class="logoText" id="sidebarLogoText">Bright Mind</p>
            </div>

            <button id="closeBtn" class="closeBtn">
                <img src="./assets/close.svg" alt="closebtn">
            </button>
        </div>

        <!-- sidebar content -->
        <div class="sidebarContent">
            <div class="topContent">
                <ul class="sideBarLists">
                    <li class="sideBarList">
                        <a href="./index.html" class="nav-link">Home</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./courses.html" class="nav-link">Courses</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./Instructor page.html" class="nav-link">Instructors</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./about.html" class="nav-link">About Us</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./contactUs.html" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
            
            <!-- User Profile Section -->
            <div class="userProfile">
                <h3>Welcome, <?php echo htmlspecialchars($username); ?></h3>
                <p class="userEmail"><?php echo htmlspecialchars($email); ?></p>
                <a href="logout.php" class="logoutBtn">Logout</a>
            </div>
        </div>

        <div class="copyright">
            &copy; <span class="year"></span> Bright Mind.
        </div>
    </div>

    <!-- Rest of your dashboard content -->
    <!-- You can add more dynamic content using PHP wherever needed -->

    <!-- import javascript files here -->
    <script src="./js/navbar.js"></script>
    <script src="./js/getYear.js"></script>
</body>
</html>