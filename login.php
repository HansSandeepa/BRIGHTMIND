<?php require_once './headerFooter/header.php' ?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/loginn.css';
        document.head.appendChild(css);
    });
</script>

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
        <a href="admin.html" class="nav-btn admin-btn" id="adminBtn">Admin Panel</a>
    </div>
</header>
<div id="headerWrapper">
    <!-- do not delete this element -->
</div>


<!-- CONTECT SECTION -->
<section>
    <div id="imgContainer">
        <!--left side image-->
        <img src="./assets/lahiru/login.jpg" alt="login">
    </div>

    <!--form part-->
    <div id="formContainer">
        <form class="form" onsubmit="func(event)">

            <div class="sigin">
                <h1>LOGIN PAGE</h1> <br />
                <label>User Name:</label><br />
                <input type="text" name="username" id="username" required><br /><br />

                <label>Password</label><br />
                <input type="password" name="password" id="password" required><br /><br />

                <label><input class="checkbox" type="checkbox" name="password">Remeber me</label>

                <button type="submit"><label class="sumbit">LOGIN</label></button>
                <br />


                <div class="orlogin">or login with</div>

                <!--icon part-->
                <a href=""><img class="icon" src="./assets/lahiru/facebook-new.png"></a>
                <a href=""><img class="icon" src="./assets/lahiru/google new.jpg"></a>
                <a href=""><img class="icon" src="./assets/lahiru/twitter-new.png"></a>
                <br />



                <div class="end">
                    Creat a New Account<br />
                    <a href="sign.html">SIGN UP </a>
                </div>
                <p id="demo"></p>
            </div>
        </form>
    </div>
</section>

<!-- FOOTER SECTION -->
<?php require_once './headerFooter/footer.php' ?>