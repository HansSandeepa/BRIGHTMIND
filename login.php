<?php
include_once("./dbconn.php");
session_start();

if(isset($_POST["login"])){
    $_SESSION['username'] = $_POST['name'];
    $name = $_POST['name'];
    $password = $_POST['pwd'];
    
    $sql = "SELECT upassword FROM user WHERE user_name='$name'";
    $result = mysqli_query($conn, $sql);
    
    if($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if($user['upassword'] == $password) {
            $_SESSION['username'] = $name;
            header("Location: Dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid password!');</script>";
        }
    } else {
        echo "<script>alert('User not found!');</script>";
    }
}
?>


<?php
include_once("headerFooter/header.php");
?>

<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/loginn.css';
        document.head.appendChild(css);
    });
</script>

    <section>
        <div id="imgContainer">
            <!--left side image-->
            <img src="./assets/lahiru/login.jpg" alt="login">
        </div>

        <!--form part-->
        <div id="formContainer">
            <form class="form" method='POST' onsubmit="func(event)">

                <div class="sigin">
                    <h1>LOGIN PAGE</h1> <br />
                    <label>User Name:</label><br />
                    <input type="text" name="name" id="username" required><br /><br />

                    <label>Password</label><br />
                    <input type="password" name="pwd" id="password" required><br /><br />

                    <label><input class="checkbox" type="checkbox" name="password">Remeber me</label>

                    <button type="submit" name='login'><label class="sumbit">LOGIN</label></button>
                    <br />


                    <div class="orlogin">or login with</div>

                    <!--icon part-->
                    <a href=""><img class="icon" src="./assets/lahiru/facebook-new.png"></a>
                    <a href=""><img class="icon" src="./assets/lahiru/google new.jpg"></a>
                    <a href=""><img class="icon" src="./assets/lahiru/twitter-new.png"></a>
                    <br />



                    <div class="end">
                        Creat a New Account<br />
                        <a href="sign.php">SIGN UP </a>
                    </div>
                    <p id="demo"></p>
                </div>
            </form>
        </div>
    </section>

<?php
include_once("headerFooter/footer.php");
?>