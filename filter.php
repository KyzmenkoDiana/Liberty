<?php $connect = mysqli_connect("localhost","root","root","otelier");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Страница admin</title>
</head>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Admin</h5>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
    <div class="container mt-1">
    <a class="btn btn-outline-primary" href="crud.php">назад</a>
<a class="btn btn-outline-primary" href="create.php">Добавить</a>
<a class="btn btn-outline-primary" href="index.php">Выйти</a>
</nav>

</div>
</div>
<style>
form {
    width: 1050px;
    }

th, td {
    padding:10px;
}

th {
    background: #fdfbfb;
    color: #11111;
}

td {
    background: hsl(0, 100%, 100%);
    color: #0a0a0a;
}

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Поиск</h34> 
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" required value="<?php  if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control" placeholder="Search data">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>img</th>
                            <th>Prise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con = mysqli_connect('localhost','root','root','otelier');

                        if(isset($_GET['search']))
                        {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM `corzina` WHERE CONCAT(`title`,`img`,`price`) LIKE '%$filtervalues%'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $items)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $items['id']?></td>
                                    <td><?= $items['title']?></td>
                                    <td><img src="img/каталог/все/<?= $items['img'] ?>"  style='height: 150px;'></td>
                                    <td><?= $items['price']?></td>
                                    <td><a href="update.php?id=<?= $product[0]?>">Изменить</a></td>
                                    <td><a style="color: red;" href="crud/delete.php?id=<?= $product[0]?>">Удалить</a></td>
                                    </tr>
                                    <?php 
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                                <?php  
                            }
                        }
                        ?>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    </div> 
    </div>     
</body>
</html>

