
<?php require_once './headerFooter/header.php'?>
<script>
    // Add login-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const loginCss = document.createElement('link');
        loginCss.rel = 'stylesheet';
        loginCss.href = './css/loginn.css';
        document.head.appendChild(loginCss);
    });
</script>

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
                        <a href="./sign.php">SIGN UP </a>
                    </div>
                    <p id="demo"></p>
                </div>
            </form>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <?php require_once './headerFooter/footer.php'?>
