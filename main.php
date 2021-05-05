<?php 

$qw = mysqli_connect("localhost","root","root","logreg3");

if(isset($_POST['Sing up']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "INSER INTO red (name, password, email) VALUES ('$username','$email','$pass')";
    if (mysql_query($query)){
        echo "<h3>Regictration Successfull</h3>";
    } 
}
?>