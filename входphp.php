<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."qewrtyuiop1234");

$mysql= new mysqli('localhost', 'root', 'root', 'otelier');

$result = $mysql->query("SELECT * FROM `user` WHERE `name`
= '$name' AND `password` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0 ){
echo "Такой пользователь не найден";
exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: index2.php');

?>