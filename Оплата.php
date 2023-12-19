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
<div class="row">
  <div class="col-75">
    <div class="container">
      <form>
        <div class="row">
          <div class="col">
            <h3>Платежный адрес</h3>
            <label for="fname"><i class="fa fa-user"></i>Имя</label>
            <input type="text" id="fname" name="firstname" placeholder="Щипунов Андрей Леонидович">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="and-shhipunov@mail.ru">
            <label for="adr"><i class="fa fa-address-card-o"></i>Адрес</label>
            <input type="text" id="adr" name="address" placeholder="Томская 44-39">
            <label for="city"><i class="fa fa-institution"></i>Город</label>
            <input type="text" id="city" name="city" placeholder="Пермь">
            <label for="city"><i class="fa fa-institution"></i>Телефон</label>
            <input type="namber" id="namber" name="namber" placeholder="+79780099551">

            <div class="row">
              <div class="col-50">
                <label for="state">Государство</label>
                <input type="text" id="state" name="state" placeholder="Россия">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Платеж</h3>
            <label for="fname">Допустимые карты</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Имя на карте</label>
            <input type="text" id="cname" name="cardname" placeholder="Щипунов Андрей Леонидович">
            <label for="ccnum">Номер кредитной карты</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Годен месяц</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Сентябрь">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Годен год</label>
                <input type="text" id="expyear" name="expyear" placeholder="2021">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
        </div>
        <a href="оплата2.php" class="floating-button">Оплатить</a>
      </form>
    </div>
  </div>
</div>

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
  a{
    position: relative;  transform: translate(0, 0);
    }
  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Адаптивный макет - когда экран меньше 800 пикселей в ширину, сделайте два столбца стеком друг на друга, а не рядом друг с другом (и измените направление-сделайте столбец "корзина" сверху) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
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