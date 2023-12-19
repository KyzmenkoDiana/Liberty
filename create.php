<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<title>Добавление</title>
</head>
<div class="container mt-4">
<div class="row">
<div class="col">
<h3 class="display-6">Добавить товар</h3>
</div>
<form action="crud/create.php" method="post">
<p class="form-label">Название</p>
<input class="form-control" type="text" name="name">
<p class="form-label">Фото</p>
<input class="form-control" type="text" name="img">
<p class="form-label">Цена </p>
<input class="form-control" type="number" name="price"> <br><br>
<button class="btn btn-success "  type="submit">Добавить товар</button>
</form>
</div>
</div>
</div>
</body>
</html>