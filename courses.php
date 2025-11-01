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
    <link rel="stylesheet" href="./css/courses.css">
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
                        <a href="./index.php" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="sideBarList"  id="selectedNavItem">
                        <a href="./courses.html" class="nav-link">
                            Courses
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./Instructor page.html" class="nav-link">
                            Instructors
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./about.html" class="nav-link">
                            About Us
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./contactUs.html" class="nav-link">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </div>
            <div class="bottomContent">
                <ul class="sideBarLists">

                    <li class="sideBarList">
                        <a href="./login.html" class="nav-link">
                            Log In
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./sign.html" class="nav-link">
                            Sign In
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

        <div id="loginBtnSection">
            <a href="./login.html">Log In</a>
            <a href="./sign.html">Sign In</a>
        </div>
    </header>
    <div id="headerWrapper">
        <!-- do not delete this element -->
    </div>

    <!-- CONTECT SECTION -->


                                                                    <!--First section-->
    <div>
        <div id="choosepath">
            <p id="para1">Choose your path<br>and Grow your<br>career</p>
            <img id="leftimg" src="./assets/courses/courseleftimg.jpg">
        </div>
    </div>


   


                                                                    <!--Exclusive content-->

    <p id="exclusive">Exclusive Content</p>
    <div id="excourses">


        <div id="Fone" class="paid_content courses">
            <img id="Ai" src="./assets/courses/Ai.jpeg" alt="Ai image">
            <p id="aititle">AI Mastery</p>
            <p id="aipara">Step into the future with cutting-edge AI knowledge—perfect for those who want to lead the tech revolution.</p>
            <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>
        </div>

        <div id="Sone" class="paid_content courses">
            <img id="web" src="./assets/courses/web.jpeg" alt="Web image">
            <p id="webtitle">Web Development Pro</p>
            <p id="webpara">Build stunning, functional websites with essential tools and coding languages.</p>
            <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>
        </div>

        <div id="Tone" class="paid_content courses">
            <img id="eleceng" src="./assets/courses/eengineer.jpeg" alt="Electrical Engineering image">
            <p id="elecengtitle">Electrical Engineering</p>
            <p id="elecengpara">Master the building blocks of electrical systems and bring your engineering ideas to life.</p>
            <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>
        </div>

        <div id="Lone" class="paid_content courses">
            <img id="banalyze" src="./assets/courses/banalyze.jpeg" alt="Business Analyze image">
            <p id="banalyzetitle">Business Analysis Essentials</p>
            <p id="banalyzepara">Gain the skills to interpret data, make strategic decisions, and drive success.</p>
            <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>

        </div>


    </div>

                                                                 <!--Free courses content-->

    <p id="free">Learn for Free</p>
    <p id="freepara">Start your journey from here.<br>Free 100%</p>
    <div id="freecourses">
        <div id="f1" class="courses free-content">
            <img id="f1img" src="./assets/courses/f1.jpeg" alt="">
            <p id="f1title">Financial Market</p>
            <p id="f1para">Understand trading and investments to kickstart your financial journey.</p>
        </div>
        <div id="f2" class="courses free-content">
            <img id="f2img" src="./assets/courses/f2.jpeg" alt="Excel course image">
            <p id="f2title">Microsoft Excel</p>
            <p id="f1para">Learn to organize data and create professional spreadsheets effortlessly.</p>
        </div>
        <div id="f3" class="courses free-content">
            <img id="f3img" src="./assets/courses/f3.jpeg" alt="Python image">
            <p id="f3title">Python & AI Development</p>
            <p id="f1para">Start coding with Python and explore the power of AI.</p>
        </div>
        <div id="f4" class="courses free-content">
            <img id="f4img" src="./assets/courses/f4.jpeg" alt="Cybersecurity image">
            <p id="f4title">Cybersecurity for Everyone</p>
            <p id="f4para">Protect your digital world with simple cybersecurity techniques.</p>
        </div>

    </div>

                                         <!--Second row-->
    <details>
        <summary id="more">See more</summary>
        <div id="freecourses2">
            <div id="f5" class="courses paid_content">
                <img id="f5img" src="./assets/courses/f5.jpeg" alt="Chinese image">
                <p id="f5title">Chinese for Beginner</p>
                <p id="f5para">Learn essential Mandarin phrases and vocabulary to kickstart your language journey.</p>
            </div>
            <div id="f6" class="courses paid_content">
                <img id="f6img" src="./assets/courses/f6.jpeg" alt="Excel course image">
                <p id="f6title">SQL for Everyone</p>
                <p id="f6para">Discover the basics of querying and managing databases with beginner-friendly SQL.</p>
            </div>
            <div id="f7" class="courses paid_content">
                <img id="f7img" src="./assets/courses/f7.jpeg" alt="Python image">
                <p id="f7title">Food and Beverage Management</p>
                <p id="f7para">Gain foundational insights into managing food and beverage operations effectively.</p>
            </div>
            <div id="f8" class="courses paid_content">
                <img id="f8img" src="./assets/courses/f8.jpeg" alt="Cybersecurity image">
                <p id="f8title">Leadership Skills</p>
                <p id="f8para">Develop key strategies for leading teams and making confident decisions.</p>
            </div>

        </div>

                                            <!--Third row-->
        <div id="freecourses3">
            <div id="f9" class="courses paid_content">
                <img id="f9img" src="./assets/courses/f9.jpeg" alt="Linux image">
                <p id="f9title">Introduce Linux</p>
                <p id="f9para">Learn the basics of Linux and step into the open-source world with confidence.</p>
            </div>
            <div id="f10" class="courses paid_content">
                <img id="f10img" src="./assets/courses/f10.jpeg" alt="Data science image">
                <p id="f10title">Data science Math skills</p>
                <p id="f10para">Master essential math concepts to build a strong foundation for data science.</p>
            </div>
            <div id="f11" class="courses paid_content">
                <img id="f11img" src="./assets/courses/f11.jpeg" alt="Cryptography image">
                <p id="f11title">Cryptography</p>
                <p id="f11para">Understand encryption and protect sensitive information in the digital age.</p>
            </div>
            <div id="f12" class="courses paid_content">
                <img id="f12img" src="./assets/courses/f12.jpeg" alt="Google ads image">
                <p id="f12title">Google Ads for Beginner</p>
                <p id="f12para">Learn to create effective ad campaigns and grow your business online.</p>
            </div>
        </div>
    </details>

















    <!-- FOOTER SECTION  -->
    <footer>

        <div id="footerWrapper">
            <div id="footerNavigation">
                <h2 class="footerTitles">Navigation</h2>
                <div class="footerNavigationLinks" id="startLinks">
                    <a href="./index.html">Home</a>
                    <a href="./courses.html">Courses</a>
                    <a href="./Instructor page.html">Instructors</a>
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

    <!-- import javascript files here -->
    <script src="./js/navbar.js"></script>
    <script src="./js/getYear.js"></script>
    <script src="./js/coursesEventHandle.js"></script>
</body>

</html>