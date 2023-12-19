<?php


$connect = mysqli_connect("localhost","root","root","otelier");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$id = $_GET['id'];

mysqli_query($connect, query: "DELETE FROM `corzina` WHERE  `corzina`.`id` = '$id'");

header('Location: ../crud.php');