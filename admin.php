<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Mind - Instructors</title>
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/Instructor-page.css">
</head>

<body>
    <!-- side navigation bar -->
    <div class="sidebar">
        <div class="sidebarHeader">
            <div class="logo" id="sideLogo">
                <img src="./assets/lightbulb 1.png" alt="Logo" id="sideLogoImg" class="logoImg">
                <p class="logoText" id="sidebarLogoText">Bright Mind</p>
            </div>
            <button id="closeBtn" class="closeBtn">
                <img src="./assets/close.svg" alt="closebtn">
            </button>
        </div>

        <div class="sidebarContent">
            <div class="topContent">
                <ul class="sideBarLists">
                    <li class="sideBarList">
                        <a href="./index.html" class="nav-link">Home</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./courses.html" class="nav-link">Courses</a>
                    </li>
                    <li class="sideBarList" id="selectedNavItem">
                        <a href="./instructor-page.php" class="nav-link">Instructors</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./about.html" class="nav-link">About Us</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./contactUs.html" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="bottomContent">
                <ul class="sideBarLists">
                    <li class="sideBarList">
                        <a href="./login.html" class="nav-link">Log In</a>
                    </li>
                    <li class="sideBarList">
                        <a href="./sign.html" class="nav-link">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            &copy; <span class="year"></span> Bright Mind.
        </div>
    </div>

    <!-- overlay -->
    <section id="overlay"></section>

    <!-- HEADER -->
    <header>
        <button id="navbarBtn">
            <img src="./assets/navbar button.png" alt="navbtn">
        </button>
        <div class="logo" id="topLogo">
            <img src="./assets/lightbulb 1.png" alt="Logo" class="logoImg">
            <p class="logoText">Bright Mind</p>
        </div>
        <div id="loginBtnSection">
            <a href="./login.html">Log In</a>
            <a href="./sign.html">Sign In</a>
            <!-- add Admin button near other nav/login buttons -->
            <a href="admin.html" class="nav-btn admin-btn" id="adminBtn">Admin Panel</a>
        </div>
    </header>
    <div id="headerWrapper"></div>

    <!-- add content here -->

     <!-- FOOTER -->
    <footer>
        <div id="footerWrapper">
            <div id="footerNavigation">
                <h2 class="footerTitles">Navigation</h2>
                <div class="footerNavigationLinks" id="startLinks">
                    <a href="./index.html">Home</a>
                    <a href="./courses.html">Courses</a>
                    <a href="./instructor-page.php">Instructors</a>
                </div>
                <div class="footerNavigationLinks" id="endLinks">
                    <a href="./Dashboard.html">Student Profile</a>
                    <a href="./about.html">About Us</a>
                    <a href="./contactUs.html">Contact Us</a>
                </div>
            </div>

            <div class="logo" id="bottomLogo">
                <img src="./assets/lightbulb 1.png" alt="Logo" class="logoImg">
                <p class="logoText">Bright Mind</p>
            </div>

            <div id="socialMediaLinksSegment">
                <h2 class="footerTitles">Follow Us</h2>
                <div id="socialMediaLinks">
                    <a href="https://www.facebook.com/"><img src="./assets/facebook.svg" alt="Facebook"></a>
                    <a href="https://www.linkedin.com/"><img src="./assets/linkedin.svg" alt="LinkedIn"></a>
                    <a href="https://github.com/HansSandeepa/BRIGHTMIND"><img src="./assets/github.svg" alt="Github"></a>
                    <a href="https://www.instagram.com/"><img src="./assets/instagram.svg" alt="Instagram"></a>
                </div>
            </div>
        </div>

        <div class="copyright">
            &copy; <span class="year"></span> Bright Mind.
        </div>
    </footer>

    <script src="./js/navbar.js"></script>
    <script src="./js/getYear.js"></script>
</body>

</html>