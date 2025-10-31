<?php 
require_once 'dbConn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <link href="./css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/feedback_view.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
                        <a href="./index.html" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./courses.html" class="nav-link">
                            Courses
                        </a>
                    </li>

                    <li class="sideBarList">
                        <a href="./Instructor page.html" class="nav-link">
                            Instructors
                        </a>
                    </li>

                    <li class="sideBarList"  id="selectedNavItem">
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


     <!-- Feedback View -->
      
<h2 class="topic">All Feedback</h2>

<div class="table-container">

  <a href="about.html" class="btn-add"> Add New Feedback</a>

  <?php
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM feedback WHERE id=$id");
    echo "<div class='alert alert-danger'>Feedback deleted successfully!</div>";
  }

  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    $conn->query("UPDATE feedback SET name='$name', email='$email', message='$message', rating='$rating' WHERE id=$id");
    echo "<div class='alert alert-success'>Feedback updated successfully!</div>";
  }
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Rating</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM feedback ORDER BY id DESC");
      while ($row = $result->fetch_assoc()) {
          echo "<tr>
            <form method='POST'>
              <td>{$row['id']}<input type='hidden' name='id' value='{$row['id']}'></td>
              <td><input type='text' name='name' value='{$row['name']}'></td>
              <td><input type='email' name='email' value='{$row['email']}'></td>
              <td><textarea name='message'>{$row['message']}</textarea></td>
              <td><input type='number' name='rating' value='{$row['rating']}' min='1' max='5'></td>
              <td>
                <button type='submit' name='update'>Update</button>
                <a href='feedback_view.php?delete={$row['id']}' class='btn-danger' onclick='return confirm(\"Delete this feedback?\")'>Delete</a>
              </td>
            </form>
          </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

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

</body>

</html>

