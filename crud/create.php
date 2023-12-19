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

mysqli_query($connect, query:"INSERT INTO `corzina` (`id`, `title`, `img`, `price`) 
VALUES (NULL,'$name', '$photo','$price')");

header('Location: ../crud.php');
