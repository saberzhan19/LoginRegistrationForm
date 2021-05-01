<?php 

//Откуда я все этот код взял https://itnan.ru/post.php?c=1&p=497962

$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING); 

if(mb_strlen($username) < 3 || mb_strlen($username) > 90){
	echo "Недопустимая длина логина";
	exit();
}

else if(mb_strlen($email) < 3){
	echo "Недопустимая длина имени.";
	exit();
} // Проверяем длину имени 

$password = password_hash($password, PASSWORD_DEFAULT); // Создаем хэш из пароля

$mysql = new mysqli('localhost','root','root', 'logreg3');

$result1 = $mysql->query("SELECT * FROM `logreg3` WHERE `red` = '$username'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}

$mysql->query("INSERT INTO `logreg3` (`username`, `password`, `email`)
	VALUES('$username', '$password', '$email')");
$mysql->close();

header('Location: /');
exit();
 ?>