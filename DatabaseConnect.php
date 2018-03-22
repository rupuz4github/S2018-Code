<?php

$conn = mysqli_connect('localhost','root', '12345');

if (!$conn){

    die("Database Connection Failed" . mysqli_connect_error());
}

$select_db = mysqli_select_db($conn, 'ITAudit');

if (!$select_db){

    die("Database Selection Failed" . mysqli_connect_error());

}

session_start();

 ?>
