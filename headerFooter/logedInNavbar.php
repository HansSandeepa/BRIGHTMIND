<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Mind</title>
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

                    <li class="sideBarList" id="selectedNavItem">
                        <a href="./index.php" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./courses.php" class="nav-link">
                            Courses
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./instructor-page.php" class="nav-link">
                            Instructors
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./about.php" class="nav-link">
                            About Us
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./contactUs.php" class="nav-link">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </div>
            <div class="bottomContent">
                <ul class="sideBarLists">

                    <li class="sideBarList">
                        <a href="./login.php" class="nav-link">
                            Student Profile
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./sign.php" class="nav-link">
                            Log Out
                        </a>
                    </li>

                </ul>

            </div>

        </div>

        <div class="copyright">
            &copy; <span class="year"></span> Bright Mind.
        </div>

    </div>

    <!-- overlay that emerges with the navbar -->
    <section id="overlay">
        <!-- do not delete this -->
    </section>


    <!-- HEADER SECTION -->
    <header>
        <button id="navbarBtn">
            <img src="./assets/navbar button.png" alt="navbtn">
        </button>

        <div class="logo" id="topLogo">
            <img src="./assets/lightbulb 1.png" alt="Logo" class="logoImg">
            <p class="logoText">Bright Mind</p>
        </div>

        <!-- student profile section -->
        <div id="dropdown">
            <button id="profile" title="Student Profile">
                <img src="./assets/profile.svg" alt="profile icon" id="profileIcon">
            </button>

            <!-- profile dropdown -->
            <div id="dropdown-content">
                <a href="./Dashboard.php">Student Profile</a>
                <a href="#" id="LogOut">Log Out</a>
            </div>
        </div>


    </header>
    <div id="headerWrapper">
        <!-- do not delete this element -->
    </div>    