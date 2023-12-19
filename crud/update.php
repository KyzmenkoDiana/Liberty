<?php

$connect = mysqli_connect("localhost","root","root","otelier");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$name = $_POST['title'];
$photo = $_POST['img'];
$price = $_POST['price'];

mysqli_query($connect, query:"UPDATE `corzina` SET `title` = '$name', 
`img` = '$photo', `price` = '$price' WHERE `corzina`.`id` = '$id'");

header('Location: ../crud.php');