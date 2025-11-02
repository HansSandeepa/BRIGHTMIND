<?php

$server = 'localhost';
$username = 'root';
$password = '';    //තමන්ගෙ database එකේ password එක දාන්න
$database = 'brightmindDb';
$port = 3307;
$conn = mysqli_connect($server,$username,$password,$database,$port);

if(!$conn){
    die('Connection failed:' . mysqli_connect_error());
}