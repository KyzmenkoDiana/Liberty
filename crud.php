<?php $connect = mysqli_connect("localhost","root","root","otelier");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">

    <title>Страница admin</title>
</head>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Admin</h5>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
    <div class="container mt-1">
    <a class="btn btn-outline-primary" href="filter.php">поиск</a>
    <a class="btn btn-outline-primary" href="create.php">Добавить</a>
<a class="btn btn-outline-primary" href="index.php">Выйти</a>
</nav>

</div>
</div>
<style>
    th, td {
    padding:10px;
}

th {
    background: #454246;
    color: #fff;
}

td {
    background: #fffafefa;
    color: #080808;
}
table {
    width: 700px; /* Ширина таблицы */
    border: 1px solid rgb(10, 12, 10); /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна */
    }
th {
    text-align: center; /* Выравниваем текст по центру ячейки */
    }
</style>
<body>
<div class="container mt-4">
    <div class="city_list">
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Img</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
</div>
</div>
        <?php 
            $products = mysqli_query($connect, query:"SELECT * FROM `corzina`");
            $products = mysqli_fetch_all($products);
            foreach($products as $product) {
                ?>
                <tr>
                    <td><?= $product[0]?></td>
                    <td><?= $product[1]?></td>
                    <td><img src="img/каталог/все/<?= $product[2] ?>"  style='height: 150px;'></td>
                    <td><?= $product[3]?></td>
                    <td><a href="update.php?id=<?= $product[0]?>">Изменить</a></td>
                    <td><a style="color: red;" href="crud/delete.php?id=<?= $product[0]?>">Удалить</a></td>
                </tr>
                <?php   
            }
        ?>
    </table> 
</div>    
</body>
</html>
