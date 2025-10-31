
<?php
  require_once 'dbConn.php';

   $table="CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    rating INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

    $create=mysqli_query($conn,$table);

    if(!$create){
        die('Could not create table: ' . mysqli_error($conn));
    }

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO feedback (name, email, message, rating)
            VALUES ('$name', '$email', '$message', '$rating')";


    if (mysqli_query($conn,$sql)) {
       echo "<div style='
    background: #abe3b2ff; 
    color: #155724; 
    padding: 15px; 
    text-align: center; 
    border-radius: 5px;
    margin: 50px auto;
    width: 50%;
    font-family: Arial, sans-serif;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  '>✅ Feedback submitted successfully!</div>";
   

    } else {
       echo "<div style='
    background: #ecedd4ff; 
    color: #155724; 
    padding: 15px; 
    text-align: center; 
    border-radius: 5px;
    margin: 50px auto;
    width: 50%;
    font-family: Arial, sans-serif;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  '>Error !</div>";
    }

  }
  ?>