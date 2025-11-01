<?php
session_start();

$server = 'localhost';
$username = 'root';
$password = '';  
$port = 3307;   


$conn = mysqli_connect($server, $username, $password,'', $port);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if(isset($_POST['SUBMIT'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username == "" || $email == "" || $password == "" ){
        echo "All fields are required!";
        exit(); 
    }else{
        mysqli_query($conn , "INSERT INTO student (stuname, email, password)
         VALUES ('$username', '$email', '$password')");
    }

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM User WHERE userId=$stuid");
    exit();
}

$finresult = mysqli_query($conn,"SELECT * FROM student");
$numrow = mysqli_num_rows($finresult);
FOR ($i = 0 ; $i < $numrow ; $i++){
    $row = mysqli_fetch_assoc($finresult);
    echo "<table border = '1'> 
          <tr>
            <td>{$row['stuname']}</td>    
            <td>{$row['email']}</td>    
            <td>{$row['password']}</td>
            <td><a href='useradmin.php?delete={$row['stuid']}'>Delete</a></td>
          </tr>
          </table>";
}

$conn ->close();
?>              





