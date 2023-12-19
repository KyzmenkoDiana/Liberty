<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

if (mb_strlen($name) < 5 || mb_strlen($name) > 90) {
echo "Недопустимая длина логина";
exit();
} else if(mb_strlen($email) < 3 || mb_strlen($email) > 50) {
echo "Недопустимая длина email";
exit();
}
$pass = md5($pass."qewrtyuiop1234");

$mysql= new mysqli('localhost', 'root', 'root', 'otelier');
$mysql->query("INSERT INTO `user` (`name`, `email`, `password`)
VALUES('$name', '$email', '$pass')");

$mysql->close();

header('Location: регистрация.php');

?>