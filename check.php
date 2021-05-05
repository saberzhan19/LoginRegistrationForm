<!-- <?php 

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


$pdo = new PDO("mysql:host=localhost;dbname=logreg3", "root", "root");

// $result1 = $mysql->query("SELECT * FROM `logreg3` WHERE `red` = '$username'");
// $user1 = $result1->fetch_assoc(); // Конвертируем в массив

$sql = "SELECT * FROM red WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(["email" => $email]);
$user3 = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($user3)){
    echo "Данный логин уже используется!";
} else{
    echo "Зарегистрируйтесь пожайлуста!";
}

$sql->query("INSERT INTO `logreg3` (`username`, `password`, `email`)
	VALUES('$username', '$password', '$email')");

$statement = $pdo->prepare($sql);
$statement->execute([

    "username" => $username,
    "email" => $email,
    "password" => password_hash($password, PASSWORD_DEFAULT) // Создаем хэш из пароля
])
// $mysql->close();

// header('Location: /');
// exit();
 ?> -->