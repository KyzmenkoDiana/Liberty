<?php

session_start();

$connect = mysqli_connect("localhost","root","root","otelier");

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart'])) {
        $session_array_id = array_column($_SESSION['cart'], "id");
        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                'id' => $_GET['id'],
                'title' => $_POST['title'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            );
            $_SESSION['cart'][]= $session_array;   
        }
    }else{
        $session_array = array(
            'id' => $_GET['id'],
            'title' => $_POST['title'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity']
        );
        $_SESSION['cart'][]= $session_array;  
    }
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Liberty</title>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" >
    <a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none" style="font-family: cursive; font-size: 25px;" href="Женщинам.php">Женщинам</a>
    <a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none"  style="font-family: cursive; font-size: 25px;" href="Мужчинам.php">Мужчинам</a>
    <a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none"  style="font-family: cursive; font-size: 25px;" href="Детям.php">Детям</a>
<a class="my-6 mr-md-center div text-align='center' " style="font-family: cursive; color: DeepPink; font-size: 40px;  margin-left: 185px;text-align: center;text-decoration: none" href="index2.php">Liberty</a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none"  style="font-family: cursive; font-size: 25px;" href="Каталог.php">Каталог</a>
        <a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none"  style="font-family: cursive; font-size: 25px;" href="Покупателям.php">Покупателям</a>
</nav>
</div>
<style>
        .a {
  color: black;
  text-decoration: none;
  display: inline-block;
  transition: transform 0.3s ease;
}
a:hover {
  transform: scale(1.2);
}
</style>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
        <div class="col-md-6">
                <h2 class="text-center">Ваша корзина</h2>
                <div>
                        <a class="btn btn-outline-primary" href="Каталог.php">Добавить товар</a><br>
                        </div>
                <?php

                $total = 0;


                    $output = "";

                    $output .= "
                    <table class='table table-bordered table-striped'>
                    <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Всего</th>
                    <th>Итог</th>
                    </tr>
                    ";

                    if(!empty($_SESSION['cart'])) {


                        foreach ($_SESSION['cart'] as $key => $value) {
                            $output .= "
                            <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['title']."</td>
                            <td>".$value['price']."</td>
                            <td>".$value['quantity']."</td>
                            <td>" .number_format($value['price'] * $value['quantity'], 2)."</td>
                            



                            ";

                            $total = $total + $value['quantity'] * $value['price'];
                        }

                        $output .= "
                        <tr>
                        <th></b>Всего</b><th>
                        <th colspan='2'></th>
                        <th>".number_format($total,2)."</th>
                        <td>
                            <a href='Оплата1.php?action=remove$id=".$value['id']."'>
                            <button class='btn btn-primary buy' >Оформить</button>
                            </a>
                            </td>
                        </tr>
                        
                        ";

                        $output .= "
                        <tr>
                        <th><th>
                        <th colspan='1'></th>
                        <th></th>
                        <th></th>
                        <td>
                        <a href='Корзина.php?action=clearall'>
                        <button class='btn btn-danger btn-block'>Очистить</button>
                        </a>
                        </td>
                        </tr>
                        
                        ";
                    }



                    echo $output;

                ?>
            </div>
        </div>

    </div>

</div>


<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] == "clearall") {
        unset($_SESSION['cart']);
    }

        if ($_GET['action'] == "remove"){

            foreach ($_SESSION['cart'] as $key => $value) {

                if ($value['id'] == $_GET['id']) {
                    unset($_SESSION['cart'][$key]);
            }
        }
    }
}

?>

</body>
</html>
<style>
    body{
background: #F2DEE7;
}
</style>