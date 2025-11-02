<?php


session_start();


include_once("dbConn.php");

 $name=$_SESSION['cardname'];
  $cnum= $_SESSION['cardnumber'];
   $exdate=$_SESSION['expdate'];

   echo$name;
   echo$cnum;
   echo$exdate;
   


   $sql="DELETE FROM payment_info WHERE card_holder_name ='$name' AND card_number='$cnum' AND expire_date='$exdate';";

   if(mysqli_query($conn,$sql)){
    header('location:courses.php');
   }else{
    echo "Deleted failed";
   };





?>