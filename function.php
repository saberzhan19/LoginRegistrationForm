<?php
session_start();

$name = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=logreg3", "root", "root");

$sql = "SELECT * FROM samal WHERE name=:name";

$stm = $pdo->prepare(sql);
$stm->execute(["name" => $name]);
$user = $stm->fetch(PDO::FETCH_ASSOC);

// var_dump($user);die;

if(!empty($user)){
    $_SESSION["danger"] = "Address is busy!";
    header("Location:/sign-up-form");
    exit;
} 

$sql = "INSERT INTO samal(name, password) VALUES(:name, :password)";

$stm = $pdo->prepare($sql);
$stm->execute([
    "name" => $name,
    "password" => password_hash($password, PASSWORD_DEFAULT)
]);
