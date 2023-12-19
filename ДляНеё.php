<?php
$connect = mysqli_connect("localhost","root","root","otelier");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
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
<!--первый блок-->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none" style="font-family: cursive; font-size: 25px;" href="Каталог.php">ВСЁ КАТЕГОРИИ</a>
<a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none" style="font-family: cursive; font-size: 25px;" href="ДляНеё.php">ДЛЯ НЕЁ</a>
<a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none" style="font-family: cursive; font-size: 25px;" href="ДляНего.php">ДЛЯ НЕГО</a>
<a class="me-3 py-2 link-body-emphasis text-dark text-decoration-none" style="font-family: cursive; font-size: 25px;" href="ДляДетей.php">ДЛЯ ДЕТЕЙ</a>
</div>
<span style="font-family: cursive; color: DeepPink; font-size: 90px; margin-left: 100px;text-align: center;">В НАЛИЧИИ ДЛЯ НЕЁ</span>

<br>
<br>
<br>
<br>
<!--второй блок-->
<div class="card-body">
<div class="container md-6">
    <h3 class="mb-5"></h3>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">    

    <?php  
        $query = "SELECT * FROM dlyanee";
                    $result = mysqli_query($connect, $query);

                    while ($row = mysqli_fetch_array($result)) {?>
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <div class="card-body">
                            <form method="post" action="Корзина.php?id=<?=$row['id'] ?>">
                            <img src="img/каталог/все/<?= $row['img'] ?>"  style='height: 200px;' class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <p><?= $row['title']; ?></p>
                            </ul>
                            <h5>Цена: <?= $row['price']; ?> руб</h5>
                            <input type="hidden" name="title" value="<?= $row['title'] ?>">
                                    <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                    <input type="number" name="quantity" value= "1" class="form-control">
                                    <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value=" Купить">
                        </div>
                        </div>
                        </form>
                    </div>
                    <?php }

                ?>
                </ul>
                </div>
</div>


</div>

<div style="position: fixed; bottom: 10px; right: 10px; color: green;">
<strong>
Learn Web Coding
</strong>
</div>
<script type="text/javascript">
$(document).ready(function(){
$("#limit-records").change(function(){
$('form').submit();
})
})
</script>
<!-- третий блок-->
<div style="background-color:black; width:100%; height:2px;"></div>
<footer>
    <br>
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-body-secondary"><ya-tr-span data-index="37-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="© 2017–2023" data-translation="© 2017–2023" data-ch="0" data-type="trSpan">© 2022-2023</ya-tr-span></small>
      </div>
      <div class="col-6 col-md">
        <h5><ya-tr-span data-index="38-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Features" data-translation="Характеристики" data-ch="0" data-type="trSpan" style=" color: black;">МЕНЮ</ya-tr-span></h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="index.php"><ya-tr-span data-index="39-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Cool stuff" data-translation="Классная штука" data-ch="0" data-type="trSpan" >Конструктор</ya-tr-span></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="Женщинам.php"><ya-tr-span data-index="40-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Random feature" data-translation="Случайная функция" data-ch="0" data-type="trSpan">Женщинам</ya-tr-span></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="Мужчинам.php"><ya-tr-span data-index="41-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Team feature" data-translation="Командная функция" data-ch="0" data-type="trSpan">Мужчинам</ya-tr-span></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="Детям.php"><ya-tr-span data-index="42-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Stuff for developers" data-translation="Материал для разработчиков" data-ch="0" data-type="trSpan">Детям</ya-tr-span></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="Каталог.php"><ya-tr-span data-index="43-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Another one" data-translation="Еще один" data-ch="0" data-type="trSpan">Каталог</ya-tr-span></a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5><ya-tr-span data-index="45-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Resources" data-translation="Ресурсы" data-ch="0" data-type="trSpan" style=" color: black;">О СЕРВИСЕ</ya-tr-span></h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="ОНас.php"><ya-tr-span data-index="46-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Resource" data-translation="Ресурс" data-ch="0" data-type="trSpan">О нас</ya-tr-span></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="Контакты.php"><ya-tr-span data-index="47-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Resource name" data-translation="Название ресурса" data-ch="0" data-type="trSpan">Контакты</ya-tr-span></a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5><ya-tr-span data-index="50-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="About" data-translation="О нас" data-ch="0" data-type="trSpan" style=" color: black;">ПОКУПАТЕЛЯМ</ya-tr-span></h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="Покупателям.php"><ya-tr-span data-index="52-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Locations" data-translation="Адреса" data-ch="0" data-type="trSpan">Доставка и оплата</ya-tr-span></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="РазмерТабл.php"><ya-tr-span data-index="53-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Privacy" data-translation="Конфиденциальность" data-ch="0" data-type="trSpan">Размерные таблицы</ya-tr-span></a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>

<style>
    body{
  background: #F2DEE7;
}
    .img-thumbnail{
      background-color: Pink; /* Set your desired background color */
    }

    footer {
      background-color: #343a40; /* Set your desired footer background color */
      color: #ffffff; /* Set your desired text color */
      padding: 20px 0; /* Adjust padding as needed */
    }

    h5 {
      color: #ffffff; /* Set your desired heading color */
    }

    ul.list-unstyled {
      padding: 0;
      list-style: none;
    }

    .link-secondary {
      color: #6c757d; /* Set your desired link color */
    }
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