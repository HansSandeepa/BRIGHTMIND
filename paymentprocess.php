<?php
session_start();
?>

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $paymentcheckbox = htmlspecialchars($_POST['paymentcheckbox']);
    $cardname = htmlspecialchars($_POST['cardholdername']);
    $cardnumber = (string) htmlspecialchars($_POST['cardnumber']);
    $lastfour = substr($cardnumber, -4);
    $enccardnum = '************' . $lastfour;
    $expiredate = htmlspecialchars($_POST['expiredate']);
    $amount=$_SESSION['Courseprice'];
    $course_name=$_SESSION["coursename"];


   

require_once("./dbconn.php");

   $_SESSION['cardname']=$cardname;
   $_SESSION['cardnumber']=$enccardnum;
   $_SESSION['expdate']=$expiredate;

    if (!$conn) {
        die("Could Not Connect : " . mysqli_error($conn));
    } else {


        mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS brightmindDb");

       // mysqli_select_db($link, 'brightmindDb');

        mysqli_query($conn, "CREATE TABLE IF NOT EXISTS payment_info(

        payment_id int AUTO_INCREMENT PRIMARY KEY,
        card_type varchar(10) ,
        card_number varchar(19) ,
        card_holder_name varchar(50),
        expire_date varchar(10),
        course_name varchar(100),
        course_price decimal(5,2),
        payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP

    );");

        if (isset($_POST['terms'])) {




         $datain = mysqli_query($conn, "INSERT INTO payment_info(card_type,card_number,card_holder_name,expire_date,course_name,course_price) 
                                                VALUES('$paymentcheckbox','$enccardnum','$cardname','$expiredate','$course_name',$amount);");

            if (!$datain) {
                echo mysqli_error($conn);
            }

  
        }

    }
    mysqli_close($conn);
    header("Location:PaymentSuccesPage.php");
    exit();

} else {
    header("Location:PaymentPage.php");
    exit();
}


   

?>