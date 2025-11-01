
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
        </div>
    </header>
    <div id="headerWrapper"></div>

    <!-- Add Instructor Button -->
    <div class="add-instructor-section">
        <a href="add-instructor.php" class="add-instructor-btn">+ Add New Instructor</a>
    </div>

    <!-- CONTENT SECTION -->
    <div class="instructor-profiles-container">
        <?php
        require_once './dbConn.php';

        $query = "SELECT * FROM instructors";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo "error running select query: ". mysqli_connect_error();
            return;
        }

        if (mysqli_num_rows($result) > 0) {
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                // Split subjects by comma for better formatting
                $subjects = explode(',', $row['subjects']);
                $formatted_subjects = '';
                foreach ($subjects as $subject) {
                    $formatted_subjects .= trim($subject) . ' ,<br> ';
                }
                $formatted_subjects = rtrim($formatted_subjects, ' ,<br> ');
        ?>
                <div class="instructor-profile">
                    <div class="header">
                        <h2>Meet Instructor <?php echo $counter; ?></h2>
                    </div>
                    <div class="details">
                        <div class="image">
                            <img src="<?php echo htmlspecialchars($row['image_path']); ?>" 
                                 alt="<?php echo htmlspecialchars($row['name']); ?>"
                                 onerror="this.src='./assets/default-instructor.jpg'">
                        </div>
                        <div class="info">
                            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                            <p class="position"><?php echo htmlspecialchars($row['position']); ?></p>
                            <p class="subject">Teaching: <br><?php echo $formatted_subjects; ?></p>
                            <p class="contact">
                                <b>Email:</b><br>
                                <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>">
                                    <?php echo htmlspecialchars($row['email']); ?>
                                </a>
                            </p>
                            <p class="bio"><?php echo htmlspecialchars($row['bio']); ?></p>
                            <div class="other">
                                <p>Office Hours: <br><?php echo nl2br(htmlspecialchars($row['office_hours'])); ?></p>
                                <p>Department: <?php echo htmlspecialchars($row['department']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                $counter++;
            }
        } else {
            echo '<div class="no-instructors">
                    <p>No instructors found. Click "Add New Instructor" to add one.</p>
                  </div>';
        }
        mysqli_close($conn);
        ?>
    </div>

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