<?php require_once './headerFooter/header.php'?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/sign.css';
        document.head.appendChild(css);
    });
</script>
    <!-- CONTECT SECTION -->
    <section>
        <div id="signImg">
            <img src="./assets/lahiru/sign.jpg" alt="sign img">
        </div>

        <div id="signForm">
            <form class="form" name='signForm' action="./process.php" method="post" onsubmit="return validateForm(event)">
    
                <div class="sigin">
                    <h1>SIGN PAGE</h1> <br />
                    <label for="username">User Name:</label><br />
                    <input type="text" name="username" id="username" ><br /><br />

                    <label for="email">Email:</label><br />
                    <input type="text" name="email" id="email" ><br /><br />

                    <label for="password">Password:</label><br />
                    <input type="password" name="password" id="password" ><br /><br />

                    <label for="confirm-password">Conform password:</label><br />
                    <input type="password" name="confirm-password" id="confirm-password" ><br /><br /><br />

              

                    <br /><br />
                    <button type="submit">SUMBIT</button>
                   
                </div>
                <p id="demo"></p>
            </form>

        </div>
    </section>

    <!-- FOOTER SECTION -->
<?php require_once './headerFooter/footer.php' ?>