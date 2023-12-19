<?php

$connect = mysqli_connect("localhost","root","root","otelier");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$films_id = $_GET['id'];
$films = mysqli_query($connect, query:"SELECT * FROM `corzina` WHERE `id` = '$films_id'");
$films = mysqli_fetch_assoc($films);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Изменить товар</title>
<link rel = "stylesheet" href="./css/style1.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<form action="crud/update.php" method="post">
<input type="hidden" name="id" value="<?= $films['id'] ?>">
<div class="container mt-4">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<h3 class="display-6">Изменить</h3>
</div>
<p class="form-label">Название товара</p>
<input class="form-control" type="text" name="title" value="<?= $films['title'] ?>">
<p class="form-label">Фотография</p>
<input class="form-control" type="photo" name="img" value="<?= $films['img'] ?>">
<p class="form-label">Цена </p>
<input class="form-control" type="number" name="price" value="<?= $films['price'] ?>"> <br><br>
<button class="btn btn-success " type="submit">Изменить</button>
</form>
</div>
</body>
</html>