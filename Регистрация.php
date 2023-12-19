<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<title>Cinema</title>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<a class="my-6 mr-md-center div text-align='center' " style="font-family: Time New Romans; color: DeepPink; font-size: 30px;  margin-left: 580px;text-align: center;text-decoration: none" href="index2.php">Liberty</a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
</nav>
</div> 
<div class="container mt-4">
<h1>Вход</h1>
<form action="входphp.php" method="post">
<div class="row g-3">
<div class="col-sm-6">
<label for="login" class="form-label">Логин</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Введите логин" value="" required="">
<div class="invalid-feedback">
Valid first name is required.
</div>
</div>
<div class="col-12">
<label for="password" class="form-label">Пароль <span class="text-body-secondary"></span></label>
<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
<div class="invalid-feedback">
Please enter a valid email address for shipping updates.
</div>
</div>
</div>
<button class="btn btn-success mt-4" type="submit">Войти</button>
</form>
</div>

</body>
</html>

<style>
    body{
        background: #F2DEE7;
}
</style>