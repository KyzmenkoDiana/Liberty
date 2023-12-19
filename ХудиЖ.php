<?php
session_start();

$connect = mysqli_connect("localhost", "root", "root", "otelier");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

function printOption($result, $question, $option) {
    echo '<div class="option" onclick="selectOption(' . $question . ',' . $option . ')">';
    echo '<img src="img/woman/худи/' . $result['Фотография'] . '" alt="Вид одежды ' . $question . '.' . $option . '">';
    echo '<p>' . $result['Описание'] . '</p>';
    echo '<p>Цена: ' . $result['Цена'] . '</p>';
    echo '</div>';
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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .question-container {
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
        }

        .option-container {
            display: flex;
            justify-content: center;
        }

        .option {
            border: 2px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .option:hover {
            background-color: #f0f0f0;
        }

        .option img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .selected {
            border-color: green;
        }
    </style>
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
<!-- Вопрос 1 -->

<div class="question-container question-1">
    <h2 style="font-family: cursive; font-size: 25px;">Выберите желаемый капюшон:</h2>
    <div class="option-container">
        <?php
        // Выборка данных из базы данных для вопроса 1
        $result = $connect->query("SELECT * FROM hydiжп WHERE question = 1");
        while ($row = $result->fetch_assoc()) {
            printOption($row, 1, $row['Option1']);
        }
        ?>
    </div>
</div>
<!-- Вопрос 2 -->
<div class="question-container question-2">
    <h2 style="font-family: cursive; font-size: 25px;">Выберите желаемую длину:</h2>
    <div class="option-container">
        <?php
        // Выборка данных из базы данных для вопроса 1
        $result = $connect->query("SELECT * FROM hydiжп WHERE question = 2");
        while ($row = $result->fetch_assoc()) {
            printOption($row, 2, $row['Option1']);
        }
        ?>
    </div>
</div>

<div class="question-container question-3">
    <h2 style="font-family: cursive; font-size: 25px;">Выберите желаемый карман:</h2>
    <div class="option-container">
        <?php
        // Выборка данных из базы данных для вопроса 1
        $result = $connect->query("SELECT * FROM hydiжп WHERE question = 3");
        while ($row = $result->fetch_assoc()) {
            printOption($row, 3, $row['Option1']);
        }
        ?>
    </div>
</div>

<div class="question-container question-4">
    <h2 style="font-family: cursive; font-size: 25px;">Выберите желаемый цвет:</h2>
    <div class="option-container">
        <?php
        // Выборка данных из базы данных для вопроса 1
        $result = $connect->query("SELECT * FROM hydiжп WHERE question = 4");
        while ($row = $result->fetch_assoc()) {
            printOption($row, 4, $row['Option1']);
        }
        ?>
    </div>
</div>

<script>
function selectOption(question, option) {
    // Сначала убираем зеленую окантовку у всех вариантов текущего вопроса
    document.querySelectorAll(`.question-${question} .option`).forEach(function (el) {
        el.classList.remove('selected');
    });

    // Выбираем зеленую окантовку для выбранного варианта
    document.querySelector(`.question-${question} .option:nth-child(${option})`).classList.add('selected');
}
</script>


<a href="чек.php?question-1=<?php echo $selectedOptions1; ?>&question-2=<?php echo $selectedOptions2; ?>&question-3=<?php echo $selectedOptions3; ?>&question-4=<?php echo $selectedOptions3; ?>" class="floating-button">Оформить заказ</a>
<!-- четвертый блок-->
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
