<?php
session_start();
require_once './headerFooter/header.php';
$error = '';
if(isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>


<!DOCTYPE html>
<head>
    <style>
        .f{
            align-items: center;
            width: 300px;
            height: 290px;
            border: 1px solid black;
            background-color: white;
            padding-left: 150px;
            border-radius: 25px;
            margin: 100px;
            margin-left: 500px;
        }

        .form{
            font-size: 25px;
        }

        .label {
            font-size: 20px;
        
        }

        .sub, .rst{
            font-size: 15px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            
        }

        .sub{
            background-color: green;
        }

        .rst{
            background-color: red;
        }

    </style>
</head>
<body>
    <div class="f">
        <form method="post" action="adminprocess.php" class="form">
            <br>
            <label class="name">Username:</label><br>
            <input type="text" name="uname" required><br><br>
            <label>Password:</label></br>
            <input type="password" name="pwd" required><br><br>
            
            <?php if(!empty($error)): ?>
                <div style='color: red; font-weight: bold; text-align: center; margin-bottom:10px; margin-left: -125px '>
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <input type="submit" name="sub" class="sub">
            <input type="reset" name="rst" class="rst"><br>
        </form>
    </div>
</body>
   



<?php
require_once './headerFooter/footer.php';
?>