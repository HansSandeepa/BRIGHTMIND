<?php
require_once './headerFooter/header.php';
include("dbConn.php");

if(isset($_POST['add'])) {
    $admin = $_POST['adname'];
    $pwd = $_POST['pwd'];
    $hashed = md5($pwd);

    $checkUser = $conn->prepare("SELECT * FROM admin WHERE Admin = ?");
    $checkUser->bind_param("s", $admin);
    $checkUser->execute();
    $resultUser = $checkUser->get_result();

    $checkPwd = $conn->prepare("SELECT * FROM admin WHERE Password = ?");
    $checkPwd->bind_param("s", $hashed);
    $checkPwd->execute();
    $resultPwd = $checkPwd->get_result();

    if($resultUser->num_rows > 0) {
        $message = "Admin already exists";
    } elseif($resultPwd->num_rows > 0) {
        $message = "Password already in use. Please use different one.";
    } else {
        $stmt =$conn->prepare("INSERT INTO admin(Admin, Password)VALUES(?, ?)");
        $stmt->bind_param("ss", $admin, $hashed);
        $stmt->execute();
        $message =  "Admin added succesfully";
    }
}
if(isset($_GET['delete'])) {
    $del = $_GET['delete'];
    $conn->query("DELETE FROM admin WHERE UserId = $del");
}
?>

<!DOCTYPE html>
<html>
    <style>
        

        h1{
            color: red;
            text-align: center;
        }

       

        table, tr, th, td{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 1000px;
            height: 20px;
            border-collapse: collapse;
            background-color: #addfd4ff;
        }

        a{
            text-decoration: none;
        }

        form{
            border: 1px solid black;
            border-radius: 25px;
            text-align: center;
            font-size: 25px;
            padding: 20px;
            width: 500px;
            margin: 30px auto;
            background-color: #afd4ccff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .sub, .reset{
            font-size: 20px;
            margin: 10px;
            border-radius: 5px;
        }

        .sub{
            background-color: green;
        }

        .reset{
            background-color: red;
        }

        label{
            color: green;
        }

        p{
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

    </style>
</html>
<body>
    <h1>Welcome to Admin Panel</h1>


    <table border="1">
        <tr>
            <th>UserId</th>
            <th>Admin</th>
            <th>Password</th>
            <th>Remove</th>
        </tr>
    <?php

        $result = $conn->query("SELECT * FROM admin");
        while($row = $result->fetch_assoc()) {
            echo"<tr>
                    <td>{$row['UserId']}</td>
                    <td>{$row['Admin']}</td>
                    <td>{$row['Password']}</td>
                    <td><a href='admininterface.php?delete={$row['UserId']}'>Delete</a></td>
                </tr>";
        }
    ?>
    </table>

    <form method="post">
        <label>Admin Name:</label><br>
        <input type="text" name="adname" required><br>
        <label>Password:</label><br>
        <input type="password" name="pwd" required><br>
        <input type="submit" name="add" value="Add" class="sub">
        <input type="reset" name="rst" value="Reset" class="reset">
    </form>
    <?php if(!empty($message)): ?>
        <div style="color: green; font-weight: bold; font-size: 25px; text-align: center; margin-top: 10px;">
            <?=htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>

    <a href = "./add-course.php"><p>>>Add Course</p></a>
    <!-- <a href = ""><p>>>Manage Student</p></a> -->
    <a href = "./add-instructor.php"><p>>>Add Instructor</p></a>
    <a href = "./feedback_view.php"><p>>>Show Feedback</p></a>
    <a href = "./contactinterface.php"><p>>>Show Contracts</p></a>

</body>
</html>

<?php

require_once './headerFooter/footer.php';

?>