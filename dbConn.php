<?php

$server = 'localhost';
$username = 'root';
$password = '1234';    //තමන්ගෙ database එකේ password එක දාන්න
$database = 'brightmindDb';

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die('Connection failed:' . mysqli_connect_error());
}