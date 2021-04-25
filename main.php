<?php 

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "root");

$sql = "INSERT INTO samal (username, password) VALUES (:username, :password)";

$st = $pdo->prepare($sql);
$st->execute([
    "username" => $username,
    "password" => $password
])