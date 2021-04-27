<?php 

$username = $_POST("username");
$email = $_POST("eamil");
$password = $_POST("password");

//добавления пользователя в базу, поэтому соединяюсь с базой

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "root");

//подготовить сам запрось
$sql = "INSERT INTO samal (email, username, password) VALUES (:eamil, :username, :password)";

$stm = $pdo->prepare($sql);
$stm->execute([
    "username" => $username,
    "email" => $email,
    "password" => $password
]);